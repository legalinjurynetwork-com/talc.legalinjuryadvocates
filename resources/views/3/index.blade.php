@extends('3')

@section('page_wrapper_classes', 'home-page')

@section('head_extra')

    @if(isset($useXverify) && $useXverify == true)
        <link rel="stylesheet" type="text/css"  href="https://www.xverify.com/css/ui_tooltip_style.css"  />
    @endif

@endsection

@section('body_extra')

    @if(isset($useXverify) && $useXverify == true)
        <script type="text/javascript" src="https://www.xverify.com/js/clients/tbassett4/client.js"></script>
        <script type="text/javascript" src="https://www.xverify.com/sharedjs/jquery.xverify.plugin.js"></script>
    @endif
    @php
    $url = url('');
    @endphp
    <script>
            var ipAddr = "<?php echo $_SERVER['REMOTE_ADDR']; ?>";
            var reqId = "<?php echo !empty($_GET['req_id']) ? $_GET['req_id'] : (!empty($_GET['cid']) ? $_GET['cid'] : ''); ?>";
            <?php
            if(str_contains($url, 'consumer')){ ?>
                var campeignId = "62ec2b4e9e400";
            <?php }else{
                // $company = "Legal Injury Advocate";
                // $logo = "img/lin-logo.png";
            }
            ?>
            // var campeignId = "";
            $(document).ready(function () {

                $.ajax({
                    url: "//track.consumerinjuryadvocate.com/dni/dni.php?lp_public_key=15b5e2e887fd3931965127ecbb70950c&lp_block_id=3&lp_campaign_id="+campeignId+"&ip_address="+ipAddr+"&lp_request_id="+reqId,
                    method: "GET",
                    success: function(response){
                        // $('.contact-no').text(response.display);
                        // $('.contact-no').parents().eq(0).attr('href', 'tel:'+response.number);
                        $('.contact-no').html("CALL NOW: <span>"+response.display+"</span>");
                        $('.contact-no').attr('href', 'tel:'+response.number);
                    }
                })

            });
        </script>
    <script type="text/javascript">
        $(document).ready(function(){

            $('label').on("click",function(){
                $(window).scrollTop(0);
            });

            @if(isset($useXverify) && $useXverify == true)

            $.xVerifyService({
                services: {
                    //email: {field: 'xverify_email'},
                    //phone: {field: 'xverify_phone'},
                },
                submitType: 'onChange',
                formButtons: ['xvButton'],
            });

            @endif

            // $('input').on('focusout', function () {w



            // });

            $('form').submit(function(){
                $('button[type=submit]', this).attr('disabled', 'disabled');
                setTimeout(function() { $('button[type=submit]').removeAttr("disabled"); }, 3000);
            });


        });
    </script>
@endsection

