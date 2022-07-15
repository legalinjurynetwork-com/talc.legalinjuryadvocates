@extends('talc.layouts.app')

@section('pageTitle')
{{ 'Question 1 | ' . config('app.name') }}
@endsection
@section('content')
<section class="bg-white">
  <div class="container-fliud">
    <div class="row-cols-1">
        <form class="claim-form" method="POST">
            @csrf
            <div class="formHolder">
                <div class="formHeader">
                    <h4>Talcum Powder Linked To Ovarian Cancer And Other Cancer Subsets</h4>
                </div>
                <div class="formBody slide-one">
                    <h4>See If You Qualify</h4>
                    <div class="indicator"><img src="img/Indicator_1.png" alt="indicator"></div>
                    <h4 class="minHeight">Have you have or a loved one been diagnosed with one of the following cancers?</h4>
                    <ul class="btnBox smallBtn">
                        <li><a href="javascript:void(0)" class="btn btn-success" id="a-Ovarian-Cancer"><img src="img/Not-selected.png" alt="btn"><span>Ovarian Cancer</span></a></li>
                        <li><a href="javascript:void(0)" class="btn btn-success" id="a-Fallopian-Tube"><img src="img/Not-selected.png" alt="btn"><span>Fallopian Tube</span></a></li> 
                        <li><a href="javascript:void(0)" class="btn btn-success" id="a-Mesothelioma"><img src="img/Not-selected.png" alt="btn"><span>Mesothelioma</span></a></li>
                        <li><a href="javascript:void(0)" class="btn btn-success" id="a-Peritonearl-Cancer"><img src="img/Not-selected.png" alt="btn"><span>Peritonearl Cancer</span></a></li>
                        <li><a href="javascript:void(0)" class="btn btn-success" id="a-Death-from-Ovarian-Cancer-of-Fallopian-Tube-Cancer"><img src="img/Not-selected.png" alt="btn"><span>Death from Ovarian Cancer of Fallopian Tube Cancer</span></a></li>
                        <li><a href="javascript:void(0)" class="btn btn-success" id="a-No-Other"><img src="img/Not-selected.png" alt="btn"><span>No/Other</span></a></li>
                    </ul>
                    @include('talc.includes.footnotes')
                </div>
                <div class="formBody slide-two" style="display:none;">
                    <h4>Ok, Next Question</h4>
                    <div class="indicator"><img src="img/Indicator_2.png" alt="indicator"></div>
                    <h4 class="minHeight">Was cancer first diagnosed during or after 2010?</h4>
                    <ul class="btnBox">
                        <li><a href="javascript:void(0)" class="btn btn-success" id="a-Yes"><img src="img/Not-selected.png" alt="btn"><span>YES</span></a></li>
                        <li><a href="javascript:void(0)" class="btn btn-success" id="a-No"><img src="img/Not-selected.png" alt="btn"><span>NO</span></a></li>
                    </ul>
                    @include('talc.includes.footnotes')
                </div>
                <div class="formBody slide-three" style="display:none;">
                    <h4>Ok, Next Question</h4>
                    <div class="indicator"><img src="img/Indicator_3.png" alt="indicator"></div>
                    <h4 class="minHeight">Have you signed a contract with another attorney regarding your Talcum Powder claim?</h4>
                    <ul class="btnBox">
                        <li><a href="javascript:void(0)" class="btn btn-success" id="a-Yes"><img src="img/Not-selected.png" alt="btn"><span>YES</span></a></li>
                        <li><a href="javascript:void(0)" class="btn btn-success" id="a-No"><img src="img/Not-selected.png" alt="btn"><span>NO</span></a></li>
                    </ul>
                    @include('talc.includes.footnotes')
                </div>

                <div class="formBody slide-four" style="display:none;">
                    <h4>Final Step</h4>
                    <div class="indicator"><img src="img/Indicator_4.png" alt="indicator"></div>
                    <h4 class="minHeight">Who should receive compensation?:</h4>
                    <div class="col-12 mb-10 form-group">
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name" required value="">
                    </div>
                    <div class="col-12 mb-10 form-group">
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name" required value="">
                    </div>
                    <div class="col-12 mb-10 form-group">
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" required value="">
                    </div>
                    <div class="col-12 mb-10 form-group">
                        <input type="text" name="confirmPhone" id="confirmPhone" class="form-control" placeholder="Confirm Phone" required value="">
                    </div>
                    <div class="col-12 mb-10 form-group">
                        <input type="text" name="address" id="address" class="form-control" placeholder="Address" required value="">
                    </div>
                    <div class="col-12 mb-10 form-group">
                        <input type="text" name="city" id="city" class="form-control" placeholder="City" required value="">
                    </div>
                    <div class="col-12 mb-10 form-group">
                            <select class="form-control" required id="state" name="state">
                                <option value="">Select State</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District Of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>	
                        </div>
                        <div class="col-12 mb-10 form-group">
                            <input type="text" name="zip_code" id="zip_code" class="form-control" placeholder="Zip Code" required value="">
                        </div>
                        <div class="col-12 mb-10 form-group">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email" required value="">
                        </div>
                        <div class="col-12 mb-10 form-group">
                            <textarea rows="3" name="tellus" id="tellus" class="form-control" placeholder="Tell us about your case" required></textarea>
                        </div>
                        <div class="col-12">
                            <p>By submitting this information, you agree to our Terms & Conditions and that Legal Injury Advocates and its partner law firms may contact you about their services at your above phone number(s)  even if it is on a National or State Do Not Call List. Calls/texts may employ automated dialing technology and pre-recorded/artificial voice messages. I understand my consent is not a condition of any purchase.</p>
                        </div>
                        <div class="col-12 form-group">
                            <button type="submit" class="btn btn-success" id="btnsubmit">Submit Claim Request</button>
                        </div>
                        <div id="msgdiv" style="margin-top:10px;display:none;"></div>
                    </div>
                    <img src="img/icon.png" alt="icon" class="text-center finalIcon">
                    <div class="formFooter">
                    <p>This site is 100% secure and confidential</p>
                    </div>

            </div>

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
            <input type="hidden" name="under_65" value="">
            <input type="hidden" name="over_4_years" value="">
            <input type="hidden" name="has_attorney" value="">
        </form>
    </div>
  </div>
