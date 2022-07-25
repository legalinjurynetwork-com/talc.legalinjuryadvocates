<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Session;
class AllController extends Controller
{
  public function index(Request $request)
  {
    $defaultPath = env('DEFAULT_PATH', '');
    return redirect($defaultPath ?: '/telc');
  }

  public function telcIndex(Request $request)
  {
    Session::put('cid', $request->get('cid'));
    switch ($request->get('aid'))
    {
      case '38': //William Kenny
        Session::put('lp_campaign_id', '62a785c01de26');
        Session::put('lp_campaign_key', 'DLmHBNt2PfnTjWhGxdVy');
        break;
      case '32': //AW Performance LLC
        Session::put('lp_campaign_id', '6244ba77c6fac');
        Session::put('lp_campaign_key', 'YnZ2RpX3GzcxKJ9THVMj');
        break;
      case '30': //Slick Ads Media
        Session::put('lp_campaign_id', '6244b883850b2');
        Session::put('lp_campaign_key', 'bXDt2fCchpY4LKGkz3jd');
        break;
      case '31': //Scale Up Media Agency Inc
        Session::put('lp_campaign_id', '6244ba459aa52');
        Session::put('lp_campaign_key', 'd39XrWbJTxzCq4RNvjtM');
        break;
      case '8': //FB Moderation
        Session::put('lp_campaign_id', '5e306b37f0864');
        Session::put('lp_campaign_key', 'gc6Y7M2FmzDXNQ3yqKdZ');
        break;
      case '35': // AdMediary
        Session::put('lp_campaign_id', '627bd25300744');
        Session::put('lp_campaign_key', 'yxqFTYvW2LkNBRVmrMjb');
        break;
      default:
        Session::put('lp_campaign_id', env('LEADSPEDIA_CAMPAIGN_ID'));
        Session::put('lp_campaign_key', env('LEADSPEDIA_CAMPAIGN_KEY'));
    }
    $phoneNumber = '(800) 484-6757';
    return view('talc.index')->with(compact('phoneNumber'));
  }

  public function telcThank(Request $request)
  {
    return view('talc.thankyou');
  }

  public function telcLead(Request $request)
  {
    $cid = Session::get('cid');
    $lpCampaignId  = '62d5c98830037';
    $lpCampaignKey = 'JxcV6bPjGM3rHK7k4yf9';
    $postData = [
      'lp_request_id'   => (!empty($cid)) ? $cid : $request->get('req_id'),
      'lp_campaign_id'  => $lpCampaignId,
      'lp_campaign_key' => $lpCampaignKey,
      'lp_s1'           => $request->get('s1'),
      'lp_s2'           => $request->get('s2'),
      'lp_s3'           => $request->get('s3'),
      'lp_s4'           => $request->get('s4'),
      'lp_s5'           => $request->get('s5'),
      'lp_test'         => 1,
      'diagnosed' => $request->get('diagnosed'),
      'diagnosed_when'  => $request->get('diagnosed_when'),
      'over_4_years'    => $request->get('over_4_years'),
      'has_attorney'    => $request->get('has_attorney'),
      'lp_response'     => 'JSON',
      'first_name'      => $request->firstname,
      'last_name'       => $request->lastname,
      'phone_home'      => $request->phone,
      'address'         => $request->address,
      'address2'        => '',
      'city'            => $request->city,
      'state'           => $request->state,
      'zip_code'        => $request->zip_code,
      'county'          => '',
      'country'         => 'US',
      'email_address'   => $request->email,
      'comments'        => $request->tellus,
      'ip_address'      => $request->get('ip_address'),
      'comments'        => $request->tellus,
    ];
    //Filter Null values
    foreach($postData as $key=>$value)
    {
      if(is_null($value) )
        unset($postData[$key]);
    }
    $guzzle = new \GuzzleHttp\Client();
    //check if qualified lead or not
    $postRequest = $guzzle->request('POST', 'https://legalinjurynetwork.leadspediatrack.com/post.do', [
      'form_params' => $postData
    ]);
    $postResponse = $postRequest->getBody()->getContents();
    $jsonObject = json_decode($postResponse);
    if($jsonObject->result =='failed'){
      if(isset($jsonObject->errors[0]->error)) {
        return response()->json(array('sms'=>$jsonObject->errors[0]->error));
      }
      return response()->json(array('sms'=>0));
    } else {
      return response()->json(array('sms'=>1));
    }
    return response()->json(array('sms'=>0));
  }

