var express = require('express');
var router = express.Router();
var connect = require('../db/connect');


router.get('/chat/:id', function(req,res, next){
   var id = req.params.id;

   if (req.session.user == id){
      var client = new connect.pg.Client(connect.conString);
      client.connect(function(err) {
         if (err){
            next(err);
            return console.error(err);
         }
         client.query('select * from message', function(err,result){
            if (err){
               next(err);
               return console.error(err);
            }
            res.render('chat', {user: id, result: result}) ;
         });
      });
   }else{
      res.redirect('/login');
   }
});
module.exports = router;