const express = require("express");
const path = require("path");

const noteController = require("./controllers/noteController.js")

const PORT = process.env.PORT || 5000;

var app = express();

app.use(express.static(path.join(__dirname, "public")));
app.use(express.json());
app.use(express.urlencoded({extended: true}));

app.get("/notes", noteController.getNotesList);
app.get("/note", noteController.getNote);
app.get("/search", noteController.search);
app.post("/note", noteController.postNote);

app.listen(PORT, function(){
    console.log("Server listening on port " + PORT);
});
