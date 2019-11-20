/********************************************* 
Main job of a model to to interact with the DB
**********************************************/

function getAllTopics(callback) {
  // Get all topics from DB
  let results = {
    topics: [
      {
        id: 1,
        name: "Faith"
      },
      {
        id: 2,
        name: "Charity"
      },
      {
        id: 3,
        name: "Hope"
      }
    ]
  };
  callback(null, results);
}

function getTopicById(id, callback) {
  // Get topic by id from DB
  let results = { id: id, name: "faith" };
  callback(null, results);
}

function insertNewTopic(name, callback) {
  // Insert new topic into DB
  let results = { success: true };
  callback(null, results);
}

module.exports = {
  getAllTopics: getAllTopics,
  getTopicById: getTopicById,
  insertNewTopic: insertNewTopic
};
