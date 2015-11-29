var connect = require('connect');
var cookie = require('cookie');
var BBCodeParser = require('bbcode-parser');
var parser = new BBCodeParser(BBCodeParser.defaultTags());
var connect = require('../db/connect');



module.exports = function(server){
    var io = require('socket.io').listen(server);

    io.set('origins', '*:*');

    io.on('connection', function(socket){
        console.log('a user connected');

        // ---------- определять по сессии!! --------------
        var id = socket.handshake.headers.referer.split('/')[4];
        socket.broadcast.emit('new_user', id);

        socket.on('message', function(text, user, cb){
            var bb = parser.parseString(text);
            var date = new Date();

            function checkTime(date){
                if( date < 10 ){
                    date = '0'+ date;
                }
                return date;
            };

            connect.pg.connect(connect.conString, function(err, client, done) {
                if(err) {
                    return console.error('error fetching client from pool', err);
                }
                client.query('insert into message (users,message,time_message,check_user) values($1,$2,$3,$4)',[ user,bb,checkTime(date.getHours())+":"+checkTime(date.getMinutes())+":"+checkTime(date.getSeconds()), true], function(err, result) {
                    if(err) {
                        return console.error('error running query', err);
                    }
                    done();
                });
            });

            socket.broadcast.emit('message', bb, user);
            cb(bb);
        });

        socket.on('disconnect', function(){
            socket.broadcast.emit('delete_user', id);
            console.log('user disconnected');
        });
    });
};


//  постоянное подключение к бд?