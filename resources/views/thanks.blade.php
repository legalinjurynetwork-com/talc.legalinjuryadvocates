@extends('common')

@section('head_extra')
    <link href="/layouts/common/css/thank-you.css" rel="stylesheet" type="text/css">
@endsection

@section('content')

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
            fbq('track', 'Lead');
            fbq('track', 'PageView');
        </script>
        <noscript>
            <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{ env('FACEBOOK_ACCOUNT_ID') }}&ev=Lead&noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->
    @endif

    @if(env('FACEBOOK_ACCOUNT_ID_2', null) !== null && env('FACEBOOK_ACCOUNT_ID', null) != env('FACEBOOK_ACCOUNT_ID_2', null))
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
            fbq('track', 'Lead');
        </script>
        <noscript>
            <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{ env('FACEBOOK_ACCOUNT_ID_2') }}&ev=PageView&noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->
    @endif



    <!-- Offer Conversion: Roundup -->
    <script type="text/javascript" src="{{ env('LEADSPEDIA_OFFER_TRACKING_URL') }}"></script><noscript><img src="{{ env('LEADSPEDIA_OFFER_TRACKING_URL') }}" width="1" height="1" /></noscript>
    <!-- // End Offer Conversion -->

    <div class="container-fluid"  style="background-image: url('/layouts/3/images/iStock-1163254821.jpg')">
        <div class="row all-set-images">
            <div class="col-md-12 text-set">
                <h3> YOU'RE ALL SET! </h3>
                <p class="first-text"> You will receive an important phone call soon<br/>
                    as possible. Please do not contact another law firm before we talk with you. You<br/>
                    may not recognize the phone number but please pick it up so we can help you. </p>
                <p class="second-text"> There is NO charge to you for exploring your options and absolutely no obligations!<br/>
                    There is no upfront charge to you at all and your attorneys will only get paid if they<br/>
                    win your case! You have nothing to lose and so much to gain. </p>
                <a href="#">For a quicker response please call us at {{ isset($phoneNumber) ? $phoneNumber : env('PHONE_NUMBER') }} </a> </div>
        </div>
    </div>

    <script async>
        !function(C,l,i,c,k,a,g,y){(g=l.createElement(c)).onload=g.onreadystatechange=function(){
            g.readyState&&!/loaded|complete/.test(g.readyState)||(C[i](a),g.onload=g.onreadystatechange=null)
        },y=l.getElementsByTagName(c)[0],g.src=k,g.async=1,y.parentNode.insertBefore(g,y)
        }(window,document,'_initClickagy','script','https://tags.clickagy.com/data.js?rnd=5f11f950c2e11',{"aid":"vffbk82gn13yr","list":"5yuk4l9q4jwx","conv_name":"k9ximaz0u4z","conv_v":"1"});
    </script>
@endsection
