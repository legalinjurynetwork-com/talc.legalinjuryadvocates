<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class SimpleController extends Controller
{
  public function thanks(Request $request)
  {
    return view('thanks');
  }

  public function terms(Request $request)
  {
    return view('terms');
  }

  public function privacy(Request $request)
  {
    return view('privacy');
  }

  public function ccpa(Request $request)
  {
    return view('ccpa');
  }

  public function contact(Request $request)
  {
    return view('3.contact');
  }

  public function dontSellMyInfo(Request $request)
  {
    return view('do-not-sell-my-info');
  }
}