@extends('layouts.master')
    
@section('title', 'Notes Page')

@section('styles')
  <link rel= "stylesheet" href="\NoteRoom\public\css\myNotes.css">
  <link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet">
@endsection

@section('content') 
    <div class="container text-center"> 
        <div class="row content">
            <div class="col-sm-9 text-left"> 
              <div id="editor">
              </div>
            </div>
            <div class="col-sm-3 sidenav">
              <div class="well">
              <label for="question">Ask a question</label>
                  <form action="">
                      <input id="question" autocomplete="off"  placeholder="Enter question"/> <button type="submit" class="btn-sm btn-primary">Submit</button>
                  </form>
                <p><u>Questions</u></p> 
                  <div id="messages">
                  </div>
              </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid text-center">
      <p>NoteRoom</p>
    </footer>
  <script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>
  <script src="\NoteRoom\node_modules\socket.io-client\dist\socket.io.js"></script>
     <!-- Initialize Quill editor -->
  <script src = "\NoteRoom\public\js\quillCode.js"></script> 
   <!-- {{--  temporarily commented to separate ask a question function from quill stuff - will need to integrate later... --}} -->
  <!--  <script src = "\NoteRoom\public\js\client.js"></script> -->
@stop