</section>
<style>
    .footer {
        margin: 10px;
        border: 0.075em solid black;
        background: hsla(0, 0%, 98%, 0.90);
        padding: 15px 15px 0;
        color: hsla(0, 0%, 18%, 1.00);
    }
    .footer-text {
        margin: 1em 0 0 0;
        padding-bottom: 20px;
    }
    .footer-text p {
        margin: 0.25em 0;
        padding: 0;
        border: 0;
        font-size: 14px;
        line-height: 1.5;
        text-align: left;
        color: hsla(0, 0%, 18%, 1.00);
    }
    .footer-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #00a776;
        margin: 0 -15px;
        padding: 20px 15px;
    }
    .footer-bottom p {
        margin: 0px;
        font-size: 14px;
        color: #ffffff;
        font-weight: 500;
        letter-spacing: 0.02em;
    }
    
    .footer-bottom ul {
        display: flex;
    }
    .footer-bottom ul li {
        list-style: none;
        padding: 0 5px;
        margin: 0;
        border-right: 1px solid #8e8e8e;
        display: inline;
    }
    .footer-bottom ul li:last-child{
        border-right: none;
    }
    .footer-bottom ul li a {
        display: block;
        padding: 0;
        margin: 0;
        font-size: 14px;
        font-weight: 500;
        color: #ffffff;
    }
    
    @media (max-width: 1199px) {
        .footer-bottom ul li {
            margin: 0 6px;
        }
    }

    @media (max-width: 991px) {
        .footer-bottom {
            flex-direction: column;
        }

        .footer-bottom p {
            margin-bottom: 15px;
        }
    }
    
    .footer-bottom ul li {
        margin: 0 15px 10px;
    }

    .footer-bottom ul li a {
        text-align: center;
    }
    .footer-bottom ul li {
        list-style: none;
        padding: 0 5px;
        margin: 0;
        border-right: 1px solid #8e8e8e;
        display: inline;
    }
