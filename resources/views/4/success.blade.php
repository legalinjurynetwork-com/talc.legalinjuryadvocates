<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legal Injury Network</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="../css/4.style.css" rel="stylesheet">

    @php
    $phone = "(800) 484-6757";
    $tel = "8004846757";
    $year = date("Y");
    $company = "Consumer Injury Advocate";
    @endphp
</head>

<body>
    <div class="container alertbar">
        <div class="row">
            <div class="col">

            </div>
        </div>
    </div>
    <div class="container logobar">
        <div class="row">
            <div class="col">
                <img src="../img/lin-logo.png" width="176" height="71" alt="" class="img-fluid" />
            </div>
            <div class="col my-auto">
                <h4> <span class="red"> <a href="tel:<?php echo $tel; ?>"><button
                                class="btn btn-success"><?php echo $phone; ?></button></a></span></h4>
            </div>
        </div>
    </div>
    <div class="mainstage">
        <section class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center grabber">Success!</h1>
                </div>
                <div class="col-lg-10 offset-lg-1 col-sm-12 offset-sm-0 stagecard">
                    <div class="col-8 offset-2 text-center">

                        <br>
                    </div>
                    <div class="col-10 offset-1">
                        <center>
                            <img src="../img/success.gif" width="92" height="91" alt="" /></center>
                        <h1 class="text-center bigquestion2">We have submitted your information for a Fast, Free Case
                            Review!</h1>
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

                </div>
            </div>
        </section>
    </div>
    <div class="fomoBar">
        Your information has been recieved. We look forward to speaking with you.
    </div>


    <section class="container footer">
        <div class="row">
            <div class="col-12">
                <img src="../img/lin-logo.png" width="176" height="71" alt="" class="img-fluid" />&nbsp;&nbsp;&nbsp; |
                &nbsp;&nbsp;&nbsp;<strong><span class="">Call Now: <span class="red"> <a
                                href="tel:<?php echo $tel; ?>"><?php echo $phone; ?></a></span></span></strong>
                <br><br>
                <p>To the extent that this communication is considered ATTORNEY ADVERTISING. Legal Injury Advocates, LLC
                    is responsible for the content of this communication. This communication is designed for general
                    informational purposes only and it does NOT constitute the formation of a lawyer-client
                    relationship. Although Legal Injury Advocates aims to provide useful information, this should not be
                    considered legal advice. While we attempt to provide accurate information, Legal Injury Advocates
                    does not warrant that the information is accurate. Legal Injury Advocates disclaims all liability to
                    any person for any loss caused by errors or omissions in this collection of information. The hiring
                    of a lawyer is an important decision that should not be based solely upon advertisements. NO
                    REPRESENTATION IS MADE REGARDING THE POTENTIAL OUTCOME OF ANY SPECIFIC CASE OR THE QUALITY OF LEGAL
                    SERVICES BEING BETTER THAN YOU COULD FIND ELSEWHERE. Furthermore, by providing your phone number and
                    clicking “Review My Claim” or “Get Your Free Evaluation,” you consent to receive automated calls,
                    emails and text alerts from Legal Injury Advocates and related third parties providing information
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
</body>
<!-- <script src="js/jquery.min.js"></script>
<script>
  jQuery(document).ready(function(){
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
  });
</script> -->
</html>