  public function oneIndex(Request $request)
  {
    Session::put('cid', $request->get('cid'));
    switch ($request->get('aid'))
    {
      case '38': //William Kenny
        Session::put('lp_campaign_id', '62a785c01de26');
        Session::put('lp_campaign_key', 'DLmHBNt2PfnTjWhGxdVy');
        break;
      case '32': //AW Performance LLC
        Session::put('lp_campaign_id', '6244ba77c6fac');
        Session::put('lp_campaign_key', 'YnZ2RpX3GzcxKJ9THVMj');
        break;
      case '30': //Slick Ads Media
        Session::put('lp_campaign_id', '6244b883850b2');
        Session::put('lp_campaign_key', 'bXDt2fCchpY4LKGkz3jd');
        break;
      case '31': //Scale Up Media Agency Inc
        Session::put('lp_campaign_id', '6244ba459aa52');
        Session::put('lp_campaign_key', 'd39XrWbJTxzCq4RNvjtM');
        break;
      case '8': //FB Moderation
        Session::put('lp_campaign_id', '5e306b37f0864');
        Session::put('lp_campaign_key', 'gc6Y7M2FmzDXNQ3yqKdZ');
        break;
      case '35': // AdMediary
        Session::put('lp_campaign_id', '627bd25300744');
        Session::put('lp_campaign_key', 'yxqFTYvW2LkNBRVmrMjb');
        break;
      default:
        Session::put('lp_campaign_id', env('LEADSPEDIA_CAMPAIGN_ID'));
        Session::put('lp_campaign_key', env('LEADSPEDIA_CAMPAIGN_KEY'));
    }
    $phoneNumber = '(800) 484-6757';
    return view('3.index')->with(compact('phoneNumber'));
  }

  public function onePostLead(Request $request)
  {
    $cid = Session::get('cid');
    $lpCampaignId = Session::get('lp_campaign_id');
    $lpCampaignKey = Session::get('lp_campaign_key');
    if($cid==""){
      $lpCampaignId="62a785c01de26";
      $lpCampaignKey="DLmHBNt2PfnTjWhGxdVy";
    }
    $postData = [
      'diagnosed' => $request->get('diagnosed'),
      'diagnosed_when' => $request->get('diagnosed_when'),
      'over_4_years' => $request->get('over_4_years'),
      'has_attorney' => $request->get('has_attorney'),
      'first_name' => $request->get('first_name'),
      'last_name' => $request->get('last_name'),
      'email_address' => $request->get('email_address'),
      'zip_code' => $request->get('zip_code'),
      'notes' => $request->get('notes'),
      'phone_home' => $request->get('phone_home'),
      'phone_cell' => $request->get('phone_cell'),
      'ip_address' => $request->get('ip_address'),
      'lp_request_id' => (!empty($cid)) ? $cid : $request->get('req_id'),
      'lp_campaign_id' => $lpCampaignId,
      'lp_campaign_key' => $lpCampaignKey,
      'lp_s1' => $request->get('s1'),
      'lp_s2' => $request->get('s2'),
      'lp_s3' => $request->get('s3'),
      'lp_s4' => $request->get('s4'),
      'lp_s5' => $request->get('s5'),
      'path' => '/1'
    ];
    $guzzle = new \GuzzleHttp\Client();
    //check if qualified lead or not
    $request = $guzzle->request('POST', 'https://legalinjurynetwork.leadspediatrack.com/post.do', [
      'form_params' => $postData
    ]);
    $response = $request->getBody()->getContents();
    return redirect()->to('/thanks');
  }

