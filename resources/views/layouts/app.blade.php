<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {!! Html::style('website/css/bootstrap.min.css')!!}
        {!! Html::style('website/css/flexslider.css')!!}
        {!! Html::style('website/css/style.css')!!}
        {!! Html::style('website/css/font-awesome.min.css')!!}
        {!! Html::script('website/js/jquery.min.js')!!}
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>    
        <title>
            {{getsetting()}}
|
            @yield('title')
        </title>
        @yield('header')

    </head>
    <body id="app-layout" style="direction: rtl">
        <div class="header">
            <div class="container"> <a class="navbar-brand pull-right" href="{{url('/')}}"><i class="fa fa-paper-plane"></i> one</a>
                <div class="menu pull-left"> <a class="toggleMenu" href="#"><img src="{{Request::root()}}/website/images/nav_icon.png" alt="" /></a>
                    <ul class="nav" id="nav">
                        <li class="current"><a href="{{url('/home')}}">الرئيسية</a></li>
                        <li><a href="about.html">من نحن</a></li>
                        <li><a href="services.html">خدماتنا</a></li>
                        <li><a href="contact.html">اتصل بنا</a></li>
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">تسجيل الدخول</a></li>
                        <li><a href="{{ url('/register') }}">تسجيل</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                        @endif
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
        </div>


        @yield('content')
        <div class="footer">
            <div class="footer_bottom">
                <div class="follow-us">
                    <a class="fa fa-facebook social-icon" href="{{getsetting('facebook')}}"></a> 
                    <a class="fa fa-twitter social-icon" href="{{getsetting('twitter')}}"></a> 
                    <a class="fa fa-linkedin social-icon" href="{{getsetting('linkedin')}}"></a> 
                    <a class="fa fa-youtube social-icon" href="{{getsetting('youtube')}}"></a>
                </div>
                <div class="copy">
                    <p>Copyright &copy; 2015 Company Name. Design by <a href="http://www.templategarden.com" rel="nofollow">TemplateGarden</a></p>
                </div>
            </div>
        </div>
        {!!Html::script('website/js/responsive-nav.js')!!}      
        {!!Html::script('website/js/bootstrap.min.js')!!}
        {!!Html::script('website/js/jquery.flexslider.js')!!}
        @yield('footer')
    </body>
</html>
