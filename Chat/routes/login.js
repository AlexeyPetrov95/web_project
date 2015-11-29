var express = require('express');
var router = express.Router();

var connect = require('../db/connect');
var passwordHash = require('password-hash');

router.get('/login', function(req,res, next){
   res.render('login', {title: 'Login'});
   res.end();
});

router.post('/login', function(req,res,next){
   var client = new connect.pg.Client(connect.conString);
   client.connect(function(err){
      if (err) {
         next(err);
         return console.error(err);
      }
      client.query("select login,password from users where login=$1", [req.body.login], function (err, result) {
         if (err) {
            next(err);
            return console.error(err);
         }
         client.end();
         if(result.rowCount != 0){
            if ((req.body.login == result.rows[0].login) && (passwordHash.verify(req.body.password, result.rows[0].password)) && req.session.authorized == undefined){
               req.session.authorized = true;
               req.session.user = result.rows[0].login;
               res.redirect('/chat/'+ result.rows[0].login);
            }else{
               res.render('login', {title: 'Login'});
            }
         }else {
            res.render('login', {title: 'Login'});
         }
      });
   });
});

module.exports = router;
