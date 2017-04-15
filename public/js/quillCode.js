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


  var socket = io.connect( 'http://'+window.location.hostname+':3000' );
  //socket.emit("connection");
  //var Delta = Quill.import('delta');
  var newUser = true;

  var quill = new Quill('#editor', {
    modules: { toolbar: toolbarOptions },
    theme: 'snow'
  });


//   var change = new Delta();

//   quill.on('text-change', function(delta) {
//     change = change.compose(delta);


//      $.post('\NoteRoom\public\js\client.js', { 
//       doc: JSON.stringify(quill.getContents())
//     });
// });


  quill.on('text-change', function(delta, oldDelta, source){

    if(source == 'user'){ //source of the major bug
  
     socket.emit('textUp',  {'delta': JSON.stringify(delta)});

    }
 
  });


  //$('.ql-editor').hasClass("ql-blank") == means its empty
  socket.on('dataToClient', function(data){


          var del = JSON.parse(data.delta);
        
          quill.updateContents(del); 
            
          console.log('test');
  });


  socket.on('grabContent', function(data){
      if(!newUser){
        emit('giveContent')
      }

 

        socket.emit('needsUpdate');
      
        

        console.log('connection made');
        // quill.setContents(data);


  });