</style>
<footer class="footer">
    <div class="footer-text">
        <p>To the extent that this communication is considered ATTORNEY ADVERTISING (hereinafter collectively referred to as the "{{ getenv('COMPANY_NAME') }}") is responsible for the content of this communication. This communication is designed for general informational purposes only and it does NOT constitute the formation of a lawyer-client relationship. Although {{ getenv('COMPANY_NAME') }} aims to provide useful information, this should not be considered legal advice. While we attempt to provide accurate information, {{ getenv('COMPANY_NAME') }} does not warrant that the information is accurate. {{ getenv('COMPANY_NAME') }} disclaims all liability to any person for any loss caused by errors or omissions in this collection of information. The hiring of a lawyer is an important decision that should not be based solely upon advertisements. NO REPRESENTATION IS MADE REGARDING THE POTENTIAL OUTCOME OF ANY SPECIFIC CASE OR THE QUALITY OF LEGAL SERVICES BEING BETTER THAN YOU COULD FIND ELSEWHERE. Furthermore, by providing your phone number and clicking “Review My Claim” or “Get Your Free Evaluation,” you consent to receive automated calls, emails and text alerts from {{ getenv('COMPANY_NAME') }} and related third parties, and co-counsel/partner firms, providing information about product liability lawsuits, as well as related promotional offers. You agree that {{ getenv('COMPANY_NAME') }} and its partner law firms may contact you about their services at the phone number(s) you submitted even if it is on a National or State Do Not Call List. Calls/texts may employ automated dialing technology and pre-recorded/artificial voice messages. You also consent to our Terms & Conditions and Privacy Policy.</p>
    </div>
    <div class="footer-bottom">
        {{-- @if(getenv('COMPANY_DOMAIN') == 'legalinjuryadvocates.com')
            <p>Site Sponsored by Young & Partners, LLP</p>
        @endif --}}
        <p>Copyright © {{ now()->year }}
        <ul>
            <li><a href="https://info.{{ getenv('COMPANY_DOMAIN') }}/terms" target="_blank"> Terms & Conditions</a></li>
            <li><a href="https://info.{{ getenv('COMPANY_DOMAIN') }}/privacy" target="_blank"> Privacy Policy</a></li>
            <li><a href="https://info.{{ getenv('COMPANY_DOMAIN') }}/contact" target="_blank"> Contact Us</a></li>
            <li><a href="https://info.{{ getenv('COMPANY_DOMAIN') }}/ccpa" target="_blank"> CCPA</a></li>
            <li><a href="https://talc.{{ getenv('COMPANY_DOMAIN') }}/do-not-sell-my-info" target="_blank"> Do Not Sell My Data</a></li>
        </ul>
    </div>
</footer>
@endsection