@section('content')



    <div class="section-header">
        <a class="logo" href="#">
            <img src="{{ getenv('COMPANY_WIDE_LOGO_URL') }}" alt="">
        </a>
        <a class="contact-no" href="tel:{{ isset($phoneNumber) ? $phoneNumber : '(888) 503-5057' }}">CALL NOW: <span>{{ isset($phoneNumber) ? $phoneNumber : '(888) 503-5057' }}</span></a>
    </div>
    <div class="section-row">
        <div class="section-info">
            <div class="si-title">
                <div class="si-img">
                    <img src="/layouts/3/images/ovarian.png" alt="">
                </div>
                <div class="si-text">
                    <h2 style="margin-top:40px; font-size: 3em; font-weight:500;line-height: 1.15em;">Attention
                        Women Diagnosed with Ovarian Cancer After Baby Powder Use, <span
                            style="font-weight:bold;">compensation may be available!</span><br></h2>
                    <!-- <h2 style="color:#00a776;font-size: 2em;line-height:1em">You may be entitled to a financial award!!</h2> -->
                </div>
            </div>
            <div class="si-lists">
                <p class="list-top-text">J&J failed to warn MILLIONS of WOMEN that their talc-based
                    products could be linked to </p>
                <ul>
                    <li>OVARIAN CANCER</li>
                    <li>FALLOPIAN TUBE CANCER</li>
                    <li>MESOTHELIOMA, and possibly other fatal diseases.</li>
                </ul>
                <!-- <p class="offer">Time is limited! Register to file a FREE Claim Review TODAY!</p> -->
            </div>
            <div class="free-claim">
                <h4 style="font-size: 25px;">Time is limited to File Your Claim</h4>
                <div class="case-review">
                    <h5>Get a <span>FREE</span> Case Review</h5>
                    <p>You may qualify for compensation!</p>
                </div>
            </div>
        </div>
        <div class="section-form">
            <div class="free-claim">
                <h4 style="font-size: 25px;">Time is limited to File Your Claim</h4>
                <div class="case-review">
                    <h5>Get a <span>FREE</span> Case Review</h5>
                    <p>You may qualify for compensation!</p>
                </div>
            </div>
            <form class="claim-form" method="POST" action="{{ url()->current() }}">

                @csrf

                <input type="hidden" name="req_id" value="{{ isset($_GET['req_id']) ? $_GET['req_id'] : (isset($_GET['cid']) ? $_GET['cid'] : '') }}">
                <input type="hidden" name="aid" value="{{ isset($_GET['aid']) ? $_GET['aid'] : '' }}">

                <input type="hidden" name="ip_address" value="{{ (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR'] }}">

                <input type="hidden" name="source" value="{{ isset($_GET['source']) ? $_GET['source'] : '' }}">
                <input type="hidden" name="s1" value="{{ isset($_GET['s1']) ? $_GET['s1'] : '' }}">
                <input type="hidden" name="s2" value="{{ isset($_GET['s2']) ? $_GET['s2'] : '' }}">
                <input type="hidden" name="s3" value="{{ isset($_GET['s3']) ? $_GET['s3'] : '' }}">
                <input type="hidden" name="s4" value="{{ isset($_GET['s4']) ? $_GET['s4'] : '' }}">
                <input type="hidden" name="s5" value="{{ isset($_GET['s5']) ? $_GET['s5'] : '' }}">
                <input type="hidden" name="cid" value="{{ isset($_GET['cid']) ? $_GET['cid'] : '' }}">
                <input type="hidden" name="diagnosed" value="">
                <input type="hidden" name="diagnosed_when" value="">
                <input type="hidden" name="under_65" value="">
                <input type="hidden" name="over_4_years" value="">
                <input type="hidden" name="has_attorney" value="">

                <div class="form-slide slide-one">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                            aria-valuemin="0" aria-valuemax="100" style="width: 25%;">25%
                        </div>
                    </div>
                    <p>Have you or a loved one been diagnosed with one of the following cancers?</p>
                    <div class="disease-list">
                        <button type="button" id="yes_cont" class="form-btn form-btn-yes">Ovarian</button>
                        <button type="button" id="yes_cont" class="form-btn form-btn-yes">Fallopian
                            Tube</button>
                        <button type="button" id="yes_cont" class="form-btn form-btn-yes">Mesothelioma</button>
                        <button type="button" id="yes_cont" class="form-btn form-btn-yes">Peritoneal Cancer</button>
                        <button type="button" id="yes_cont" class="form-btn form-btn-yes">Death from Ovarian or
                            Fallopian Tube Cancer</button>
                        <button type="button" id="yes_cont" class="form-btn form-btn-yes">No / Other</button>
                    </div>
                    <!-- <button type="button" id="no_65" class="form-btn form-btn-no error-no">No</button> -->
                    <p class="error-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
                <div class="form-slide slide-two">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                            aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%
                        </div>
                    </div>
                    <p>Was Cancer first diagnosed during or after 2010?</p>
                    <button type="button" id="years_yes" class="form-btn form-btn-yes">YES</button>
                    <button type="button" id="years_no" class="form-btn form-btn-no error-no">No</button>
                    <p class="error-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
                <div class="form-slide slide-three">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                            aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%
                        </div>
                    </div>
                    <p>Have you signed a contract with another attorney regarding your Talcum Powder claim?</p>
                    <button type="button" id="claim_yes" class="form-btn form-btn-yes">YES</button>
                    <button type="button" id="claim_no" class="form-btn form-btn-no error-no">No</button>
                    <p class="error-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
                <div class="form-slide slide-four">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                            aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%
                        </div>
                    </div>
                    <div class="sf-wrapper">
                        <div class="form-group">
                            <input type="text" class="big" name="first_name" id="first_name" placeholder="First Name"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="big" name="last_name" id="last_name" placeholder="Last Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="big phone_us xverify_phone" name="phone_cell" id="phone_cell" placeholder="Phone"
                                maxlength="14" required>
                            <div class="phone_validation">Phone numbers do not match!</div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="big phone_us" name="phone_home" id="phone_home"
                                placeholder="Confirm Phone" maxlength="14" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="big zip_code" name="zip_code" id="zip_code" placeholder="Zip"
                                maxlength="5" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="big" name="email_address" id="email_address" placeholder="Email"
                                required>
                        </div>
                        <div class="form-group w-full">
                            <textarea class="" name="notes" id="notes" rows="2"
                                placeholder="Help us better understand by providing more details."></textarea>
                        </div>
                        <p>By submitting this information, you agree to our Terms & Conditions and that Legal
                            Injury Network and its partner law firms may contact you about their services at
                            your above phone number(s) even if it is on a National or State Do Not Call List.
                            Calls/texts may employ automated dialing technology and pre-recorded/artificial
                            voice messages. I understand my consent is not a condition of any purchase.</p>
                        <button type="submit" id="after_2003" class="form-btn form-btn-yes">Review My
                            Claim!</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('body_extra')

@endsection
