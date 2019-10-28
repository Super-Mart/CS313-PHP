const http = require('http');

const hostname = '127.0.0.1';
const port = 3000;

const fs = require('fs');
let jsonObj;
let jsonArr;

const server = http.createServer((req, res) => {
    switch (req.url) {
        case '/home':
            res.setHeader('Content-Type', 'text/plain');
            res.writeHead(200, {
                "Content-Type": "text/html"
            });
            res.write("<style type='text/css'>*{ text-align: center; background-color: #ccc;}</style>");
            res.write("<h1>Welcome to the Home Page!</h1>");
            res.end();
            break;
        case '/getData':
            jsonObj = fs.readFileSync('cs313.json');
            jsonArr = JSON.parse(jsonObj);
            res.setHeader('Content-Type', 'application/json');
            res.writeHead(200, {
                "Content-Type": "text/html"
            });
            res.write("<p> Data for this class:</p>\n<h1>Professor: " + jsonArr.name + "</h1>\n<h2>Class: " + jsonArr.class + "</h2>\n<h3>Semester: " + jsonArr.semester + '-' + jsonArr.year + "</h3>");
            res.write("<style type='text/css'>*{ text-align: center; background-color: #ccc;}</style>");
            res.end();
            break;
        case '/':
            res.setHeader('Content-Type', 'text/plain');
            res.writeHead(200, {
                "Content-Type": "text/html"
            });
            res.write("<style type='text/css'>*{ text-align: center; background-color: #ccc;}</style>");
            res.write("<h1>Hello World!</h1>");
            res.end();
            break;
        default:
            res.writeHead(404, {
                "Content-Type": "text/html"
            });
            res.write('404: Page Not Found');
            res.end();
    }

});

server.listen(port, hostname, () => {
    console.log(`Server running at http://${hostname}:${port}/`);
});