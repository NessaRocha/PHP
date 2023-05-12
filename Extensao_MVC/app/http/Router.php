<?php

namespace App\Http;

use \Closure;
use \Exception;
use \ReflectionFunction;


/**
 * Roteador, vai geranciar as rotas
 */
class Router
{
    /**
     * URL completa do projeto (raiz)
     * @var string
     */
    private $url = '';


    /**
     * Definir o que é comum em todas as rotas
     * prefixo de todas as rotas
     * @var string
     */
    private $prefix = '';

    /**
     * Índice de rotas
     * @var array
     */
    private $routes = [];
    /**
     * Instancia request
     * @var request
     */
    private $request;
    /**
     * Método responsável por iniciar a classe
     * @param string $url
     */
    public function __construct($url)
    {
        $this->request = new Request();
        $this->url = $url;
        $this->setPrefix();
    }
    /**
     * Método responsável por definir prefixo das rotas
     */
    private function setPrefix()
    {
        //Informações da url atual
        //O que é prefixo?
        $parseUrl = parse_url($this->url);

        //Define o prefixo
        $this->prefix = $parseUrl['path'] ?? '';
    }
    /**
     * Método responsável por adicionar uma rota na classe
     * @param string $method
     * @param string $route
     * @param array $params
     */
    private function addRoute($method, $route, $params = [])
    {
        //Validação dos parâmetros
        foreach ($params as $key => $value) {
            if ($value instanceof Closure) {
                $params['controller'] = $value;
                unset($params[$key]);
                continue;
            }
        }

        //variaveis de rota
        $params['variables'] = [];

        //Padrão de validação das variaveis das rotas
        //Duas barras p definir constante expressão
        //Parenteses p criar grupo
        //Tudo q estiver entre chaves será "pego"
        $patternVariable = '/{(.*?)}/';

        if (preg_match_all($patternVariable, $route, $matches)) {
            //route recebe a variavel padrao, conteudo da posicao e rota
            $route = preg_replace($patternVariable, '(.*?)', $route);
            //definir as variaveis encontradas, a posicao 0 esta com chaves
            $params['variables'] = $matches[1];
        }

        //Expressão regular para validar a rota
        //Padrão para validar a URL
        $patternRoute = '/^' . str_replace('/', '\/', $route) . '$/';

        //Adiciona a rota dentro da classe
        $this->routes[$patternRoute][$method] = $params;
    }

    //MÉTODOS QUE DEFINEM ROTAS
    /**
     * Método responsável por definir uma rota de GET
     * @param string
     * @param array
     */
    public function get($router, $params = [])
    {
        return $this->addRoute('GET', $router, $params);
    }
    /**
     * Método responsável por definir uma rota de POST
     * @param string $route
     * @param array $params
     */
    public function post($router, $params = [])
    {
        return $this->addRoute('POST', $router, $params);
    }

    /**
     * Método responsavel por definir uma rota de PUT
     *@param string $reute
     *@param array $params
     */
    public function put($router, $params = [])
    {
        return $this->addRoute('PUT', $router, $params);
    }
    /**
     * Metodo responsavel por definir rota de DELETE
     * @param string $reute
     *@param array $params
     */
    public function delete($router, $params = [])
    {
        return $this->addRoute('DELETE', $router, $params);
    }
    /**
     * Método responsável por retornar a uri desconsiderando o prefixo
     * @return string
     */
    private function getUri()
    {
        //Uri da request
        $uri = $this->request->getUri();

        //Separa a uri com prefixo
        $xUri = strlen($this->prefix) ? explode($this->prefix, $uri) : [$uri];

        //Retorna a URI sem prefixo
        return end($xUri);
    }
    /**
     * Metodo responsavel por tornar os dados atual
     * @return array
     */
    private function getRoute()
    {
        //Uri
        $uri = $this->getUri();

        //
        $httpMethod = $this->request->getHttpMethod();

        //Valida as rotas
        foreach ($this->routes as $patternRoute => $methods) {

            //Verifica a uri com o padrao
            if (preg_match($patternRoute, $uri, $matches)) {

                //verifica o metodo
                if (isset($methods[$httpMethod])) {
                    //remove a primeira posicao
                    unset($matches[0]);
                    //variaveis processadas
                    $keys = $methods[$httpMethod]['variables'];
                    $methods[$httpMethod]['variables'] = array_combine($keys, $matches);
                    $methods[$httpMethod]['variables']['request'] = $this->request;

                    //retorno dos parametros da rota
                    return $methods[$httpMethod];
                }
                //Metodo nao permitido
                throw new Exception("Método não permitido, 405");
            }
        }
        //URL não encontrada
        throw new Exception("URL não encontrada", 404);
    }
    /**
     * Metodo para executar o gerenciador
     * Executar a rota atual
     * @return Response
     */

    public function run()
    {
        try {
            //Obtém a rota atual
            $route = $this->getRoute();

            //Verifica o controlador
            if (!isset($route['controller'])) {
                throw new Exception("URL não pode ser processada", 500);
            }
            //Argumentos da função
            $args = [];

            //reflection
            $reflection = new ReflectionFunction($route['controller']);
            foreach ($reflection->getParameters() as $parameter) {
                $name = $parameter->getName();
                $args[$name] = $route['variables'][$name] ?? '';
            }


            //Retorna a execução da funçao
            return call_user_func_array($route['controller'], $args);
        } catch (Exception $e) {
            return new Response($e->getCode(), $e->getMessage());
        }
    }
}