  public function twoIndex(Request $request)
  {
    Session::put('cid', $request->get('cid'));
    switch ($request->get('aid'))
    {
      case '38': //William Kenny
        Session::put('lp_campaign_id', '62a785c01de26');
        Session::put('lp_campaign_key', 'DLmHBNt2PfnTjWhGxdVy');
        break;
      case '32': //AW Performance LLC
        Session::put('lp_campaign_id', '6244ba77c6fac');
        Session::put('lp_campaign_key', 'YnZ2RpX3GzcxKJ9THVMj');
        break;
      case '30': //Slick Ads Media
        Session::put('lp_campaign_id', '6244b883850b2');
        Session::put('lp_campaign_key', 'bXDt2fCchpY4LKGkz3jd');
        break;
      case '31': //Scale Up Media Agency Inc
        Session::put('lp_campaign_id', '6244ba459aa52');
        Session::put('lp_campaign_key', 'd39XrWbJTxzCq4RNvjtM');
        break;
      case '8': //FB Moderation
        Session::put('lp_campaign_id', '5e306b37f0864');
        Session::put('lp_campaign_key', 'gc6Y7M2FmzDXNQ3yqKdZ');
        break;
      case '35': // AdMediary
        Session::put('lp_campaign_id', '627bd25300744');
        Session::put('lp_campaign_key', 'yxqFTYvW2LkNBRVmrMjb');
        break;
      default:
        Session::put('lp_campaign_id', env('LEADSPEDIA_CAMPAIGN_ID'));
        Session::put('lp_campaign_key', env('LEADSPEDIA_CAMPAIGN_KEY'));
    }
    $phoneNumber = '(800) 484-6757';
    return view('2.index')->with(compact('phoneNumber'));
  }

  public function twoPostLead(Request $request)
  {
    $cid = Session::get('cid');
    $lpCampaignId = Session::get('lp_campaign_id');
    $lpCampaignKey = Session::get('lp_campaign_key');
    if($cid==""){
      $lpCampaignId="62a785c01de26";
      $lpCampaignKey="DLmHBNt2PfnTjWhGxdVy";
    }
    $postData = [
      'diagnosed' => $request->get('diagnosed'),
      'diagnosed_when' => $request->get('diagnosed_when'),
      'over_4_years' => $request->get('over_4_years'),
      'has_attorney' => $request->get('has_attorney'),
      'first_name' => $request->get('first_name'),
      'last_name' => $request->get('last_name'),
      'email_address' => $request->get('email_address'),
      'zip_code' => $request->get('zip_code'),
      'notes' => $request->get('notes'),
      'phone_home' => $request->get('phone_home'),
      'phone_cell' => $request->get('phone_cell'),
      'ip_address' => $request->get('ip_address'),
      'lp_request_id' => (!empty($cid)) ? $cid : $request->get('req_id'),
      'lp_campaign_id' => $lpCampaignId,
      'lp_campaign_key' => $lpCampaignKey,
      'lp_s1' => $request->get('s1'),
      'lp_s2' => $request->get('s2'),
      'lp_s3' => $request->get('s3'),
      'lp_s4' => $request->get('s4'),
      'lp_s5' => $request->get('s5'),
      'path' => '/2'
    ];
    $guzzle = new \GuzzleHttp\Client();
    //check if qualified lead or not
    $request = $guzzle->request('POST', 'https://legalinjurynetwork.leadspediatrack.com/post.do', [
      'form_params' => $postData
    ]);
    $response = $request->getBody()->getContents();
    return redirect()->to('/thanks');
  }

  public function threeIndex(Request $request)
  {
    return view('3.index');
  }

