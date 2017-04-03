<!DOCTYPE html>
<html lang="en" class="coming-soon">
<head>
    <meta charset="utf-8">
    <title>Website Fortaleza</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="author" content="KaijuThemes">
	<link rel="icon" href="http://oeduardoal.github.io/eduardoalmeida.ico" />
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600' rel='stylesheet' type='text/css'>
    <link type="text/css" href="/assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">
    <link type="text/css" href="/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" href="/assets/fonts/themify-icons/themify-icons.css" rel="stylesheet">

<link type="text/css" href="/assets/plugins/gridforms/gridforms/gridforms.css" rel="stylesheet">                                     <!-- Gridforms -->
    <link type="text/css" href="/assets/css/styles.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    </head>
    @if (Auth::guest())
        <body class="focused-form animated-content">
    @else
        <body class="animated-content">
    @endif
        
    @yield('content')

    <script type="text/javascript" src="/assets/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/assets/js/jqueryui-1.10.3.min.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/js/enquire.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/velocityjs/velocity.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/velocityjs/velocity.ui.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/wijets/wijets.js"></script>
    <script type="text/javascript" src="/assets/plugins/codeprettifier/prettify.js"></script>
    <script type="text/javascript" src="/assets/plugins/bootstrap-switch/bootstrap-switch.js"></script>
    <script type="text/javascript" src="/assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>
    <script type="text/javascript" src="/assets/plugins/iCheck/icheck.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script>
    <script type="text/javascript" src="/assets/js/application.js"></script>
    <script type="text/javascript" src="/assets/demo/demo.js"></script> 
    {{-- <script type="text/javascript" src="/assets/demo/demo-switcher.js"></script> --}}
    </body>
</html>