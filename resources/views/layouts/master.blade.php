

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>
  <link rel="icon" type="image/x-icon" href="img/NRlogoblue.png" />
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
  </script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
  <link rel="stylesheet" href="\NoteRoom\font-awesome-4.7.0\css\font-awesome.min.css">
  <link rel= "stylesheet" href="\NoteRoom\public\css\nav_footer.css">

  <style>
  button.myBut:hover{
    color:white;
    background-color:rgb(57, 160, 199);
  }
  </style>
  @yield('styles')
</head>
<body>
  <nav class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}" ><img src="{{ asset('img/NRlogoblue.png') }}" height="25" width="40"></a>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="main-nav-collapse">
      <div class="dropdown dropdown-accordion mr-auto" data-accordion="#accordion"> 
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding-bottom: 18px;">Home <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <div class="panel-group" id="accordion" style="margin-bottom: 0px;">
                <div class="panel-heading">
                  <a href="{{ url('/binder') }}" class ="dropdown-item">My Noterooms</a>
                 <div class="panel-collapse collapse" id="collapseOne"> 
                    <div class="panel-body" style="padding-top:5px"> 
                    {{-- TODO: need to change the urls to go to binder with noteroom page selected --}}
                          @foreach ($user->noterooms as $noteroom)
                      <a class="class-links" href="http://localhost/NoteRoom/Public/binder" style="color:black;">
                        
                          {{$noteroom->title}}
                        
                      </a>
                          @endforeach
                    </div>
                  </div>
                </div>
              {{-- TODO: fix acessability issues --}}
              <div class="panel-heading">
                <a href="#collapse3" class ="dropdown-item" data-toggle="collapse" data-parent="#accordion">Create Noteroom</a>
                <div class="panel-collapse collapse" id="collapse3"> 
                  <div class="panel-body" > 
                      <li>
                        <form action="{{ route('noteroom.store') }}" method="POST">
                        {{ csrf_field() }}
                          <div class="form-group">
                            <input type="text" class="form-control input-sm" name="title" id="title" placeholder="Enter Name">
                            <button type="submit" class="btn btn-secondary btn-sm myBut">Submit</button>
                          </div>
                        </form>
                      </li>   
                  </div>
                </div>
              </div>
              <div class="panel-heading">
                <a href="#collapseTwo" class ="dropdown-item" data-toggle="collapse" data-parent="#accordion">Join Noteroom</a>
                <div class="panel-collapse collapse" id="collapseTwo"> 
                  <div class="panel-body"> 
                      <li>
                        <form action="{{ route('join') }}">
                          <div class="form-group" style="margin-bottom:0px;">
                            <input type="text" class="form-control input-sm" name="join" id="join" placeholder="Enter Code">
                            <button type="submit" class="btn btn-secondary btn-sm myBut">Submit</button>
                          </div>
                        </form>
                      </li>   
                  </div>
                </div>
              </div>
              <!--<li>
                <div class="panel-heading" id="create">
                  <a href="#" class ="dropdown-item">Create Noteroom</a>
                </div>
              </li>-->
              </div>
            </ul>
          </li>
        </ul>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name }}  <i class="fa fa-user-circle" aria-hidden="true" style="font-size: 1.5em;"></i></a>
          <ul class="dropdown-menu">
            <!--<li><a class="dropdown-item" href="/NoteRoom/public/binder">My Binder</a></li>-->
            <li><a class="dropdown-item" href="#">Settings</a></li>
             <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li>
                                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>-->

                                <!--<ul class="dropdown-menu" role="menu">-->
                                    <!--<li>-->
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    <!--</li>-->
                                <!--</ul>-->
                            </li>
                        @endif
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>

@yield('content')

    <footer id="contact">
        <div class="content-wrap">
            <h4></h4>
            <div class="footerElems">
                <a href="http://localhost/NoteRoom/public/#about">About</a>
                <a href="http://localhost/NoteRoom/public/#contact">Contact Us</a>
                <a href="http://localhost/NoteRoom/public/#team">Our Team</a>
            </div>
            <p style="margin-bottom: 0;">Copyright 2017 by NoteRoomLLC</p>
            <div class="logos">
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-github-square" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            </div>
        </div>
    </footer>
  <script>
      $('.dropdown-accordion').on('show.bs.dropdown', function (event) {
        var accordion = $(this).find($(this).data('accordion'));
        accordion.find('.panel-collapse.in').collapse('hide');
      });

      // Prevent dropdown to be closed when we click on an accordion link
      $('.dropdown-accordion').on('click', 'a[data-toggle="collapse"]', function (event) {
        event.preventDefault();
        event.stopPropagation();
        $($(this).data('parent')).find('.panel-collapse.in').collapse('hide');
        $($(this).attr('href')).collapse('show');
      });
  </script>
</body>
</html>