  public function threePostLead(Request $request)
  {
    Log::info('Hits the post 3 request');
    $aid = $request->get('aid');
    //$campaignId = env('LEADSPEDIA_CAMPAIGN_ID');
    //$campaignKey = env('LEADSPEDIA_CAMPAIGN_KEY');
    //check for DQ
    if (strtolower($request->get('diagnosed')) == 'no / other' || strtolower($request->get('diagnosed_when')) == 'before 2010' || strtolower($request->get('has_attorney')) == 'true')
    {
      switch ($aid)
      {
        //if concussion media switch to overflow accouunt
        case '21':
          $campaignId = '611a9ed8305e4';
          $campaignKey = 'wjpYWNXzDtb6rZFfQxHG';
          break;
      }
    } else {
      switch ($aid)
      {
        //set affiliate campaign ids/keys
        case '21':
          $campaignId = '61095ad073ff9';
          $campaignKey = 'hMB3cJb4wdCyk9qZNQ2D';
          break;
      }
    }
    $campaignId="62a79ced759c8";
    $campaignKey="K4rbMtkh6f9NQDHxZyWJ";
    $postData = [
      'diagnosed' => $request->get('diagnosed'),
      'diagnosed_when' => $request->get('diagnosed_when'),
      'over_4_years' => $request->get('over_4_years'),//removed
      'has_attorney' => $request->get('has_attorney'),
      'first_name' => $request->get('first_name'),
      'last_name' => $request->get('last_name'),
      'email_address' => $request->get('email_address'),
      'zip_code' => $request->get('zip_code'),
      'notes' => $request->get('notes'),
      'phone_home' => $request->get('phone_home'),
      'phone_cell' => $request->get('phone_cell'),
      'ip_address' => $request->get('ip_address'),
      //'lp_request_id' => $request->get('req_id'),
      'lp_campaign_id' => $campaignId,
      'lp_campaign_key' => $campaignKey,
      'lp_s1' => $request->get('s1'),
      'lp_s2' => $request->get('s2'),
      'lp_s3' => $request->get('s3'),
      'lp_s4' => $request->get('s4'),
      'lp_s5' => $request->get('s5'),
      'path' => '/3'
    ];
    $guzzle = new \GuzzleHttp\Client();
    //check if qualified lead or not
    $request = $guzzle->request('POST', 'https://legalinjurynetwork.leadspediatrack.com/post.do', [
      'form_params' => $postData
    ]);
    $response = $request->getBody()->getContents();
    Log::info('Request sent and works fine.');
    return redirect()->to('/thanks');
  }

  public function fourIndex(Request $request)
  {
    return view('4.index');
  }

  public function fourPostLead(Request $request)
  {
    $cid = Session::get('cid');
    $lpCampaignId = Session::get('lp_campaign_id');
    $lpCampaignKey = Session::get('lp_campaign_key');
    if($cid==""){
      $lpCampaignId="62a785c01de26";
      $lpCampaignKey="DLmHBNt2PfnTjWhGxdVy";
    }
    $postData = [
      'diagnosed' => $request->get('diagnosed'),
      'diagnosed_when' => $request->get('diagnosed_when'),
      'over_4_years' => $request->get('over_4_years'),
      'has_attorney' => $request->get('has_attorney'),
      'first_name' => $request->get('first_name'),
      'last_name' => $request->get('last_name'),
      'email_address' => $request->get('email_address'),
      'zip_code' => $request->get('zip_code'),
      'notes' => $request->get('notes'),
      'phone_home' => $request->get('phone_home'),
      'phone_cell' => $request->get('phone_cell'),
      'ip_address' => $request->get('ip_address'),
      'lp_request_id' => (!empty($cid)) ? $cid : $request->get('req_id'),
      'lp_campaign_id' => $lpCampaignId,
      'lp_campaign_key' => $lpCampaignKey,
      'lp_s1' => $request->get('s1'),
      'lp_s2' => $request->get('s2'),
      'lp_s3' => $request->get('s3'),
      'lp_s4' => $request->get('s4'),
      'lp_s5' => $request->get('s5'),
      'path' => '/4'
    ];
    $guzzle = new \GuzzleHttp\Client();
    //check if qualified lead or not
    $request = $guzzle->request('POST', 'https://legalinjurynetwork.leadspediatrack.com/post.do', [
      'form_params' => $postData
    ]);
    $response = $request->getBody()->getContents();
    return redirect()->to('/4.thanks');
  }

  public function fourThanks(Request $request)
  {
    return view('4.success');
  }

  public function fiveIndex(Request $request)
  {
    return view('5.index');
  }

