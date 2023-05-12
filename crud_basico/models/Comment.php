<?php
require_once('./configuration/Connect.php');

class CommentModel extends Connect
{
    private $table;

    function __construct()
    {
        parent::__construct();
        $this->table = 'comments';
    }

    function listComment()
    {
        $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
        $resultQuery = $sqlSelect->fetchAll(); // array de objeto - lista com varios objetos dentro
        return $resultQuery;
    }

    function find($id) //retorna uma unica linha do banco de dados
    {
        $query = $this->connection->query("SELECT * FROM $this->table WHERE id=$id");
        return $query->fetch(); //objeto - unica informacao com varios valores
    }



    function receivedComments($data)
    {
        $name = $data['nome'];
        $cidade = $data['cidade'];
        $text = $data['comentario'];

        $this->connection->query("INSERT INTO $this->table (name, cidade, text) VALUES ('$name', '$cidade', '$text')");
    }

    function selectComment($id)
    {
        $query = $this->connection->query("SELECT * FROM $this->table WHERE id=$id");
        $object = $query->fetch();
        return $object;
    }
}
