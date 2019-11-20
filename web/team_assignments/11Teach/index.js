const express = require("express");
const path = require("path");
const app = express();
const PORT = process.env.PORT || 5000;

// Import
const topicController = require("./controllers/topicController");
const scriptureController = require("./controllers/scriptureController");

// express()
app.use(express.static(path.join(__dirname, "public")));

// Middleware
// Support json encoded bodies
app.use(express.json());
// Support url encoded bodies
app.use(express.urlencoded({ extended: true }));
// Get all topics
app.get("/topics", topicController.getTopicList);
// Get a single topic by id
app.get("/topic", topicController.getTopic);
// Post a new topic
app.post("/topic", topicController.postTopic);
// Search
app.get("/search", scriptureController.search);
app.get("/scriptures", scriptureController.getScriptureList);
app.get("/scripture", scriptureController.getScripture);
app.post("/scripture", scriptureController.postScripture);
app.post("/assignTopic", scriptureController.assignTopicToScripture);

// app.set("views", path.join(__dirname, "views"));
// app.set("view engine", "ejs");
// app.get("/", (req, res) => res.render("pages/index"));

app.listen(PORT, () => console.log(`Listening on ${PORT}`));