@section('scripts') 
<script>
$(function(){
    $('form.claim-form .slide-one a.btn').click(function () {
        var ans = $(this).prop('id').replace('a-', '');
        $('input[name="diagnosed"]').val($(this).children('span').html());
        $(this).children('img').prop('src', "{{ asset('/img/Selected.png') }}");
        $('a[id^="a-"]').each(function(){
            if($(this).prop('id').replace('a-', '') != ans){
                $(this).children('img').prop('src', "{{ asset('/img/Not-selected.png') }}");
            }
        });
        setTimeout('changeSlide("slide-one", "slide-two")', 500);
    });

    $('form.claim-form .slide-two a.btn').click(function () {
        var ans = $(this).prop('id').replace('a-', '');
        if(ans == 'Yes') {
            $('form.claim-form .slide-two a#a-Yes').children('img').prop('src', "{{ asset('/img/Selected.png') }}");
            $('form.claim-form .slide-two a#a-No').children('img').prop('src', "{{ asset('/img/Not-selected.png') }}");
        } else {
            $('form.claim-form .slide-two a#a-No').children('img').prop('src', "{{ asset('/img/Selected.png') }}");
            $('form.claim-form .slide-two a#a-Yes').children('img').prop('src', "{{ asset('/img/Not-selected.png') }}");
        }
        ans = (ans == 'YES')?'after 2010' : 'after 2010';
        $('input[name="diagnosed_when"]').val(ans);
        setTimeout('changeSlide("slide-two", "slide-three")', 500);
    });

    $('form.claim-form .slide-three a.btn').click(function () {
        var ans = $(this).prop('id').replace('a-', '');
        if(ans == 'Yes') {
            $('form.claim-form .slide-three a#a-Yes').children('img').prop('src', "{{ asset('/img/Selected.png') }}");
            $('form.claim-form .slide-three a#a-No').children('img').prop('src', "{{ asset('/img/Not-selected.png') }}");
        } else {
            $('form.claim-form .slide-three a#a-No').children('img').prop('src', "{{ asset('/img/Selected.png') }}");
            $('form.claim-form .slide-three a#a-Yes').children('img').prop('src', "{{ asset('/img/Not-selected.png') }}");
        }
        ans = (ans == 'Yes') ? 'True' : 'False';
        $('input[name="has_attorney"]').val(ans);
        setTimeout('changeSlide("slide-three", "slide-four")', 500);
    });

    $("input#phone").inputmask('(999)-999-9999');
    $("input#confirmPhone").inputmask('(999)-999-9999');

    $('form.claim-form').formValidation({
        framework: 'bootstrap',
        message: 'This value is not valid',
        icon: {
            valid: 'fas fa-check',
            invalid: 'fas fa-times',
            validating: 'fas fa-sync-alt'
        },
        fields: {
            email: {
                validators: {
                    regexp: {
                        regexp: /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+\.)+[a-zA-Z0-9.-]{2,4}$/,
                        message: 'The input is not a valid email address.'
                    }
                }
            },
            firstname: {
                validators: {
                    notEmpty: {
                        message: 'The firstname is required.'
                    }
                }
            },
            lastname: {
                validators: {
                    notEmpty: {
                        message: 'The lastname is required.'
                    }
                }
            },
            address: {
                validators: {
                    notEmpty: {
                        message: 'The address is required.'
                    }
                }
            },
            city: {
                validators: {
                    notEmpty: {
                        message: 'The city is required.'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'The state is required.'
                    }
                }
            },
            zip_code: {
                validators: {
                    notEmpty: {
                        message: 'The zip is required.'
                    },
                    regexp: {
                        regexp: /^[0-9]{5}(?:-[0-9]{4})?$/,
                        message: 'The input is not a valid zip code.'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'The phone number is required.'
                    },
                    regexp: {
                        regexp: /^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/,
                        message: 'The input is not a valid phone number.'
                    }
                }
            },
            confirmPhone: {
                validators: {
                    notEmpty: {
                        message: 'The phone number is required.'
                    },
                    regexp: {
                        regexp: /^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/,
                        message: 'The input is not a valid phone number.'
                    },
                    identical: {
                        field: '[name="phone"]',
                        message: 'Phone numbers do not match!'
                    }
                }
            },
            tellus: {
                validators: {
                    notEmpty: {
                        message: 'The tellus is required.'
                    }
                }
            }
        }
    })
    .on('success.form.fv', function (e) {
        // Prevent form submission
        e.preventDefault();
        var arg = $("form.claim-form").serialize();
        //alert(arg);
        $.ajax({
            url: "{{ url()->current() }}",
            type: "POST",
            data: arg,
            timeout: 50000,
            cache: false,
            success: function (html) {
                if (html.sms == 1) {
                    window.location = "{{ route('talc.thankyou') }}";
                } else if (html.sms == 0) {
                    $('div#msgdiv').html('Updation failed. Please try after some time.');
                } else {
                    $('div#msgdiv').html(html.sms);
                }
                $('div#msgdiv').prop('class', 'alert alert-danger');
                $("div#msgdiv").fadeIn(100);
                var et = setTimeout('$("div#msgdiv").fadeOut(100)', 5000);
                $('button#btnsubmit').removeClass('disabled');
                $('button#btnsubmit').removeAttr('disabled');
                return false;
            },
            error: function (jqXHR, exception) {
                    var msg = '';
                    $('div#msgdiv').prop('class','alert alert-danger');
                    if (jqXHR.status === 0) {
                            msg = 'Not connect. Verify Network.';
                    } else if (jqXHR.status == 404) {
                            msg = 'Requested page not found. [404]';
                    } else if (jqXHR.status == 500) {
                            msg = 'Internal Server Error [500].';
                    } else if (exception === 'parsererror') {
                            msg = 'Requested JSON parse failed.';
                    } else if (exception === 'timeout') {
                            msg = 'Time out error.';
                    } else if (exception === 'abort') {
                            msg = 'Ajax request aborted.';
                    } else {
                            msg = 'Uncaught Error ' + jqXHR.responseText;
                    }
                    $('div#msgdiv').fadeIn(100);
                    $('div#msgdiv').html(msg);
                    var et = setTimeout('$("div#msgdiv").fadeOut(100)', 4000);
                    $('button#btnsubmit').removeClass('disabled');
                    $('button#btnsubmit').removeAttr('disabled');
                    return false;
            }
        });
    });


});

function changeSlide(slide1, slide2)
{
    $('div.'+slide1).slideUp(1, function(){
        $('div.'+slide2).slideDown(1);
    });
}
</script>
@stop
