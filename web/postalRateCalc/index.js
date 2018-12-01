const express = require('express')
const path = require('path')
const PORT = process.env.PORT || 5000
var app = express();

app.use(express.static(path.join(__dirname, 'public')))
app.set('views', path.join(__dirname, 'views'))
app.set('view engine', 'ejs')
app.get('/getRate', handleRate);
app.listen(PORT, () => console.log(`Listening on ${ PORT }`))


  function handleRate(request, response){
    var mailType = request.query.mailType;
    var weight = Number(request.query.weight);
  
    calculateRate(response, mailType, weight);
  }
  
  function calculateRate(response, mailType, weight) {
      var postalRate = 0.00;
      var totalCost = 0.00;
  
      if (mailType == "Stamped Letter") {
        if (weight <= 1) {
          postalRate = 0.50;
        } else if (weight > 1 && weight <= 2) {
          postalRate = 0.71;
        } else if (weight > 2 && weight <= 3) {
          postalRate = 0.92;
        } else if (weight > 3) { 
          postalRate = 1.13;
        }
      } else if (mailType == "Metered Letter") {
        if (weight <= 1) {
          postalRate = 0.47;
        } else if (weight > 1 && weight <= 2) {
          postalRate = 0.68;
        } else if (weight > 2 && weight <= 3) {
          postalRate = 0.89;
        } else if (weight > 3) { 
          postalRate = 1.10;
        }
      } else if (mailType == "Large Envelopes") {
        if (weight <= 1) {
          postalRate = 1.00;
        } else if (weight > 1 && weight <= 2) {
          postalRate = 1.21;
        } else if (weight > 2 && weight <= 3) {
          postalRate = 1.42;
        } else if (weight > 3 && weight <= 4) { 
          postalRate = 1.63;
        } else if (weight > 4 && weight <= 5) {
          postalRate = 1.84;
        } else if (weight > 5 && weight <= 6) {
          postalRate = 2.05;
        } else if (weight > 6 && weight <= 7) {
          postalRate = 2.26;
        } else if (weight > 7 && weight <= 8) {
          postalRate = 2.47;
        } else if (weight > 8 && weight <= 9) {
          postalRate = 2.68;
        } else if (weight > 9 && weight <= 10) { 
          postalRate = 2.89;
        } else if (weight > 10 && weight <= 11) {
          postalRate = 3.10;
        } else if (weight > 11 && weight <= 12) {
          postalRate = 3.31;
        } else if (weight > 12 && weight <= 13) {
          postalRate = 3.52;
        } else if (weight > 13) {
          postalRate = 3.52;
        }
      } else if (mailType == "Package") {
        if (weight <= 4) {
          postalRate = 3.50;
        } else if (weight > 4 && weight <= 8) {
          postalRate = 3.75;
        } else if (weight > 8 && weight <= 9) {
          postalRate = 4.10;
        } else if (weight > 9 && weight <= 10) { 
          postalRate = 4.45;
        } else if (weight > 10 && weight <= 11) {
          postalRate = 4.80;
        } else if (weight > 11 && weight <= 12) {
          postalRate = 5.15;
        } else if (weight > 12 && weight <= 13) {
          postalRate = 5.50;
        } else if (weight > 13) {
          postalRate = 5.50;
        }
      }
  
      var params = {mailType: mailType, weight: weight, postalRate: postalRate};
      response.render('pages/displaypage', params);
  }