<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Fav Icon  -->
<link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
<!-- Page Title  -->
<title>@yield('pageTitle')</title>

<!-- StyleSheets  -->
<link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('/css/fonts.css') }}">
<link rel="stylesheet" href="{{ asset('/css/formValidation.css') }}">
<link rel="stylesheet" href="{{ asset('/css/styleOther.css') }}">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TPBPPDK');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
    @yield('content')

    <!-- JavaScript -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/js/formValidation.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('/js/bootstrapfrm.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('/js/jquery.inputmask.bundle.min.js') }}"></script>
    @yield('scripts')
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPBPPDK"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>
</html>
