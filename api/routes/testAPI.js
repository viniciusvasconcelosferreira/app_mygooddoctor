var express = require("express");
var router = express.Router();

router.get("/", function (req, res, next) {
    res.send("API está funcionando corretamente.");
});

module.exports = router;