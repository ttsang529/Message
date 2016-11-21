

var io = require('socket.io-client');

var notification = io.connect('http://192.168.82.158:3000');

notification.on('connect', function() {
 
  console.log("connect success");
  notification.emit('set-token', "hello world");
});

notification.on('notification', function(message) {
  console.log(message);
});