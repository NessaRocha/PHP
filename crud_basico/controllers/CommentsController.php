<?php
require_once('./models/Comment.php');

class CommentsController
{
    private $model;

    function __construct()
    {
        $this->model = new CommentModel();
    }


    function comments()
    {
        $arrComments = $this->model->listComment();
        require_once('./views/comentario.php');
    }

    function storeReceivedComment($data)
    {
        $this->model->receivedComments($data);
        header("Location: /comments");
    }

    function editComment($data)
    {
        $id = $data['id'];
        $objComment = $this->model->selectComment($id);
        require_once('./views/edit-comment.php');
    }
}
