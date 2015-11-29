/**
 * Created by petrovalexey on 18/01/15.
 */
var express = require('express');
var router = express.Router();

var connect = require('../db/connect');
var passwordHash = require('password-hash');

router.get('/registration', function(req,res,next){
    res.render('reg', { title: 'Welcome', check: '' });
    res.end();
});

router.post('/registration', function(req, res, next){
    var client = new connect.pg.Client(connect.conString);
    client.connect(function(err) {
        if (err) {
            next(err);
            return console.error(err);
        }
        client.query("select login from users where login=$1", [req.body.login], function (err, result) {
            if (err){
                next(err);
                return console.error(err);
            };
            if (result.rowCount == 0) {
                client.query('insert into users values($1,$2,$3,$4)', [req.body.name,
                    req.body.lastname, req.body.login,  passwordHash.generate(req.body.password)], function (err, result) {
                    if (err) {
                        next(err);
                        return console.error(err);
                    }
                    client.end();
                });
                res.redirect('/login');
            } else {
                res.render('reg', {title: "welcome", check: 'Такой ник уже существует'});
            }
        });
    });

});
module.exports=router;