

var io = require('socket.io-client');

var notification = io.connect('http://192.168.82.158:3000');

notification.on('connect', function() {
 
  console.log("connect success");
  notification.emit('set-token', "hello world");
});

notification.on('notification', function(data) {
  $( "#messages" ).append( "<p><strong>"+data.name+":</strong>"+data.message+"</p>" );
  console.log(data.name+"   "+data.message);
});