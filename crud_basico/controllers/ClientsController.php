<?php
require_once('./models/Client.php');

class ClientsController
{
    private $model;

    function __construct()
    {
        $this->model = new ClientModel();
    }

    function list()
    {
        $resultData = $this->model->list();
        require_once('./views/lista.php');
    }

    function showForm()
    {
        require_once('./views/cadastro.php');
    }

    function storeReceivedData($data)
    {
        $this->model->receivedData($data);
        header("Location: /");
    }

    function deleteForm($data)
    {
        $id = $data['id'];
        $this->model->delete($id);
        header("Location: /");
    }

    function submitCompletedForm($data)
    {
        $id = $data['id'];
        $client = $this->model->find($id);
        require_once('./views/editar.php');
    }
    function editData($data)
    {

        $this->model->editingData($data);
        header("Location: /");
    }
}
