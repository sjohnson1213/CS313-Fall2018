function getAllNotes(callback){
    //get all the notes from the DB

    callback(results);
}

function getNoteById(id, callback){
    //get the note from the DB that matches that id
    callback(results);
}

function insertNewNote(name, callback){
    //create the new topic in the DB with the provided name
    var results = {success:true};
    callback(results);
}

module.exports = {
    getAllNotes: getAllNotes,
    getNoteById: getNoteById,
    insertNewNote: insertNewNote
};