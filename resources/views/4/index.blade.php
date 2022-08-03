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
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$company}}</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- <link href="/layouts/3/css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/4.style.css" rel="stylesheet">
    @if(isset($useXverify) && $useXverify == true)
    <link rel="stylesheet" type="text/css" href="https://www.xverify.com/css/ui_tooltip_style.css" />
    @endif
    @if($company == "Legal Injury Advocate")
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TPBPPDK');
    </script>
    @endif
    @if($company == "Consumer Injury Advocate")
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W7693TS');
    </script>
    @endif
    <!-- End Google Tag Manager -->
    <link rel="stylesheet" type="text/css" href="https://www.xverify.com/css/ui_tooltip_style.css" />

    @if(env('FACEBOOK_ACCOUNT_ID', null) !== null)
    <!-- Facebook Pixel Code -->
    <script>
        ! function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '3.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '{{ env('
            FACEBOOK_ACCOUNT_ID ') }}');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id={{ env('FACEBOOK_ACCOUNT_ID') }}&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->
    @endif

    @if(env('FACEBOOK_ACCOUNT_ID_2', null) !== null)
    <!-- Facebook Pixel Code -->
    <script>
        ! function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '3.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '{{ env('
            FACEBOOK_ACCOUNT_ID_2 ') }}');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id={{ env('FACEBOOK_ACCOUNT_ID_2') }}&ev=PageView&noscript=1" />
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
    <style>
        body {
            background-color: white !important;
        }

        section.closer p {
            line-height: 50px !important;
        }

        .bullets ul li {
            list-style: inherit !important;
        }

        .footer {
            margin-top: 0px !important;
            border: none !important;
            background: transparent !important;
            padding: 15px 15px 0 !important;
            color: black !important;
        }
        .not-confirmed {
            border-color: red !important;
        }

        .phone_validation{
            display: none;
            color: red;
        }
        /* @media (min-width: 1400px){
        .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
            max-width: 1320px !important;
        }
      }
        @media (min-width: 1200px){
        .container, .container-lg, .container-md, .container-sm, .container-xl {
            max-width: 1140px !important;
        }
      }

        @media (min-width: 992px){
        .container, .container-lg, .container-md, .container-sm {
            max-width: 960px !important;
        }
      }
        @media (min-width: 768px){
        .container, .container-md, .container-sm {
            max-width: 720px !important;
        }
      }
        @media (min-width: 576px){
        .container, .container-sm {
            max-width: 540px !important;
      }
    } */
    </style>
</head>

<body>
    <form name="basic-form" id="basic-form" class="" action="{{ url()->current() }}" method="post" _lpchecked="1">
        @csrf
        <input type="hidden" name="req_id"
            value="{{ isset($_GET['req_id']) ? $_GET['req_id'] : isset($_GET['cid']) ? $_GET['cid'] : '' }}">
        <input type="hidden" name="aid" value="{{ isset($_GET['aid']) ? $_GET['aid'] : '' }}">
        <input type="hidden" name="ip_address"
            value="{{ (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR'] }}">
        <input type="hidden" name="source" value="{{ isset($_GET['source']) ? $_GET['source'] : '' }}">
        <input type="hidden" name="s1" value="{{ isset($_GET['s1']) ? $_GET['s1'] : '' }}">
        <input type="hidden" name="s2" value="{{ isset($_GET['s2']) ? $_GET['s2'] : '' }}">
        <input type="hidden" name="s3" value="{{ isset($_GET['s3']) ? $_GET['s3'] : '' }}">
        <input type="hidden" name="s4" value="{{ isset($_GET['s4']) ? $_GET['s4'] : '' }}">
        <input type="hidden" name="s5" value="{{ isset($_GET['s5']) ? $_GET['s5'] : '' }}">
        <input type="hidden" name="cid" value="{{ isset($_GET['cid']) ? $_GET['cid'] : '' }}">
        <input type="hidden" name="diagnosed" value="">
        <input type="hidden" name="diagnosed_when" value="">
        <input type="hidden" name="under_80" value="">
        <input type="hidden" name="over_4_years" value="">
        <!-- <input type="hidden" name="has_attorney" value=""> -->
        <input type="hidden" name="diagnosis" value="">
        <input type="hidden" name="3_months" value="">
        <input type="hidden" name="has_attorney" value="">
        <div class="container alertbar">
            <div class="row">
                <div class="col">

                </div>
            </div>
        </div>
        <div class="container logobar">
            <div class="row">
                <div class="col d-block my-auto">
                    <img src="{{$logo}}" width="250" height="auto" alt="" class="img-fluid" />
                </div>

                <div class="col my-auto">
                    <h4> <span class="red"> <a href="tel:<?php echo $tel; ?>"><button
                                    class="btn btn-primary"><?php echo $phone; ?></button></a></span></h4>
                </div>
            </div>
        </div>
        <div class="mainstage">
            <section class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center grabber"><span class="noul">BABY POWDER ALERT!!!</span> Women who used
                            Johnson & Johnson Baby Powder or Shower to Shower Powder, may be owed a large sum of money..
                        </h1>
                    </div>
                    <div class="col-lg-10 offset-lg-1 col-sm-12 offset-sm-0 stagecard">
                        <div class="col-8 offset-2 text-center">
                            <h4 style="color:#318635;"><i>FAST FREE CASE REVIEW</i></h4>
                            <!--<div class="progress" style="height: 30px;">
                              <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 30%;background-color:#e787ed;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>-->
                        </div>

                        <div class="col-10 offset-1">
                            <h1 class="text-center bigquestion1">Did you, or someone you know, develop cancer after
                                using talcum powder?</h1>
                            (select all that apply)
                            <div class="row questions">
                                <div class="col-md-6 text-center diagnosis nopad">
                                    <div class="row justify-content-center">

                                        <ul class="ks-cboxtags">
                                            <li>
                                                <input type="checkbox" id="Leukemia" value="Ovarian Cancer"
                                                    style="position:absolute;">
                                                <label for="Leukemia">Yes, Ovarian Cancer </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="BreastCancer" value="Fallopian Tube Cancer">
                                                <label for="BreastCancer">Yes, Fallopian Tube Cancer </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="LiverCancer" value="Mesothelioma">
                                                <label for="LiverCancer">Yes, Mesothelioma </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center diagnosis nopad">
                                    <div class="row justify-content-center">
                                        <ul class="ks-cboxtags">
                                            <li>
                                                <input type="checkbox" id="KidneyCancer" value="Peritoneal Cancer">
                                                <label for="KidneyCancer">Yes, Peritoneal Cancer </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="LungCancer" value="Death from Cancer">
                                                <label for="LungCancer">Yes, Death from Cancer </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="MyelodysplasticSyndromes"
                                                    value="No / Others">
                                                <label for="MyelodysplasticSyndromes">No / Others </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h1 class=" bigquestion3">What year were you diagnosed with cancer?</h1>
                                    <select class="round diagnosed_when">
                                        <option value="">Please Select</option>
                                        <option value="After 2010">2008 - 2022</option>
                                        <option value="Before 2010">2007 or before</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h1 class=" bigquestion3">Are you currently under the age of 80?</h1>
                                    <div class="col-12 under_80 nopad">
                                        <div class="row">
                                            <div class="btn-group" role="group" aria-label="age80">
                                                <input type="radio" class="btn-check" name="age80" id="btncheck1"
                                                    value="true" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="btncheck1">Yes</label>
                                                <input type="radio" class="btn-check" name="age80" id="btncheck2"
                                                    value="false" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="btncheck2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h1 class=" bigquestion3">Do you already have a lawyer representing this claim?</h1>
                                    <div class="col-12 has_attorney nopad">
                                        <div class="row">
                                            <div class="btn-group" role="group" aria-label="legalhelp">
                                                <input type="radio" class="btn-check" name="legalhelp" id="btncheck3"
                                                    value="true" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="btncheck3">Yes</label>
                                                <input type="radio" class="btn-check" name="legalhelp" id="btncheck4"
                                                    value="false" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="btncheck4">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h1 class=" bigquestion3">Who should receive compensation?</h1>
                                    <div class="col-12  nopad">
                                        <div id="slide4" class="">
                                            <div class="row g-2">
                                                <div class="form-group col-6">
                                                    <input type="text" class="big form-control form-control-lg"
                                                        name="first_name" id="first_name" placeholder="First Name"
                                                        required="">
                                                </div>
                                                <div class="form-group col-6">
                                                    <input type="text" class="big form-control form-control-lg"
                                                        name="last_name" id="last_name" placeholder="Last Name"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-12">
                                                    <input type="text"
                                                        class="big phone_us xverify_phone form-control form-control-lg"
                                                        name="phone_home" id="phone_home" placeholder="Phone"
                                                        required="">
                                                </div>
                                                <div class="form-group col-12">
                                                    <input type="text"
                                                        class=" big phone_us form-control form-control-lg"
                                                        name="phone_cell" id="phone_cell" placeholder="Confirm Phone"
                                                        required="">
                                                    <div class="phone_validation">Phone numbers do not match!</div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-12">
                                                    <input type="text" class="big zip_code form-control form-control-lg"
                                                        name="zip_code" id="zip_code" placeholder="Zip" required="">
                                                </div>
                                                <div class="form-group col-12">
                                                    <input type="email"
                                                        class="big xverify_email form-control form-control-lg"
                                                        name="email_address" id="email_address" placeholder="Email"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-12">
                                                    <textarea class="form-control form-control-lg" name="notes"
                                                        id="notes" rows="3"
                                                        placeholder="Tell us about your case."></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-12">
                                                    <label class="checkbox-inline">
                                                        <div class="small">
                                                            By submitting this information, you agree to our Terms &amp;
                                                            Conditions and that <?php echo $company; ?> and its partner
                                                            law firms may contact you about their services at your above
                                                            phone number(s) even if it is on a National or State Do Not
                                                            Call List. Calls/texts may employ automated dialing
                                                            technology and pre-recorded/artificial voice messages. I
                                                            understand my consent is not a condition of any purchase.
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-12">
                                                    <button type="submit" id="submit"
                                                        class="btn custombtn2 d-block mx-auto">SUBMIT CLAIM
                                                        REQUEST!</button><br><br>
                                                    <center><img src="img/norton.gif" width="198" height="94" alt="" />
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <br>
                                    <br>
                                    <hr>
                                    <p> <span class="noticeme">Alert: Johnson & Johnson failed to warn MILLIONS of
                                            WOMEN</span> that their talc-based products could be linked to certain
                                        cancers such as Ovarian Cancer, Fallopian Tube Cancer, and other cancers. </p>
                                </div>
                            </div>
                        </div>
                        <div class="highlighted">
                            This site is 100% secure and confidential
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="fomoBar">
            <img src="img/exclaim.png" width="29" height="28" alt="" /> HURRY! If you are owed money, there is a
            limited time to file a complaint!
        </div>
        <section class="container about">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Families have relied on talcum powder for decades without realizing the considerable cancer risk
                        it posed. </h1>
                </div>
                <div class="col-sm-8 offset-sm-2">
                    <center>
                        <p>According to numerous studies, Talcum powder has been linked to a 20% to 30% increase in the
                            chance of developing ovarian cancer. The link between talcum powder and ovarian cancer has
                            historically been known. </p>
                        <p>However, the manufacturers of this product have not warned consumers about the very serious
                            side effects of talcum powder. This omission led to recent litigation in these Johnson and
                            Johnson cases, which produced some astounding outcomes.</p>
                    </center>
                    <div class="spacer">&nbsp;</div>
                </div>
                <div class="col-md-6 offset-md-1 col-sm-12">
                    <center><img src="img/featured-image.jpg" alt="" class="img-fluid d-block mx-auto my-auto" />
                    </center>
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
                    <p>Specks of talcum can enter the ovaries from the fallopian tubes as women apply talcum powder
                        products near their genital area. Transmigration is the term for this. These harmful talc
                        fragments can clog a woman's ovaries for many years.</p>
                    <p>According to the International Journal of Gynecological Cancer - Talc Ovarian Cancer Exposure,
                        talc use elevated the risk of ovarian cancer by 30–60%. The Attributable Risk was 29%, meaning
                        that stopping the usage of talc could save at least 25 percent of women from developing ovarian
                        cancer. Women exposed to more applications have a higher risk, according to research that took
                        frequency and length of exposure into account.</p>
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
                        <p>If you or someone you know has been exposed to talcum powder and has since had developed
                            cancer, the time to get financial relief is now.</p>
                        <a href="javascript:scrollToTop();"><button class="btn custombtn2">Do I Qualify?</button></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="container footer">
            <div class="row">
                <div class="col-12">
                    <img src="{{$logo}}" width="176" height="71" alt="" class="img-fluid" />&nbsp;&nbsp;&nbsp;
                    | &nbsp;&nbsp;&nbsp;<strong><span class="">Call Now: <span class="red"> <a
                                    href="tel:<?php echo $tel; ?>"><?php echo $phone; ?></a></span></span></strong>
                    <br><br>
                    <p>To the extent that this communication is considered ATTORNEY ADVERTISING.
                        <?php echo $company; ?>, LLC is responsible for the content of this communication. This
                        communication is designed for general informational purposes only and it does NOT constitute the
                        formation of a lawyer-client relationship. Although <?php echo $company; ?> aims to provide
                        useful information, this should not be considered legal advice. While we attempt to provide
                        accurate information, <?php echo $company; ?> does not warrant that the information is accurate.
                        <?php echo $company; ?> disclaims all liability to any person for any loss caused by errors or
                        omissions in this collection of information. The hiring of a lawyer is an important decision
                        that should not be based solely upon advertisements. NO REPRESENTATION IS MADE REGARDING THE
                        POTENTIAL OUTCOME OF ANY SPECIFIC CASE OR THE QUALITY OF LEGAL SERVICES BEING BETTER THAN YOU
                        COULD FIND ELSEWHERE. Furthermore, by providing your phone number and clicking “Review My Claim”
                        or “Get Your Free Evaluation,” you consent to receive automated calls, emails and text alerts
                        from <?php echo $company; ?> and related third parties providing information about product
                        liability lawsuits, as well as related promotional offers. You agree that
                        <?php echo $company; ?> and its partner law firms may contact you about their services at the
                        phone number(s) you submitted even if it is on a National or State Do Not Call List. Calls/texts
                        may employ automated dialing technology and pre-recorded/artificial voice messages. You also
                        consent to our Terms & Conditions and Privacy Policy.</p>
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
                            <li><a href="https://legalinjuryadvocates.com/terms" target="_blank">Terms &amp;
                                    Conditions</a> | </li>
                            <li><a href="https://legalinjuryadvocates.com/privacy" target="_blank">Privacy Policy</a> |
                            </li>
                            <li><a href="https://legalinjuryadvocates.com/ccpa" target="_blank">CCPA</a> | </li>
                            <li><a href="https://legalinjuryadvocates.com/do-not-sell" target="_blank">Do Not Sell</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><br><br>
        <div class="bottomMenu">Ready for a Fast, Free Case Review? <a href="javascript:scrollToTop();"><button
                    class="btn btn-success">Click Here</button></a></div>
    </form>
    <script src="js/jquery.min.js"></script>
    <script>
        function scrollToTop() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
            // window.scrollTo(0, 0);
        }
    </script>
    <!-- <script src="/layouts/2/js/custom.js" type="text/javascript"></script> -->
    <script async>
        ! function (C, l, i, c, k, a, g, y) {
            (g = l.createElement(c)).onload = g.onreadystatechange = function () {
                g.readyState && !/loaded|complete/.test(g.readyState) || (C[i](a), g.onload = g.onreadystatechange =
                    null)
            }, y = l.getElementsByTagName(c)[0], g.src = k, g.async = 1, y.parentNode.insertBefore(g, y)
        }(window, document, '_initClickagy', 'script', 'https://tags.clickagy.com/data.js?rnd=5f11f950c2e11', {
            "aid": "vffbk82gn13yr",
            "list": "5yuk4l9q4jwx",
            "conv_name": "k9ximaz0u4z",
            "conv_v": "1"
        });
    </script>

    <script type="text/javascript" src="https://www.xverify.com/sharedjs/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://www.xverify.com/sharedjs/jquery-ui.min.js"></script>

    <script type="text/javascript" src="https://www.xverify.com/sharedjs/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://www.xverify.com/sharedjs/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://www.xverify.com/js/clients/tbassett4/client.js"></script>
    <script type="text/javascript" src="https://www.xverify.com/sharedjs/jquery.xverify.plugin.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            $.xVerifyService({
                services: {
                    email: {
                        fields: ['xverify_email']
                    },
                    phone: {
                        field: 'xverify_phone'
                    }
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
        var interval = null;
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
        $("#phone_cell, #phone_home").keyup(function () {
            var firstInput = document.getElementById("phone_cell").value;
            var secondInput = document.getElementById("phone_home").value;
            if (firstInput != secondInput) {
                $("#phone_cell, #phone_home").addClass("not-confirmed");
                $(".phone_validation").fadeIn();
                if(interval == null)
                    interval = setInterval(()=>{
                        console.log('Interval')
                        document.getElementById("submit").setAttribute("disabled", "disabled");
                    }, 500);
            } else if (firstInput === secondInput) {
                $("#phone_cell, #phone_home").removeClass("not-confirmed");
                $(".phone_validation").fadeOut();
                clearInterval(interval);
                document.getElementById("submit").removeAttribute("disabled");
            }
        });

        $(".diagnosis").find("input[type='checkbox']").change(function (ev) {
            console.log(ev.target.checked);
            let value = $("input[name='diagnosis']").val();
            let valueArray = [];
            if (value == "") {
                valueArray = []
            } else {
                valueArray = value.split(',');
            }
            if (ev.target.checked) {
                if (!valueArray.includes(ev.target.value)) {
                    valueArray.push(ev.target.value);
                }
            } else {
                valueArray.splice(valueArray.indexOf(ev.target.value), 1);
            };
            console.log(valueArray);
            $("input[name='diagnosis']").val(valueArray.toString());
            $("input[name='diagnosed']").val(valueArray.toString());
        })
        $(".under_80").find("input[type='radio']").change(function (ev) {
            // console.log(ev.target.value);
            $("input[name='under_80']").val(ev.target.value);
        })
        $(".has_attorney").find("input[type='radio']").change(function (ev) {
            // console.log(ev.target.value);
            $("input[name='has_attorney']").val(ev.target.value);
        })

        $(".diagnosed_when").change(function (ev) {
            $("input[name='diagnosed_when']").val(ev.target.value);
        })
    </script>
    <!-- Google Tag Manager (noscript) -->
    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPBPPDK" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript> -->
    <!-- End Google Tag Manager (noscript) -->
    @if($company == "Legal Injury Advocate")
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPBPPDK" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    @endif
    @if($company == "Consumer Injury Advocate")
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W7693TS" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    @endif
</body>

</html>