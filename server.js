var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);

//establishes the connection 
io.on('connection', function(socket){
    console.log('a user connected');

    socket.emit('whatRoom');
    socket.on('thisRoom', function(data) {
      socket.join(data.room);
    });

    socket.on('sendContents', function(data){
      socket.broadcast.to(data.room).emit('updateAll', data.contents);
    });
  

    socket.on('studentQuestion', function(data){ //first param is the name (chat message)

    io.emit('studentQuestion',data); //emmits studentQuestion on client side
    console.log('message to server');

  });

    //handles what occurs when text is changed
    socket.on('textUp', function(data){


        socket.broadcast.to(data.room).emit('dataToClient', data);


      /*keep these here just in case things go bad 
      socket.emit('dataToClient', data);
       io.emit('dataToClient', data);*/


       // socket.emit('newUserUpdate', data.delta);
       
    	console.log('message is: '+ data.delta);
      
    });

    //assign updates to next element in array...
    socket.on('disconnect', function(){
      console.log('User left :(');
    });


});

 
//spins up the server
http.listen(3000, function(){
  console.log('listening on port 3000');
});