  public function fivePostLead(Request $request)
  {
    $aid = $request->get('aid');
    $campaignId = '61244a92a1266';
    $campaignKey = 'yQVTkMLYJh7rGWB9fnz4';
    $postData = [
      'diagnosed' => $request->get('diagnosed'),
      'diagnosed_when' => $request->get('diagnosed_when'),
      'over_4_years' => $request->get('over_4_years'),//removed
      'has_attorney' => $request->get('has_attorney'),
      'first_name' => $request->get('first_name'),
      'last_name' => $request->get('last_name'),
      'email_address' => $request->get('email_address'),
      'zip_code' => $request->get('zip_code'),
      'notes' => $request->get('notes'),
      'phone_home' => $request->get('phone_home'),
      'phone_cell' => $request->get('phone_cell'),
      'ip_address' => $request->get('ip_address'),
      //'lp_request_id' => $request->get('req_id'),
      'lp_campaign_id' => $campaignId,
      'lp_campaign_key' => $campaignKey,
      'lp_s1' => $request->get('s1'),
      'lp_s2' => $request->get('s2'),
      'lp_s3' => $request->get('s3'),
      'lp_s4' => $request->get('s4'),
      'lp_s5' => $request->get('s5'),
      'path' => '/5'
    ];
    $guzzle = new \GuzzleHttp\Client();
    //check if qualified lead or not
    $request = $guzzle->request('POST', 'https://legalinjurynetwork.leadspediatrack.com/post.do', [
      'form_params' => $postData
    ]);
    $response = $request->getBody()->getContents();
    return redirect()->to('/thanks');
  }

  public function oneBIndex(Request $request)
  {
    $phoneNumber = '888-787-0120';
    $useXverify = true;
    return view('3.index')->with(compact('phoneNumber', 'useXverify'));
  }

  public function oneBPostLead(Request $request)
  {
    $postData = [
      'diagnosed' => $request->get('diagnosed'),
      'diagnosed_when' => $request->get('diagnosed_when'),
      'over_4_years' => $request->get('over_4_years'),
      'has_attorney' => $request->get('has_attorney'),
      'first_name' => $request->get('first_name'),
      'last_name' => $request->get('last_name'),
      'email_address' => $request->get('email_address'),
      'zip_code' => $request->get('zip_code'),
      'notes' => $request->get('notes'),
      'phone_home' => $request->get('phone_home'),
      'phone_cell' => $request->get('phone_cell'),
      'ip_address' => $request->get('ip_address'),
      'lp_request_id' => $request->get('req_id'),
      'lp_campaign_id' => '606f534005f9d',
      'lp_campaign_key' => '6NZzGmQq3HkR7n9CJDp8',
      'lp_s1' => $request->get('s1'),
      'lp_s2' => $request->get('s2'),
      'lp_s3' => $request->get('s3'),
      'lp_s4' => $request->get('s4'),
      'lp_s5' => $request->get('s5'),
      'path' => '/1b'
    ];

    $guzzle = new \GuzzleHttp\Client();
    //check if qualified lead or not
    $request = $guzzle->request('POST', 'https://legalinjurynetwork.leadspediatrack.com/post.do', [
      'form_params' => $postData
    ]);
    $response = $request->getBody()->getContents();
    return redirect()->to('/thanks');
  }

  public function oneCIndex(Request $request)
  {
    $useXverify = true;
    return view('3.index')->with(compact('useXverify'));
  }

  public function oneCPostLead(Request $request)
  {
    $postData = [
      'diagnosed' => $request->get('diagnosed'),
      'diagnosed_when' => $request->get('diagnosed_when'),
      'over_4_years' => $request->get('over_4_years'),
      'has_attorney' => $request->get('has_attorney'),
      'first_name' => $request->get('first_name'),
      'last_name' => $request->get('last_name'),
      'email_address' => $request->get('email_address'),
      'zip_code' => $request->get('zip_code'),
      'notes' => $request->get('notes'),
      'phone_home' => $request->get('phone_home'),
      'phone_cell' => $request->get('phone_cell'),
      'ip_address' => $request->get('ip_address'),
      'lp_request_id' => $request->get('req_id'),
      'lp_campaign_id' => '60662c921d025',
      'lp_campaign_key' => '2G39nxc68bVhzqKZmNgX',
      'lp_s1' => $request->get('s1'),
      'lp_s2' => $request->get('s2'),
      'lp_s3' => $request->get('s3'),
      'lp_s4' => $request->get('s4'),
      'lp_s5' => $request->get('s5'),
      'path' => '/1c'
    ];
    $guzzle = new \GuzzleHttp\Client();
    //check if qualified lead or not
    $request = $guzzle->request('POST', 'https://legalinjurynetwork.leadspediatrack.com/post.do', [
      'form_params' => $postData
    ]);
    $response = $request->getBody()->getContents();
    return redirect()->to('/thanks');
  }
}