let express = require("express");
let app = express();

app.get("/", function (req, res) {
  res.send("MainPage");
});

app.get("/testing", function (req, res) {
  res.send("Testing another Route");
});

app.listen(3000, function () {
  console.log("The application is working on the port 3000");
});
