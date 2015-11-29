var connect = require('../db/connect');
var passwordHash = require('password-hash');


var client = new connect.pg.Client(connect.conString);
client.connect(function(err) {
    if(err) {
        return console.error('error fetching client from pool', err);
    }
    client.query('select login,password from users', function(err,result){
        if(err) {
            return console.error('error running query', err);
        }
        for (var i = 0; i < result.rowCount; i++){
            client.query('update users set password=$1 where login=$2',[passwordHash.generate(result.rows[i].password), result.rows[i].login],function(err,result){
                if(err) {
                    return console.error('error running query', err);
                }
                client.end();
            });
        }
    });
});
