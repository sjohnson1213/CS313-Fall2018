const noteModels = require("../models/noteModel.js")
function getNotesList(req, res){
    console.log("Getting all notes...");
    noteModel.getNotesList(function(error, results){
        res.json(results);
    });
}

function getNote(req, res){
    console.log("Getting one note");
    var id = req.query.id;
    noteModel.getNoteById(id, function(error, results){
        res.json(results);
    });
}

function postNote(req, res){
    var name = req.body.name;
    console.log("Creating a new note");
    noteModel.insertNewNote(name, function(error, results){
        res.json(results);
    });
}

module.exports = {
    getNote: getNote,
    getNotesList: getNotesList,
    postNote: postNote
};