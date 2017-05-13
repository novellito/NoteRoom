var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);

var users = [];

//establishes the connection 
io.on('connection', function(socket){
    console.log('a user connected');

    users.push(socket.id);

    //TODO -- who to update from if first user leaves?   

    //we only update from the original host (for now)
    socket.to(users[0]).broadcast.emit('checkAllNotes');

    socket.on('sendContents', function(contents){

      socket.broadcast.emit('updateAll', contents);

    });
  

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


       // socket.emit('newUserUpdate', data.delta);
       
    	console.log('message is: '+ data.delta);
      
    });

    //assign updates to next element in array...
    socket.on('disconnect', function(){

      users = users.slice(1,users.length-1);
      console.log('User left :(');


    });


});

 
//spins up the server
http.listen(3000, function(){
  console.log('listening on port 3000');
});