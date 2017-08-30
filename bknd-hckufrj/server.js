const express = require('express');
const MongoClient = require('mongodb').MongoClient;
const bodyParser = require('body-parser');
const db = require('./config/db');
const passport = require('passport');
const session = require('express-session');
const RedisStore = require('connect-redis')(session);
const config = require('./config')

const port = 8000;


const app = express()  
app.use(session({  
  store: new RedisStore({
    url: config.redisStore.url
  }),
  resave: false,
  saveUninitialized: false
}))
app.use(passport.initialize())  
app.use(passport.session())  

app.use(bodyParser.urlencoded({ extended : true}));

MongoClient.connect(db.url, (err, database) => {
    if(err) return console.log(err)
    require('./app/routes')(app, database);
    
    app.listen(port, () => {
        console.log('App running on ' + port);
    });
})