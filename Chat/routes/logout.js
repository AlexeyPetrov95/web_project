var express = require('express');
var router = express.Router();

router.get('/logout', function(req,res,next){
    req.session.destroy(function(){});
    res.redirect('/login');
    res.end();
});

module.exports = router;