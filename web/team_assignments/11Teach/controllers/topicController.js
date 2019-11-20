const topicModels = require("../models/topicModel");

function getTopicList(req, res) {
  console.log("Getting all topics");
  topicModels.getAllTopics((error, results) => {
    res.json(results);
  });
}

function getTopic(req, res) {
  let id = req.query.id;
  console.log("Getting single topic with id:" + id);
  topicModels.getTopicById(id, (error, results) => {
    res.json(results);
  });
}

function postTopic(req, res) {
  let name = req.body.name;
  console.log("Creating new topic with name: " + name);
  topicModels.insertNewTopic(name, (error, results) => {
    res.json(results);
  });
}

module.exports = {
  getTopicList: getTopicList,
  getTopic: getTopic,
  postTopic: postTopic
};
