<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legal Injury Network</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="/layouts/3/css/style.css" rel="stylesheet">

    <link href="css/2.style.css" rel="stylesheet">
    @if(isset($useXverify) && $useXverify == true)
      <link rel="stylesheet" type="text/css"  href="https://www.xverify.com/css/ui_tooltip_style.css"  />
    @endif
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TPBPPDK');
    console.log('Testing');
    </script>
    <!-- End Google Tag Manager -->
    <link rel="stylesheet" type="text/css"  href="https://www.xverify.com/css/ui_tooltip_style.css"  />
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPBPPDK"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  @if(env('FACEBOOK_ACCOUNT_ID', null) !== null)

  <!-- Facebook Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='3.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '{{ env('FACEBOOK_ACCOUNT_ID') }}');
  fbq('track', 'PageView');
  </script>
  <noscript>
  <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{ env('FACEBOOK_ACCOUNT_ID') }}&ev=PageView&noscript=1"/>
  </noscript>
  <!-- End Facebook Pixel Code -->

  @endif

  @if(env('FACEBOOK_ACCOUNT_ID_2', null) !== null)
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='3.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '{{ env('FACEBOOK_ACCOUNT_ID_2') }}');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{ env('FACEBOOK_ACCOUNT_ID_2') }}&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
  @endif
  <!-- Google Tag Manager -->
  <!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-TPBPPDK');</script> -->
  <!-- End Google Tag Manager -->
  </head>
  <body>
    @php
    $phone = "(800) 484-6757";
    $tel = "8004846757";
    $year = date("Y");
    $url = url('');
    $logo = "";
    $company = "";
    @endphp
    <?php
    if(str_contains($url, 'consumer')){
      $company = "Consumer Injury Advocate";
      $logo = "img/lin-logo-consumer.png";
    }else{
      $company = "Legal Injury Advocate";
      $logo = "img/lin-logo.png";
    }
    ?>
    <div class="container alertbar">
      <div class="row">
        <div class="col"></div>
      </div>
    </div>
    <div class="container logobar">
      <div class="row">
        <div class="col">
          <img src="{{$logo}}" width="176" height="71" alt="" class="img-fluid" />
        </div>
        <div class="col my-auto">
          <h4> 
            <span class="red"> 
              <a href="tel:{{$tel}}">
                <button class="btn btn-success">{{$phone}}
                </button>
              </a>
            </span>
          </h4>
        </div>
      </div>
    </div>
    <div class="mainstage">
      <section class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="text-center grabber">
              <span class="noul">BABY POWDER ALERT!!!</span> 
              Women who used Johnson & Johnson Baby Powder or Shower to Shower Powder, may be owed a large sum of money..
            </h1>
          </div>
          <div class="col-lg-10 offset-lg-1 col-sm-12 offset-sm-0 stagecard">
            <div class="col-8 offset-2 text-center">
              <h4>FAST FREE CASE REVIEW</h4>
              <div class="progress" style="height: 30px;">
                <div class="progress-bar progress-bar-striped bg-success" 
                  role="progressbar"
                  style="width: 25%;background-color:#e787ed;" 
                  aria-valuenow="25" 
                  aria-valuemin="0"
                  aria-valuemax="100">25%
                </div>
              </div>
            </div>
            <form class="claim-form" method="POST" action="{{ url()->current() }}" id="formTop">
              @csrf
              <input type="hidden" name="req_id" value="{{ isset($_GET['req_id']) ? $_GET['req_id'] : '' }}">
              <input type="hidden" name="aid" value="{{ isset($_GET['aid']) ? $_GET['aid'] : '' }}">
              <input type="hidden" name="ip_address" value="{{ (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR'] }}">
              <input type="hidden" name="source" value="{{ isset($_GET['source']) ? $_GET['source'] : '' }}">
              <input type="hidden" name="s1" value="{{ isset($_GET['s1']) ? $_GET['s1'] : '' }}">
              <input type="hidden" name="s2" value="{{ isset($_GET['s2']) ? $_GET['s2'] : '' }}">
              <input type="hidden" name="s3" value="{{ isset($_GET['s3']) ? $_GET['s3'] : '' }}">
              <input type="hidden" name="s4" value="{{ isset($_GET['s4']) ? $_GET['s4'] : '' }}">
              <input type="hidden" name="s5" value="{{ isset($_GET['s5']) ? $_GET['s5'] : '' }}">
              <input type="hidden" name="diagnosed" value="">
              <input type="hidden" name="diagnosed_when" value="">
              <input type="hidden" name="under_80" value="">
              <input type="hidden" name="over_4_years" value="">
              <!-- <input type="hidden" name="has_attorney" value=""> -->
              <input type="hidden" name="diagnosis" value="Stomach Cancer">
              <input type="hidden" name="3_months" value="Yes">
              <input type="hidden" name="has_attorney" value="No">
              <div class="col-10 offset-1 form-slide slide-one">
                <h1 class="text-center bigquestion1">
                  Did you, or someone you know, develop cancer after using talcum powder?
                </h1>
                <div class="row questions">
                  <div class="col-12 text-center questionbtn">
                    <!-- <a href="qualify.php"> -->
                      <button type="button" class="btn custombtn yes ">
                        <img id="yes" src="img/checkup.png" width="26" height="23" alt="" /> 
                        <span>Yes, Ovarian Cancer</span>
                      </button>
                    <!-- </a> -->
                  </div>
                  <div class="col-12 text-center questionbtn">
                    <!-- <a href="qualify.php"> -->
                      <button type="button" class="btn custombtn no">
                        <img id="no" src="img/checkup.png" width="26" height="23" alt="" /> 
                        <span>Yes, Fallopian Tube Cancer</span>
                      </button>
                    <!-- </a> -->
                  </div>
                  <div class="col-12 text-center questionbtn">
                    <!-- <a href="qualify.php"> -->
                      <button type="button" class="btn custombtn no">
                        <img id="no" src="img/checkup.png" width="26" height="23" alt="" /> 
                        <span>Yes, Mesothelioma</span>
                      </button>
                    <!-- </a> -->
                  </div>
                  <div class="col-12 text-center questionbtn">
                    <!-- <a href="qualify.php"> -->
                      <button type="button" class="btn custombtn no">
                        <img id="no" src="img/checkup.png" width="26" height="23" alt="" /> 
                        <span>Yes, Peritoneal Cancer</span>
                      </button>
                    <!-- </a> -->
                  </div>
                  <div class="col-12 text-center questionbtn">
                    <!-- <a href="qualify.php"> -->
                      <button type="button" class="btn custombtn no">
                        <img id="no" src="img/checkup.png" width="26" height="23" alt="" /> 
                        <span>Yes, death from Ovarian or Fallopian Tube Cancer</span>
                      </button>
                    <!-- </a> -->
                  </div>
                  <div class="col-12 text-center questionbtn">
                    <!-- <a href="qualify.php"> -->
                      <button type="button" class="btn custombtn no">
                        <img id="no" src="img/checkup.png" width="26" height="23" alt="" /> 
                        <span>No / Others</span>
                      </button>
                    <!-- </a> -->
                  </div>
                  <div class="">
                    <br>
                    <br>
                    <hr>
                    <p> 
                      <span class="noticeme">
                        Alert: Johnson & Johnson failed to warn MILLIONS of WOMEN
                      </span> that their talc-based products could be linked to certain cancers
                        such as Ovarian Cancer, Fallopian Tube Cancer, and other cancers. 
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-10 offset-1 form-slide slide-two">
                <h1 class="text-center bigquestion2 fadeIn">What year  were you diagnosed with cancer?</h1>
                <div class="row questions">
                  <div class="col-lg-6 col-sm-12 text-center questionbtn">
                    <!-- <a href="qualify2.php"> -->
                      <button type="button" class="btn custombtn yes">
                        <img id="yes" src="img/checkup.png" width="26" height="23" alt=""/> <span>2008 to 2022</span>
                      </button>
                    <!-- </a> -->
                  </div>
                  <div class="col-lg-6 col-sm-12 text-center questionbtn">
                    <!-- <a href="qualify2.php"> -->
                      <button type="button" class="btn custombtn no">
                        <img id="no" src="img/checkup.png" width="26" height="23" alt=""/> <span>2007 or before</span>
                      </button>
                    <!-- </a> -->
                  </div>
                  <div class="">
                    <br>
                    <br>
                    <hr>
                    <p> <span class="noticeme">Alert:  Johnson & Johnson failed to warn MILLIONS of WOMEN</span> that their talc-based products could be linked to certain cancers such as Ovarian Cancer, Fallopian Tube Cancer, and other cancers. </p>
                  </div>
                </div>
              </div>
              <div class="col-10 offset-1 form-slide slide-three">
                <h1 class="text-center bigquestion2 fadeIn">Are you currently under the age of 80?</h1>
                <div class="row questions">
                  <div class="col-6  text-center questionbtn">
                    <!-- <a href="qualify3.php"> -->
                      <button type="button" class="btn custombtn yes">
                        <img id="yes" src="img/checkup.png" width="26" height="23" alt=""/> <span>Yes</span>
                      </button>
                    <!-- </a> -->
                  </div>
                  <div class="col-6  text-center questionbtn">
                    <!-- <a href="qualify3.php"> -->
                      <button type="button" class="btn custombtn no">
                        <img id="no" src="img/checkup.png" width="26" height="23" alt=""/> <span>No</span>
                      </button>
                    <!-- </a> -->
                  </div>
                  <div class="">
                    <br>
                    <br>
                    <hr>
                    <p> <span class="noticeme">Alert:  Johnson & Johnson failed to warn MILLIONS of WOMEN</span> that their talc-based products could be linked to certain cancers such as Ovarian Cancer, Fallopian Tube Cancer, and other cancers. </p>
                  </div>
                </div>
              </div>
              <div class="col-10 offset-1 form-slide slide-four">
                <h1 class="text-center bigquestion2 fadeIn">Do you already have a lawyer representing this claim?</h1>
                <div class="row questions">
                  <div class="col-6  text-center questionbtn">
                    <!-- <a href="info.php"> -->
                      <button type="button" class="btn custombtn yes"><img id="yes" src="img/checkup.png" width="26" height="23" alt=""/> <span>Yes</span></button>
                    <!-- </a> -->
                  </div>
                  <div class="col-6  text-center questionbtn">
                    <!-- <a href="info.php"> -->
                      <button type="button" class="btn custombtn no"><img id="no" src="img/checkup.png" width="26" height="23" alt=""/> <span>No</span></button>
                    <!-- </a> -->
                  </div>
                  <div class="">
                    <br>
                    <br>
                    <hr>
                    <p> <span class="noticeme">Alert:  Johnson & Johnson failed to warn MILLIONS of WOMEN</span> that their talc-based products could be linked to certain cancers such as Ovarian Cancer, Fallopian Tube Cancer, and other cancers. </p>
                  </div>
                </div>
              </div>
              <div class="col-10 offset-1 form-slide slide-five">
				        <h1 class="text-center bigquestion2">Who should receive compensation?:</h1>
                <div id="slide4" class="">
                  <div class="form-row">
                    <div class="form-group col-12" style="width:100%">
                      <input type="text" class="big form-control" name="first_name" id="first_name" placeholder="First Name" required="">
                    </div>
                    <div class="form-group col-12" style="width:100%">
                      <input type="text" class="big form-control" name="last_name" id="last_name" placeholder="Last Name" required="">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-12" style="width:100%">
                      <input type="text" class="big phone_us form-control" name="phone_home" id="phone_home" placeholder="Phone" required="">
                    </div>
                    <div class="form-group col-12" style="width:100%">
                      <input type="text" class=" big phone_us form-control" name="phone_cell" id="phone_cell" placeholder="Confirm Phone" required="">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-12" style="width:100%">
                      <input type="text" class="big zip_code form-control" name="zip_code" id="zip_code" placeholder="Zip" required="">
                    </div>
                    <div class="form-group col-12" style="width:100%">
                      <input type="email" class="big xverify_email form-control" name="email_address" id="email_address" placeholder="Email" required="">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-12" style="width:100%">
                      <textarea class="form-control" name="notes" id="notes" rows="3" placeholder="Tell us about your case."></textarea>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-12" style="width:100%">
                      <label class="checkbox-inline">
                        <div class="small">
                          By submitting this information, you agree to our Terms &amp; Conditions and that {{$company}}s and its partner law firms may contact you about their services at your above phone number(s) even if it is on a National or State Do Not Call List.  Calls/texts may employ automated dialing technology and pre-recorded/artificial voice messages.  I understand my consent is not a condition of any purchase.
                        </div>
                      </label>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-12" style="width:100%">
                      <button type="submit" id="" class="btn custombtn2 d-block mx-auto">SUBMIT CLAIM REQUEST!</button><br><br>
                      <center><img src="img/norton.gif" width="198" height="94" alt=""/></center> 
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-10 offset-1 form-slide slide-six">
                <center>
                <img src="img/success.gif" width="92" height="91" alt=""/></center>
                <h1 class="text-center bigquestion2">We have submitted your information for a Fast, Free Case Review!</h1>
                <div class="row questions">
                  <div class="">
                    <br>
                    <p>Expect to hear from one our qualified attorneys shortly regarding your case.</p>
                  </div>
                </div>
              </div>
              <div class="highlighted">
                This site is 100% secure and confidential
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
    <div class="fomoBar">
      <img src="img/exclaim.png" width="29" height="28" alt="" /> HURRY! If you are owed money, there is a limited
      time to file a complaint!
    </div>
    <section class="container about">
      <div class="row">
        <div class="col-sm-12">
          <h1>
            Families have relied on talcum powder for decades without realizing the considerable cancer risk it posed. 
          </h1>
        </div>
        <div class="col-sm-8 offset-sm-2">
          <center>
            <p>According to numerous studies, Talcum powder has been linked to a 20% to 30% increase in the
              chance of developing ovarian cancer. The link between talcum powder and ovarian cancer has
              historically been known. </p>
            <p>However, the manufacturers of this product have not warned consumers about the very serious side
              effects of talcum powder. This omission led to recent litigation in these Johnson and Johnson
              cases, which produced some astounding outcomes.</p>
          </center>
          <div class="spacer">&nbsp;</div>
        </div>
        <div class="col-md-6 offset-md-1 col-sm-12">
          <center><img src="img/featured-image.jpg" alt="" class="img-fluid d-block mx-auto my-auto" /></center>
        </div>
        <div class="col-md-4 col-sm-12 bullets">
          <br>
          <h4>Cancers caused by talcum powder:</h4>
          <br>
          <ul>
            <li>Ovarian Cancer</li>
            <li>Fellopian Tube Cancer</li>
            <li>Mesothelioma</li>
            <li>Other Possibly Fatal Diseases</li>
          </ul>
        </div>
        <div class="spacer">&nbsp;</div>
        <div class="spacer">&nbsp;</div>
        <hr>
        <div class="spacer">&nbsp;</div>
        <div class="spacer">&nbsp;</div>
        <div class="col-md-5 offset-md-1 col-sm-12">
          <h2>How Talcum Powder causes Ovarian Cancer:</h2>
          <br>
          <p>Specks of talcum can enter the ovaries from the fallopian tubes as women apply talcum powder products
            near their genital area. Transmigration is the term for this. These harmful talc fragments can clog
            a woman's ovaries for many years.</p>

          <p>According to the International Journal of Gynecological Cancer - Talc Ovarian Cancer Exposure, talc
            use elevated the risk of ovarian cancer by 30–60%. The Attributable Risk was 29%, meaning that
            stopping the usage of talc could save at least 25 percent of women from developing ovarian cancer.
            Women exposed to more applications have a higher risk, according to research that took frequency and
            length of exposure into account.</p>
        </div>
        <div class="col-md-6  col-sm-12">
          <center><img src="img/featured2.jpg" alt="" class="img-fluid d-block mx-auto my-auto" /></center>
        </div>
        <div class="spacer">&nbsp;</div>
        <div class="spacer">&nbsp;</div>
      </div>
    </section>
    <section class="closer">
      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-md-1 col-sm-12 offeset-sm-0">
            <img src="img/logo-icon.png" width="118" height="148" alt=""
              class="img-fluid d-block mx-auto" /><br>
            <h1>Fast Free Case Review</h1>
            <p>If you or someone you know has been exposed to talcum powder and has since had developed cancer,
              the time to get financial relief is now.</p>
            <a href="#top"><button class="btn custombtn2">Do I Qualify?</button></a>
          </div>
        </div>
      </div>
    </section>
    <section class="container footer">
      <div class="row">
        <div class="col-12">
          <img src="img/lin-logo.png" width="176" height="71" alt="" class="img-fluid" />&nbsp;&nbsp;&nbsp; |
          &nbsp;&nbsp;&nbsp;<strong><span class="">Call Now: <span class="red"> <a
                          href="tel:<?php echo $tel; ?>"><?php echo $phone; ?></a></span></span></strong>
          <br><br>
          <p>To the extent that this communication is considered ATTORNEY ADVERTISING. {{$company}}s, LLC
            is responsible for the content of this communication. This communication is designed for general
            informational purposes only and it does NOT constitute the formation of a lawyer-client
            relationship. Although {{$company}}s aims to provide useful information, this should not be
            considered legal advice. While we attempt to provide accurate information, {{$company}}s
            does not warrant that the information is accurate. {{$company}}s disclaims all liability to
            any person for any loss caused by errors or omissions in this collection of information. The hiring
            of a lawyer is an important decision that should not be based solely upon advertisements. NO
            REPRESENTATION IS MADE REGARDING THE POTENTIAL OUTCOME OF ANY SPECIFIC CASE OR THE QUALITY OF LEGAL
            SERVICES BEING BETTER THAN YOU COULD FIND ELSEWHERE. Furthermore, by providing your phone number and
            clicking “Review My Claim” or “Get Your Free Evaluation,” you consent to receive automated calls,
            emails and text alerts from {{$company}}s and related third parties providing information
            about product liability lawsuits, as well as related promotional offers. You agree that Legal Injury
            Advocates and its partner law firms may contact you about their services at the phone number(s) you
            submitted even if it is on a National or State Do Not Call List. Calls/texts may employ automated
            dialing technology and pre-recorded/artificial voice messages. You also consent to our Terms &
            Conditions and Privacy Policy.</p>
        </div>
      </div>
    </section>
    <div class="privacy-bar">
      <div class="container">
        <div class="row">
          <div class="col-6 text-right">
            Copyright © <?php echo $year; ?> | All rights reserved.
          </div>
          <div class="col-6 text-right">
            <ul class="list-inline text-right float-end">
              <li><a href="https://legalinjuryadvocates.com/terms" target="_blank">Terms &amp; Conditions</a>
                  | </li>
              <li><a href="https://legalinjuryadvocates.com/privacy" target="_blank">Privacy Policy</a> |
              </li>
              <li><a href="https://legalinjuryadvocates.com/ccpa" target="_blank">CCPA</a> | </li>
              <li><a href="https://legalinjuryadvocates.com/do-not-sell" target="_blank">Do Not Sell</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <div class="bottomMenu">Ready for a Fast, Free Case Review? <a href="#formTop"><button class="btn btn-success">Click Here</button></a></div>
  </body>
  <script src="js/jquery.min.js"></script>
  <script src="/layouts/2/js/custom.js" type="text/javascript"></script>
  <script async>
      !function(C,l,i,c,k,a,g,y){(g=l.createElement(c)).onload=g.onreadystatechange=function(){
          g.readyState&&!/loaded|complete/.test(g.readyState)||(C[i](a),g.onload=g.onreadystatechange=null)
      },y=l.getElementsByTagName(c)[0],g.src=k,g.async=1,y.parentNode.insertBefore(g,y)
      }(window,document,'_initClickagy','script','https://tags.clickagy.com/data.js?rnd=5f11f950c2e11',{"aid":"vffbk82gn13yr","list":"5yuk4l9q4jwx","conv_name":"k9ximaz0u4z","conv_v":"1"});
  </script>

  <script type="text/javascript" src="https://www.xverify.com/sharedjs/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="https://www.xverify.com/sharedjs/jquery-ui.min.js"></script>

  <script type="text/javascript" src="https://www.xverify.com/sharedjs/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="https://www.xverify.com/sharedjs/jquery-ui.min.js"></script>
  <script type="text/javascript" src="https://www.xverify.com/js/clients/tbassett4/client.js"></script>
  <script type="text/javascript" src="https://www.xverify.com/sharedjs/jquery.xverify.plugin.js"></script>
  <script type="text/javascript">
      jQuery(document).ready(function(){
          $.xVerifyService({
                  services: {
                      email: {fields: ['xverify_email']},
                      phone: {field: 'xverify_phone'}
                  },
                  submitType: 'onChange'
              });
      });
  </script>
  @if(isset($useXverify) && $useXverify == true)
    <script type="text/javascript" src="https://www.xverify.com/js/clients/tbassett4/client.js"></script>
    <script type="text/javascript" src="https://www.xverify.com/sharedjs/jquery.xverify.plugin.js"></script>
  @endif
  <script>
      $(function () {
          $('.yes').click(function () {

              $("#yes").attr('src', "img/checkdn.png");
              $("#no").attr('src', "img/checkup.png");
          });
          $('.no').click(function () {

              $("#yes").attr('src', "img/checkup.png");
              $("#no").attr('src', "img/checkdn.png");
          });
      });
      $(document).scroll(function () {
          var y = $(this).scrollTop();
          if (y > 800) {
              $('.bottomMenu').fadeIn();
          } else {
              $('.bottomMenu').fadeOut();
          }
      });
  </script>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPBPPDK"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
</html>
