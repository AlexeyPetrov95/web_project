var pg = require('pg');
var config = require('config');
var conString  = 'postgres://postgres:tutu123@localhost/postgres';

module.exports.pg = pg;
module.exports.conString = conString;