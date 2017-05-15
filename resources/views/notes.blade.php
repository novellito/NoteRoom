@extends('layouts.master')
    
@section('title', 'Notes Page')

@section('styles')
  <link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet">
@endsection

@section('content') 
<body style="background-color: #e0e0eb">
    <h2 class ="page_title"style="text-align: center;">
      {{$roomTitle}}
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
    
  {{-- noteroom id needed for the javascript on the page --}}
  <script type="text/javascript">
    var noteroomId = {{ $noteId }} ;
  </script> 

  {{-- quilljs and socket.io cdn's for the page--}}
  <script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>
  <script src="\NoteRoom\node_modules\socket.io-client\dist\socket.io.js"></script>

  <!-- Initialize Quill editor -->
  <script src = "\NoteRoom\public\js\quillCode.js"></script> 

  {{-- JQuery needed for the saving script below --}}
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

  {{-- this is the csrf token for ajax call --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">

  {{-- script for saving --}}
  <script type="text/javascript">
    $(document).ready(function() {

      // updates the noteroom if there is already
      if ({{$existing != NULL? 1:0}}) {
        quill.updateContents({!!$existing!!});
      }
      
      // saves the document on clicking the save buttin
      $("#save").click(function() {
        save();
      });

      // every five seconds, save the contents
      setInterval(function() {
        save();
      }, 5000);

      var save = function() {

        // grab the contents from the editor
        var contents = quill.getContents();

        // grabs the csrf token to be sent with the ajax
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
          method: "POST",
          url: "{{ route('something') }}",
          data: {notes: JSON.stringify(contents), noteId: {{$noteId}} },

        }).done(function(data) {
          // console.log(data);
        });
      }
    });
  </script>
</body>
@stop