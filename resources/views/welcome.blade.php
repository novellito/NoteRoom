<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NoteRoom</title>
        <link rel="icon" type="image/x-icon" href="img/NRlogoblue.png" />
         <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
        </script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="\NoteRoom\public\css\welcomeMain.css">
        <link rel="stylesheet" href="\NoteRoom\public\css\responsiveWelcome.css">
    </head>

    <body>
        <div class="clearfix">
            <div class="parallax">
                <div class="flex-center position-ref full-height">
                    @if (Route::has('login'))
                        <div class="top-right corner cont" style="z-index: 20;">
                            @if (Auth::check())
                                <a class = "mb" href="{{ url('/binder') }}">My Binder</a>
                              <a class ="log" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                 
                            @else
                                <a class ="page-scroll" href="#login">Login</a>
                                <a href="{{ url('/register') }}">Register</a>
                            @endif
                        </div>
                    @endif
                    <div class="content">
                        <div class="title m-b-md">
                            NoteRoom
                        </div>
                        <div class="links">
                            <a class ="page-scroll" href="#about">About</a>
                            <a class ="page-scroll" href="#explain">What is it?</a>
                            <a class ="page-scroll" href="#team">Meet the Team</a>
                            <a class ="page-scroll" href="#contact">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@if (!(Auth::check()))
          <section class = "section section-white">
                <div class="container white-space" style="display: block; text-align: center;">
                    <div class="row">
                        <div class="col-sm-12">
                            
                                <div class="split">Login.</div>
                           
                        </div>
                    </div>
        </section>
        <div class="parallax0" id="login">
            <div class = "flex-center position-ref full-height">
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="login-form ">Email</label>

                                <input id="email" type="text" class=" form-control" name="email" value="{{ old('email') }}" required >

                                @if ($errors->has('email'))
                                    <!--<span class="help-block">-->
                                        <p>{{ $errors->first('email') }}</p>
                                    <!--</span>-->
                                @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="login-form ">Password</label>
                                      <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <!--<span class="help-block">-->
                                        <p>{{ $errors->first('password') }}</p>
                                    <!--</span>-->
                                @endif
                        </div>

                        <div class="form-group" style="margin-bottom: 0px;">
                                <div class="checkbox" style="text-align:center; margin-right:20px;">
                                    <label class="remember" style="font-size:25px;">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} style="margin-top:15px;"> Remember Me
                                    </label>
                                </div>
                        </div>

                        <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}" style="font-size:15px; color:white;">
                                    Forgot Your Password?
                                </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endif
        <section class = "section section-white">
                <div class="container white-space" style="display: block; text-align: center;">
                    <div class="row">
                        <div class="col-sm-12">
                            
                                <div class="split">About.</div>
                           
                        </div>
                    </div>
        </section>
        <div class="parallax1" id="about">
            <div class = "flex-center position-ref full-height desc">
                <p> 
                    NoteRoom was inspired as a result of having issues with taking notes the old fashioned way. <br>    Current collaborative apps were not good enough, so the team got to work.
                </p>
            </div>
        </div>


        <section class = "section section-white what-is-label">
                <div class="container white-space" style="display: block; text-align: center;">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="split">What is NoteRoom?</div>
                        </div>
                    </div>

               
        </section>
        <div class="parallax2" id="explain">
            <div class = "flex-center position-ref full-height desc2">
            NoteRoom tailors collaborative notetaking for the classroom.<br>It is created by students for students.
            </div>
        </div>

        <section class = "section section-white meet">
                <div class="container white-space" style="display: block; text-align: center;">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="split">Meet the Team.</div>
                        </div>
                    </div>
                </div>
        </section>
        <div class="parallax3" id="team">

            <div class="container team-xs">
                    <div class="row hidden-lg">
                        <div class="row text-center">  
                             <img class="img-circle img-responsive img-center" 
                             style="width:125px; height:125px; margin-top:20px;"
                             src="img/gabe.png" alt="" >
                            <h3>Gabriel Alabastro
                            </h3>
                            <p>Team Leader</p>
                        </div>
                    </div>
                    <div class="row text-center hidden-lg"> 
                        <div class="col-xs-6">  
                         <img class="img-circle img-responsive img-center" 
                             style="width:125px; height:125px; "
                             src="img/xtian.png" alt="" >
                            <h3>Christian Trinidad
                            </h3>
                            <p>Full Stack Developer</p>
                        </div>
                        <div class="col-xs-6">  
                         <img class="img-circle img-responsive img-center" 
                             style="width:125px; height:125px; "
                             src="img/ary.png" alt="" >
                            <h3>Aryan Mokhber
                            </h3>
                            <p>Front End Developer</p>
                        </div>
                    </div>
                    <div class="row text-center hidden-lg"> 
                        <div class="col-xs-6">  
                         <img class="img-circle img-responsive img-center" 
                             style="width:125px; height:125px; margin-top:20px;"
                             src="img/nan.png" alt="" >
                        <h3>Anando Mahbubah
                        </h3>
                        <p>Back End Developer</p>
                        </div>
                        <div class="col-xs-6">  
                         <img class="img-circle img-responsive img-center" 
                             style="width:125px; height:125px; margin-top:20px;"
                             src="img/ray.png" alt="" >
                              <h3>Raymond Nazaryan
                              </h3>
                            <p>Back End Developer</p>
                        </div>
                    </div>
            </div>
            <div class="container hidden-xs hidden-sm hidden-md">
                <div class="row team" style="margin-top:5%;">
                        <div class="col-lg-4 col-sm-6 text-center">
                            <img class="img-circle img-responsive img-center" src="img/xtian.png" alt="" >
                            <h3>Christian Trinidad
                            </h3>
                            <p>Full Stack Developer</p>
                        </div>
                    <div class="col-lg-4 col-sm-6 text-center">
                        <img class="img-circle img-responsive img-center" src="img/gabe.png" alt="" >
                        <h3>Gabriel Alabastro
                        </h3>
                        <p>Team Leader</p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center">
                        <img class="img-circle img-responsive img-center" src="img/nan.png" alt="" >
                        <h3>Anando Mahbubah
                        </h3>
                        <p>Back End Developer</p>
                    </div>
                </div>
                <div class="row team" style="margin-top:5%;">
                    <div class="col-lg-6 col-sm-5 text-center" >
                        <img class="img-circle img-responsive img-center" src="img/ary.png" alt="">
                        <h3>Aryan Mokhber
                        </h3>
                        <p>Front End Developer</p>
                    </div>
                    <div class="col-lg-6 col-sm-5 text-center">
                        <img class="img-circle img-responsive img-center" src="img/ray.png" alt="">
                        <h3>Raymond Nazaryan
                        </h3>
                        <p>Back End Developer</p>
                    </div>
                </div>
            </div>
        </div>

        <section class = "section section-white">
                <div class="container white-space" style="display: block; text-align: center;">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="split">Contact Us.</div>
                        </div>
                    </div>
                </div>
        </section>
           
        <div class="parallax4" id="contact">
            <div class="contax">
                <h1>Email Us</h1>
                <h3><a href="mailto:info@noteroom.com" style="color: white">info@noteroom.com</a></h3>
            </div>
        </div>
  <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
        
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>  
     <script src="/noteroom/public/js/jquery.easing.min.js">   </script>
      <script>  
        //jQuery to collapse the navbar on scroll
// $(window).scroll(function() {
//     if ($(".navbar").offset().top > 50) {
//         $(".navbar-fixed-top").addClass("top-nav-collapse");
//     } else {
//         $(".navbar-fixed-top").removeClass("top-nav-collapse");
//     }
// });

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});      
      </script>
     
    </body>
</html>
