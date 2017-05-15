var toolbarOptions = [
  ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
  ['blockquote', 'code-block'],

  [{ 'header': 1 }, { 'header': 2 }],               // custom button values
  [{ 'list': 'ordered'}, { 'list': 'bullet' }],
  [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
  [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
  [{ 'direction': 'rtl' }],                         // text direction

  [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
  [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

  [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
  [{ 'font': [] }],
  [{ 'align': [] }],

  ['clean']                                         // remove formatting button
];

var quill = new Quill('#editor', {
  modules: { toolbar: toolbarOptions },
  theme: 'snow'
});

var socket = io.connect( 'http://'+window.location.hostname+':3000' );
var newUser = true;
var emptyEditor = true;


/*
|--------------------------------------------------------------------------
| Socket Funcionality
|--------------------------------------------------------------------------
|
*/

// Returns to the server what room client should join
socket.on('whatRoom', function(data) {
  socket.emit('thisRoom', {room: noteroomId});
})

// fires an update for the newest notes
socket.on('checkAllNotes', function(){
  var contents = quill.getContents();
  socket.emit('sendContents', {contents: contents, room: noteroomId});
});

// Updates client when there is a call from the server
socket.on('updateAll', function(contents){    
  if(($('.ql-editor').hasClass("ql-blank"))) {
    quill.updateContents(contents); 
  }
});

// Handles the event when client changes the text field
quill.on('text-change', function(delta, oldDelta, source) {
  if(source == 'user') { 
   socket.emit('textUp',  {'delta': JSON.stringify(delta), room: noteroomId});
  }
});

// This provides everybody with the newest updated textarea
socket.on('dataToClient', function(data) {
  var del = JSON.parse(data.delta);
  quill.updateContents(del); 
});
