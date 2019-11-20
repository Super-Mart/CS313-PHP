const { Pool } = require("pg");
const dotenv = require("dotenv");

dotenv.config();

const db_url = process.env.DATABASE_URL;
//console.log(db_url);

const pool = new Pool({ connectionString: db_url });

function searchByBook(book, callback) {
  // console.log("Searching DB for " + book);
  let sql =
    "SELECT id, book, chapter, verse, content FROM scripture WHERE book=$1::text";
  let params = [book];

  pool.query(sql, params, (err, db_results) => {
    if (err) {
      throw err;
    } else {
      // console.log(db_results);
      let results = {
        success: true,
        list: db_results.rows
      };
      callback(null, results);
    }
  });
}
function searchByTopic(topicId, callback) {
  let results = {
    list: [
      {
        id: 1,
        book: "Book",
        chapter: 1,
        verse: 1,
        content: "content"
      },
      {
        id: 2,
        book: "Book2",
        chapter: 2,
        verse: 2,
        content: "content2"
      },
      {
        id: 3,
        book: "Book3",
        chapter: 3,
        verse: 3,
        content: "content3"
      }
    ]
  };
  callback(null, results);
}
function getAllScriptures(callback) {
  let results = {
    list: [
      {
        id: 1,
        book: "Book",
        chapter: 1,
        verse: 1,
        content: "content"
      },
      {
        id: 2,
        book: "Book2",
        chapter: 2,
        verse: 2,
        content: "content2"
      },
      {
        id: 3,
        book: "Book3",
        chapter: 3,
        verse: 3,
        content: "content3"
      }
    ]
  };
  callback(results);
}
function getScriptureById(id, callback) {
  let results = {
    id: 1,
    book: "Book",
    chapter: 1,
    verse: 1,
    content: "content"
  };
  callback(null, results);
}
function insertNewScripture(book, chapter, verse, content, callback) {
  let results = {
    success: true,
    id: 3,
    book: book,
    chapter: chapter,
    verse: verse,
    content: content
  };
  callback(null, results);
}
function assignTopicToScripture(topicId, scriptureId, callback) {
  let results = {
    success: true
  };
  callback(null, results);
}

module.exports = {
  searchByBook: searchByBook,
  searchByTopic: searchByTopic,
  getAllScriptures: getAllScriptures,
  getScriptureById: getScriptureById,
  assignTopicToScripture: assignTopicToScripture
};
