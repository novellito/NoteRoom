@extends('layouts.master')
    
@section('title', 'Notes Page')

@section('styles')
  <link rel= "stylesheet" href="\NoteRoom\public\css\myNotes.css">
  <link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet">
@endsection

@section('content') 
<body style="background-color: #e0e0eb">
    <h2 class ="page_title"style="text-align: center;">
      Comp 380 / Notes Set-1
    </h2>
    <div class="container text-center"> 
        <div class="row content">
        {{-- was at col-sm-9 before --}}
            <div class="col-sm-12 text-left"> 
            <div class="pull-right" style="padding-top: 11px; padding-right: 13px;">
              <button class="btn btn-sm btn-primary" style="padding: 1px;" id="save">Save</button>
            </div>
            <div class="clearfix" style="background-color: #efeff5;">
              <div id="editor" style="height:60vh;">
              </div>
            </div>
            </div>
          {{--   <div class="col-sm-3 sidenav">  temporary comment out for first demo** 
              <div class="well">
              <label for="question">Ask a question</label>
                  <form action="">
                      <input id="question" autocomplete="off"  placeholder="Enter question"/> <button type="submit" class="btn-sm btn-primary">Submit</button>
                  </form>
                <p><u>Questions</u></p> 
                  <div id="messages">
                  </div>
              </div>
            </div> --}}
        </div>
    </div>
   
  <script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>
  <script src="\NoteRoom\node_modules\socket.io-client\dist\socket.io.js"></script>
     <!-- Initialize Quill editor -->
  <script src = "\NoteRoom\public\js\quillCode.js"></script> 
   <!-- {{--  temporarily commented to separate ask a question function from quill stuff - will need to integrate later... --}} -->
  <!--  <script src = "\NoteRoom\public\js\client.js"></script> -->
  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script type="text/javascript">
    $(document).ready(function() {
      $("#save").click(function() {
        var contents = quill.getContents();
        console.log(contents);  
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $.ajax({
          method: "POST",
          url: "{{ route('something') }}",
          data: {notes: JSON.stringify(contents)},
          // contentType: "application/json",
        }).done(function(data) {
          console.log(data);
        });
      });
    });
  </script>
</body>
@stop