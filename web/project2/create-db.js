var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "myusername",
  password: "mypassword"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  /*Create a database named "project2":*/
  con.query("CREATE DATABASE project2", function (err, result) {
    if (err) throw err;
    console.log("Database created");
  });
});