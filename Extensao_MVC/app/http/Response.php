<?php

namespace App\Http;

class Response
{

    /**
     * Código do status HTTP
     * @var integer
     * 
     */
    private $httpCode = 200;

    /**
     * Cabeçalho do response
     * @var array
     */
    private $headers = [];

    /**
     * Tipo de conteúdo que está sendo retornado
     * @var string
     */
    private $contentType = 'text/html';


    /**
     * Conteúdo do response
     * @var mixed
     */
    private $content;
    /**
     * @param integer $httpCode
     * @param mixed $content
     * @param string $contentType
     */

    public function __construct($httpCode, $content, $contentType = 'text/html')
    {
        $this->httpCode = $httpCode;
        $this->content = $content;
        $this->setContentType($contentType);
    }

    /**
     * Método responsável por alterar o contentType do response
     * @param string
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        $this->addHeader('content-Type', $contentType);
    }

    /**
     * Método responsável por adicionar um registro no cabeçalho de response
     * @param string $key
     * @param string $value
     */

    public function addHeader($key, $value)
    {
        $this->headers[$key] = $value;
    }
    /**
     * Método responsável por enviar os headers para o navegador
     */
    private function sendHeaders()
    {
        //Enviar o status
        http_response_code($this->httpCode);

        //Enviar headers da página
        foreach ($this->headers as $key => $value) {
            header($key . ':' . $value);
        }
    }
    /**
     * Método responsável por enviar a resposta para o usuário
     */
    public function sendResponse()
    {
        //Envia os headers
        $this->sendHeaders();

        //Imprime o conteúdo
        switch ($this->contentType) {
            case 'text/html':
                echo $this->content;
                exit;
        }
    }
}
