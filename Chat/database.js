var pg = require('pg');

var conString = "postgres://postgres:tutu123@localhost/postgres";

var client = new pg.Client(conString);
client.connect(function(err) {
    if(err) {
        return console.error('could not connect to postgres', err);
    }
    client.query("insert into users values('1','2','3','4')", function(err, result) {
        if(err) {
            return console.error('error running query', err);
        }
        //output: Tue Jan 15 2013 19:12:47 GMT-600 (CST)
        client.end();
    });
});