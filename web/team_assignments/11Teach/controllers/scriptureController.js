const scriptureModels = require("../models/scriptureModel");

function search(req, res) {
  let book = req.query.book;
  scriptureModels.searchByBook(book, (error, results) => {
    res.json(results);
  });

  // let topicId;
  // scriptureModels.searchByTopic(topicId, results => {
  //   res.json(results);
  // });
}
function getScriptureList(req, res) {
  scriptureModels.getAllScriptures(results => {
    res.json(results);
  });
}
function getScripture(req, res) {
  let id = req.query.id;
  scriptureModels.getScriptureById(id, results => {
    res.json(results);
  });
}
function postScripture(req, res) {
  let book = "John";
  let chapter = 3;
  let verse = 16;
  let content = "content";

  scriptureModels.insertNewScripture(book, chapter, verse, content, results => {
    res.json(results);
  });
}
function assignTopicToScripture(req, res) {
  let topicId = 1;
  let scriptureId = 1;
  scriptureModels.assignTopicToScripture(topicId, scriptureId, results => {
    res.json(results);
  });
}

module.exports = {
  search: search,
  getScriptureList: getScriptureList,
  getScripture: getScripture,
  postScripture: postScripture,
  assignTopicToScripture: assignTopicToScripture
};
