<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="A free Bootstrap powerd HTML template exclusively crafted for the super lazy designers like me who designed thousand of websites till today but never got a chance to build one himself.">
    <meta name="keywords" content="Free Portfolio Template, Free Template, Free Bootstrap Template, Dribbble Portfolio Template, Free HTML5 Template">
    <meta name="mailru-domain" content="eXS9uHcWrUtLYhY4" />
    <meta name="author" content="EvenFly Team">
    <title>Artelandrosow</title>

    <link rel="icon" href="img/favicon.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-ipad-retina.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-iphone-retina.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-iphone.png" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/preloader.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Antic|Raleway:300">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body data-spy="scroll" style="background: url('/images/background/{!! $background !!}')no-repeat; -moz-background-size: 100% 100%;
    -webkit-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%;">

        <div id="hero">
            @if ($show)
            	<div id="post2" class="container herocontent">	
                	@if ($post['img'] != '' )
                	<img style="height: 200px;" src="/images/origin/{!! $post['img'] !!}"/>
		            @endif
		            <h2 class="wow fadeInUp" data-wow-duration="2s">{{ $post['title'] }}</h2>
		            <h4 class="wow fadeInDown" data-wow-duration="3s">{{ $post['text'] }}</h4>
                </div>
            @else
            	@if ($greetingCheck == 1) {
            	    <div id="post1" class="container herocontent">
                    	<h2 class="wow fadeInUp" data-wow-duration="2s">{!! $greetingTitle !!}</h2>
                    	<h4 class="wow fadeInDown" data-wow-duration="3s">{!! $greetingText !!}</h4>
            		</div>
            	@else
            		<div id="post1" class="container herocontent">
                
            		</div>
            	@endif

            	<div id="post2" class="container herocontent" style="display: none;">
                	@if (count($post) == 0)
                		<h2 class="wow fadeInUp" data-wow-duration="2s">Предсказания пока отстсвуют</h2>			<h4 class="wow fadeInDown" data-wow-duration="3s">Пожайуйста зайдите позже</h4>
                	@else
                		@if ($post['img'] != '')
                			<img style="height: 200px;" src="/images/origin/{!! $post['img'] !!}"/>
                		@endif
                			<h2 class="wow fadeInUp" data-wow-duration="2s">{{ $post['title'] }}</h2>
                			<div id="post-content">
                			<h4 class="wow fadeInDown" data-wow-duration="3s">{{ $post['text'] }}</h4></div>
                	@endif
            	</div>

            	<button id="show" class="heroshot wow bounceInUp" data-wow-duration="4s">{!! $buttonText !!}</button>
            @endif
    
    <style>
    	@if ($show == false)
			#show {
			    color: {!! $buttonTextColor !!};
			    background: {!! $buttonColor !!};
			    height: {!! $buttonHeight !!}px;
			    width: {!! $buttonWidth !!}px;
			    border-radius: {!! $buttonRadius !!}px;
			    font-size: {!! $fontSize !!}px;
			    font-weight: {!! $fontWidth !!};
			}
    	@endif
    </style>

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
    <script src="js/drifolio.js"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script>
        new WOW().init();

        $(document).ready(function() {
            $("#show").click(function() {
                $("#show").css("display", "none");
                $("#show").css("visibility", "hidden");
                $("#post1").css("visibility", "hidden");
                $("#post1").css("display", "none");
                $("#post2").css("display", "block");
            });
        });
    </script>
</body>

</html>
