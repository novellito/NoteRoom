
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <title>@yield('title')</title>


        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>

        <link rel= "stylesheet" href="\NoteRoom\public\css\nav_bar.css">


</head>


<body>

        
  <nav class="navbar navbar-default">
  <div class="container-fluid">

      <a class="navbar-brand" href="/noteroom/public/binder" ><img src="img/NRlogoblue.png" height="25" width="40"></a>
    

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="main-nav-collapse">
     <div class="dropdown dropdown-accordion mr-auto" data-accordion="#accordion"> 

      <ul class="nav navbar-nav">
  
        <li class="dropdown">

        
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>

          <ul class="dropdown-menu">


          <div class="panel-group" id="accordion">


             {{-- <div class="panel panel-default"> --}}

                <div class="panel-heading">
                        <a href="#collapseOne" class ="dropdown-item" data-toggle="collapse" data-parent="#accordion">My Noterooms</a>
                 {{-- </div> --}}

                 <div class="panel-collapse collapse" id="collapseOne"> 

                        <div class="panel-body"> 

                            <li><a class="dropdown-item" href="#">COMP 380</a></li>
                            <li><a class="dropdown-item" href="#">COMP 222</a></li>
                            <li><a class="dropdown-item" href="#">ECON 175</a></li>
                            
                        </div>

                  </div>

              </div>
            
            {{-- <div class="panel panel-default"> --}}
              <div class="panel-heading">
                        <a href="#collapseTwo" class ="dropdown-item" data-toggle="collapse" data-parent="#accordion">Join Noteroom</a>
                 {{-- </div> --}}

                 <div class="panel-collapse collapse" id="collapseTwo"> 

                        <div class="panel-body"> 

                            <li>
                                    <form>
                                    <div class="form-group">
                                      <input type="text" class="form-control input-sm" placeholder="Enter Code">
                                    <button type="submit" class="btn btn-secondary btn-sm">Submit</button>
                                    </div>
                                  </form>

                            </li>   
                            
                        </div>
                  </div>
              </div>
          </div>
                <li><a class="dropdown-item" href="#">Create Noteroom</a></li>
          </ul>
        </li>
      </ul>

      </div>

      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">[User Here] <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/NoteRoom/public/binder">My Binder</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


   @yield('content')
    




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










