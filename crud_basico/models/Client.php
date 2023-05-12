<!-- consultas regras de negócio -->
<?php

require_once('./configuration/Connect.php');

class ClientModel extends Connect
{
    private $table;

    function __construct()
    {
        parent::__construct();
        $this->table = 'clients';
    }

    function list()
    {
        $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
        $resultQuery = $sqlSelect->fetchAll();
        return $resultQuery;
    }

    function find($id) //retorna uma unica linha do banco de dados
    {
        $query = $this->connection->query("SELECT * FROM $this->table WHERE id=$id");
        return $query->fetch();
    }

    function receivedData($data)
    {
        $name = $data['nome'];
        $email = $data['email'];
        $phone = $data['telefone'];

        $this->connection->query("INSERT INTO $this->table (name, email, phone) VALUES ('$name', '$email', '$phone')");
    }

    function delete($id)
    {
        $this->connection->query("DELETE FROM $this->table WHERE id=$id");
    }

    function editingData($data)
    {
        $id = $data['id'];
        $name = $data['nome'];
        $email = $data['email'];
        $phone = $data['telefone'];

        $this->connection->query("UPDATE $this->table SET name='$name', email='$email', phone='$phone' WHERE id=$id");
    }
}

?>