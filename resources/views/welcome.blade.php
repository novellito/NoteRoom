<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NoteRoom</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <style>
            html, body {
                background-color: #fff;
                color: grey;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            
            img{
                margin:auto; 
                height:200px;
                width:200px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 120px;
                color: white;
            }

            h1 {
                font-weight: bold;
                font-size: 200px;
                color: white;
            }

            .contax h3:hover{
                font-size:40px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 900;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .links > a:hover{
               font-size: 30px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .split{
                font-size: 70px;
            }

            .section-white{
                height: 100px;
            }

            .contax{
                text-align: center;
                padding-top: 15%;
            }
            
            .desc2{
                font-weight: bold;
                font-size: 75px;
                color:#6e8f3d; 
                text-align: left;
                padding-left: 10px;
            }

            .parallax { 
                background-image: url("img/csunov.jpg");
                height: 100%; 
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .parallax1 { 
                background-image: url("img/brick.jpg");
                height: 100%; 
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }  
            .parallax2 { 
                background-image: url("img/notebook.jpg");
                height: 100%; 
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .parallax3 { 
                background-image: url("img/network.jpg");
                height: 100%; 
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .parallax4 { 
                background-image: url("img/mail.jpg");
                height: 100%; 
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .team h3, .team p{
                color:white;
                font-weight:600;
            }

            .img-circle{
                border: 2px solid #fff;
            }

            .desc{
                font-weight:bold;
                font-size:75px;
                color:#ebd514;/*#f1e260;*/
                text-align:center;
            }

        </style>
    </head>

    <body>
        <div class="clearfix">
            <div class="parallax">
                <div class="flex-center position-ref full-height">
                    @if (Route::has('login'))
                        <div class="top-right links" style="z-index: 20;">
                            @if (Auth::check())
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ url('/login') }}">Login</a>
                                <a href="{{ url('/register') }}">Register</a>
                            @endif
                        </div>
                    @endif
                    <div class="content">
                        <div class="title m-b-md">
                            NoteRoom
                        </div>
                        <div class="links">
                            <a href="#about">About</a>
                            <a href="#explain">What is it?</a>
                            <a href="#team">Meet the Team</a>
                            <a href="#contact">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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


        <section class = "section section-white">
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

        <section class = "section section-white">
                <div class="container white-space" style="display: block; text-align: center;">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="split">Meet the Team.</div>
                        </div>
                    </div>
                </div>
        </section>
        <div class="parallax3" id="team">
            <div class="container">
                <div class="row team" style="margin-top:5%;">
                    <div class="col-lg-12">
                    </div>
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
                        <p>Full Stack Developer</p>
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
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
  </script>  
    </body>
</html>
