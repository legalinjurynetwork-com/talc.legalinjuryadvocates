@extends('3')

@section('page_wrapper_classes', 'home-page')

@section('content')
    <div class="section-header">
        <a href="#">
            <img src="/layouts/3/images/logo.png" alt="">
        </a>
    </div>
    <div class="section-row">
        <div class="section-info">
            <div class="si-title">
                <div class="si-img">
                    <img src="/layouts/3/images/ovarian.png" alt="">
                </div>
                <div class="si-text">
                    <h2 style="margin-top:40px; font-size: 3em; font-weight:100;line-height: 1.15em;">Attention Women Diagnosed with Ovarian Cancer After Baby Powder Use, <span style="font-weight:bold;">compensation may be available!</span><br></h2>
                </div>
            </div>
            <div class="si-lists">
                <p class="list-top-text">J&J failed to warn MILLIONS of WOMEN that their talc-based products could be linked to </p>
                <ul>
                    <li>OVARIAN CANCER</li>
                    <li>FALLOPIAN TUBE CANCER</li>
                    <li>MESOTHELIOMA, and possibly other fatal diseases.</li>
                </ul>
                <p class="offer">Time is limited! Register to file a FREE Claim Review TODAY!</p>
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
            <form class="claim-form">
                <div class="form-slide slide-one">
                    <p>Have you or a loved one used Talcum Powder / Baby Powder regularly for feminine hygiene  over 4 years?</p>
                    <button type="button" id="yes_cont" class="form-btn form-btn-yes">YES</button>
                    <button type="button" id="no_65" class="form-btn form-btn-no error-no">No</button>
                    <p class="error-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
                <div class="form-slide slide-two">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">25%</div>
                    </div>
                    <p>Have you or that loved one been diagnosed with one of the following cancers?</p>
                    <div class="disease-list">
                        <button type="button" id="yes_cont" class="form-btn form-btn-yes">Ovarian</button>
                        <button type="button" id="yes_cont" class="form-btn form-btn-yes">Fallopian Tube</button>
                        <button type="button" id="yes_cont" class="form-btn form-btn-yes">Mesothelioma</button>
                        <button type="button" id="yes_cont" class="form-btn form-btn-yes">Death from Ovarian or Fallopian Tube Cancer</button>
                        <button type="button" id="yes_cont" class="form-btn form-btn-yes">Uterine or Endometrial Cancer</button>
                        <button type="button" id="yes_cont" class="form-btn form-btn-yes">Borderline or Serous or Mucinous Tumors</button>
                        <button type="button" id="yes_cont" class="form-btn form-btn-yes">No / Other</button>
                    </div>
                    <p class="error-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
                <div class="form-slide slide-three">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                    </div>
                    <p>Was Cancer first diagnosed during or after 2010?</p>
                    <button type="button" id="years_yes" class="form-btn form-btn-yes">YES</button>
                    <button type="button" id="years_no" class="form-btn form-btn-no error-no">No</button>
                    <p class="error-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
                <div class="form-slide slide-four">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>
                    </div>
                    <p>Have you signed a contract with another attorney regarding you?</p>
                    <button type="button" id="claim_yes" class="form-btn form-btn-yes">YES</button>
                    <button type="button" id="claim_no" class="form-btn form-btn-no error-no">No</button>
                    <p class="error-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
                <div class="form-slide slide-five">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                    </div>
                    <div class="sf-wrapper">
                        <div class="form-group">
                            <input type="text" class="big" name="first_name" id="first_name" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="big" name="last_name" id="last_name" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="big phone_us" name="phone_cell" id="phone_cell" placeholder="Phone" maxlength="14">
                        </div>
                        <div class="form-group">
                            <input type="text" class="big phone_us" name="phone_home" id="phone_home" placeholder="Confirm Phone" maxlength="14">
                        </div>
                        <div class="form-group">
                            <input type="text" class="big zip_code" name="zip_code" id="zip_code" placeholder="Zip" maxlength="5">
                        </div>
                        <div class="form-group">
                            <input type="email" class="big" name="email_address" id="email_address" placeholder="Email">
                        </div>
                        <div class="form-group w-full">
                            <textarea class="" name="notes" id="notes" rows="2" placeholder="Help us better understand by providing more details."></textarea>
                        </div>
                        <p>By checking this box, you agree to our Terms of Use and that The Justice Advocates, a third party verification service and up to 3 law firms you are matched with may contact you about their services at your above phone number(s) even if it is on a National or State Do Not Call List. Calls/texts may employ automated dialing technology and prerecorded/artificial voice messages. I understand my consent is not a condition of any purchase.</p>
                        <button type="button" id="after_2003" class="form-btn form-btn-yes">Review My Claim!</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
