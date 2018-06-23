<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="/user/css/bootstrap.min.css" rel="stylesheet">
    <link href="/user/css/font-awesome.min.css" rel="stylesheet">
    <link href="/user/css/prettyPhoto.css" rel="stylesheet">
    <link href="/user/css/price-range.css" rel="stylesheet">
    <link href="/user/css/animate.css" rel="stylesheet">
    <link href="/user/css/main.css" rel="stylesheet">
    <link href="/user/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="/user/images/ico/favicon.ico" style="color: #3498db">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/user/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/user/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/user/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/user/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    <header id="header"><!--header-->

        @include('frontend.partials.headertop')
        
        @include('frontend.partials.headermiddle')
        
        @include('frontend.partials.headerbottom')
    </header><!--/header-->
    
        @include('frontend.partials.slider')
    <br/>
    
        @include('frontend.partials.section')
        

        @include('frontend.partials.footer')

  
    <script src="/user/js/jquery.js"></script>
    <script src="/user/js/bootstrap.min.js"></script>
    <script src="/user/js/jquery.scrollUp.min.js"></script>
    <script src="/user/js/price-range.js"></script>
    <script src="/user/js/jquery.prettyPhoto.js"></script>
    <script src="/user/js/main.js"></script>
</body>
</html>