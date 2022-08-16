const express = require("express");
const router = express.Router();
const mongoose = require("mongoose");

let databaseConnection = "Esperando resposta do banco de dados...";

router.get("/", function (req, res, next) {
    res.send(databaseConnection);
});

// Conectando com o mongoDB
mongoose.connect(
    "mongodb://localhost:27017/test",
    {
        useNewUrlParser: true
    }
);

// Se houver erro com a conexao
mongoose.connection.on("error", error => {
    console.log("Erro: ", error);
    databaseConnection = "Erro ao conectar ao banco de dados!";
});

// Se houver sucesso com a conexao
mongoose.connection.once("open", () => {
    console.log("Conexão concluida com sucesso!");
    databaseConnection = "Conectado ao banco de dados";
});
module.exports = router;