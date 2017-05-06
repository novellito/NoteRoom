 $(function () {

            var user = prompt('what is your name?');
     
            var socket = io.connect( 'http://'+window.location.hostname+':3000' );//io();

            $('form').submit(function(){

                var theQuestion = $('#question').val();
                socket.emit('studentQuestion', {
                    sQuestion: theQuestion,
                    username: user
                });
                $('#question').val(''); //resets the form so it is empty again
                return false; //not sure why there

            });
            socket.on('studentQuestion', function(data){
                
               $('#messages').append($('<h2>').text(data.username + ':' + data.sQuestion));
    
            });

        });