var express = require("express");
var app = express();
var path = require('path');
var router = express.Router();

app.use("/public", express.static(path.resolve(__dirname, 'public')));

app.set('view engine', 'ejs');

app.get('/', function(req, res) {
    res.render('pages/index');
});

app.get('/about', function(req, res) {
    res.render('pages/about');
});
app.get('/contact', function(req, res) {
    res.render('pages/contact');
});

app.get('/post', function(req, res) {
    res.render('pages/post');
});





app.listen(8080);
console.log('started!!');