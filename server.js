var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);

// spins up the server
http.listen(3000, function(){
  console.log('listening on port 3000');
});

//establishes the connection 
io.on('connection', function(socket){

  // Asks the client what noteroom they are in
  socket.emit('whatRoom');

  // Joins socket to the room when given noteroom number
  socket.on('thisRoom', function(data) {
    socket.join(data.room);
  });

  // Updates on text change to all clients in specific room
  socket.on('sendContents', function(data){
    socket.broadcast.to(data.room).emit('updateAll', data.contents);
  });

  // TODO: Add functionality to student asking a question
  // socket.on('studentQuestion', function(data) { //first param is the name (chat message)
  //   io.emit('studentQuestion',data); //emmits studentQuestion on client side
  // });

  // handles what occurs when text is changed
  socket.on('textUp', function(data){
    socket.broadcast.to(data.room).emit('dataToClient', data);
  });
});

