var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);

app.get('/', function(req, res){
	res.sendFile(__dirname + '/index.html');
});

//io.set('origins', 'http://gh7.local');

io.on('connection', function(socket){
	console.log('a user connected');
});

io.on('connection', function(socket){
	console.log('a user connected');
	socket.on('disconnect', function(){
		console.log('user disconnected');
	});
});

io.on('connection', function(socket){
	socket.on('chat message', function(msg){
		socket.broadcast.emit('chat message', msg);
	});
});

http.listen(3000, function(){
	console.log('listening on *:3000');
});
