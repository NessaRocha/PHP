<?php

namespace App\Http;

class Request
{
    /**
     * Método http que foi utilizado para criar a requisição get, post, put, delete
     * @var string
     */

    private $httpMethod;

    /**
     * URI da página: rota
     * @var string
     */
    private $uri;


    /**
     * Parâmetros da URL ($_GET), get da pagina
     * @var array
     */
    private $queryParams = [];

    /**
     * Varáveis recebidas no POST da página ($_POST)
     * @var array
     */
    private $postVars = [];

    /**
     * Cabeçalho de requisição
     * @var array
     */
    private $headers = [];

    /**
     * Construtor
     */
    public function __construct()
    {
        $this->queryParams = $_GET ?? ["Parâmetros da URL não existe"];
        $this->postVars = $_POST ?? ["Variáveis do post"];
        $this->headers = getallheaders();
        $this->httpMethod = $_SERVER['REQUEST_METHOD'] ?? 'Request_Method não existe';
        $this->uri = $_SERVER['REQUEST_URI'] ?? '';
    }

    /**
     * Método responsável por retornar o método HTTP
     * @return string
     */
    public function getHttpMethod()
    {
        return $this->httpMethod;
    }

    /**
     *Método responsável por retornar a URI da requisição
     * @return string 
     */
    public function getURI()
    {
        return $this->uri;
    }

    /**
     * Método responsável por retornar os headers da requisição
     * @return array
     */
    public function getheaders()
    {
        return $this->headers;
    }

    /**
     * Método responsável por retornar os parâmetros da URL
     * @return array
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * Método responsável por retornar as variáveis POST
     * @return array
     */
    public function getPostVars()
    {
        return $this->postVars;
    }
}
