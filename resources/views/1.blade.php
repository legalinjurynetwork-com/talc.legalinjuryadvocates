<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Talcum Powder</title>
    <link rel="icon" href="">

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/layouts/1/sm/css/talc2.49fd75d6a377.css" rel="stylesheet">

</head>
<body>

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

<div class="container">
    <div class="wrapper">

        @yield('content')

        <div class="row footer" style="background: #00a776">
            <div class="col-xs-12 col-sm-6">
                <p  style="color: #ffffff">Copyright © 2019 | All rights reserved.</p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <ul>
                    <li><a href="https://legalinjuryadvocates.com/terms" target="_blank"  style="color: #ffffff">Terms &amp; Conditions</a></li>
                    <li><a href="https://legalinjuryadvocates.com/privacy" target="_blank"  style="color: #ffffff">Privacy Policy</a></li>
                    <li><a href="mailto:info@legalinjuryadvocates.com" style="color: #ffffff">Contact Us</a></li>
                    <li><a href="https://legalinjuryadvocates.com/ccpa" style="color: #ffffff">California & Nevada Consumer Privacy Information</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Form validation scripts -->

<script type="text/javascript">
    $('#notes').keyup(function() {
        $(this).val($(this).val().replace(/\r?\n/gi, ''));
    });
</script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('.phone_us').mask('(000) 000-0000');
        jQuery('.zip_code').mask('00000');
    });
</script>
<script src="/layouts/1/sm/js/jquery_mask.730c38e02fd3.js"></script>
<script src="/layouts/1/sm/js/jquery.validate.min.24ae1ca673cb.js"></script>
<script src="/layouts/1/sm/js/additional-methods.min.d95f4f840a79.js"></script>
<script src="/layouts/1/sm/js/basic_form_validation.ad2781474e72.js"></script>

<script src="/layouts/1/sm/js/form_methods/talc2.7a9623981b45.js"></script>

@yield('body_extra')

</body>
</html>
