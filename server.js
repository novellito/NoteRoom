var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);


// app.get('/', function(req, res){
// 	//res.sendFile(__dirname + '/index.php');
// 	//res.sendFile('/public/index.php');
//   res.sendFile('NoteRoom/resources/views/home.blade.php');
// });



//establishes the connection 
io.on('connection', function(socket){
    console.log('a user connected');

    
    socket.on('studentQuestion', function(data){ //first param is the name (chat message)

    io.emit('studentQuestion',data); //emmits studentQuestion on client side
    console.log('message to server');
  });

    //handles what occurs when text is changed
    socket.on('textUp', function(data){

        socket.broadcast.emit('dataToClient', data);

      /*keep these here just in case things go bad 
      socket.emit('dataToClient', data);
       io.emit('dataToClient', data);*/

    	console.log('message is: '+ data.delta);

    });



});

 
//spins up the server
http.listen(3000, function(){
  console.log('listening on port 3000');
});