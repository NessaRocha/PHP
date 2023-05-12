<?php

namespace App\Db;

use \PDO;
use \PDOException;

class Database
{
    /**
     * Host de conexao com banco de dados, nome do banco, usuario, senha
     * @var string
     */
    const HOST = 'localhost';
    const NAME = 'projeto_mob';
    const USER = 'root';
    const PASS = '';
    /**
     * Nome da tabela a ser manipulada
     * @var string
     */
    private $produtos;
    /**
     * Instancia de conexao com banco de dados
     * @var PDO
     */
    private $connection;

    /**
     * Define a tabela e instancia e conexao
     * @param string $produtos
     */
    public function __construct($produtos = null)
    {
        $this->produtos = $produtos;
        $this->setConnection();
    }
    /**
     * Metodo responsavel por criar uma conexao com banco de dados
     * Observar aqui responsabilidade unica
     */
    private function setConnection()
    {
        try {
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('ERROR: '.$e->getMessage());
        }
    }

    /**Metodo responsavel por executar queries do banco de dados
     * @param string $query
     * @param array $params
     * @return PDOStartement
     */

    public function execute($query,$params = [])
    {
        try{
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        }catch(PDOException $e) {
            die('ERRO: '.$e->getMessage());
        }
    }

    /**Metodo responsavel por inserir dados no banco
     * @param array $value [field => value]
     * @return integer ID inserido
     */
    public function insert($values)
    {
        $fields = array_keys($values);
        $binds = array_pad([],count($fields),'?');

        $query = 'INSERT INTO '.$this->produtos.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';

        $this->execute($query,array_values($values));

        return $this->connection->lastInsertId();
    }

/**
 * Metodo responsavel por executar uma consulta no banco
 * @param string $where
 * @param string $order
 * @param string $limit
 * @param string $fields
 * @return PDOStatement
 */


    public function select($where = null, $order = null, $limit = null, $fields = '*')
    {
        $where = strlen($where) ? 'WHERE '.$where : '';
        $order = strlen($order) ? 'ORDER BY '.$order : '';
        $limit = strlen($limit) ? 'LIMIT '.$limit : '';

            //Monta a QUERY
        $query = 'SELECT '.$fields.' FROM '.$this->produtos.' '.$where.' '.$order.' '.$limit;

        //EXECUTA QUERY
        return $this->execute($query);
    }
/**
 * Metodo responsavel por executar atualizaçoes no banco de dados
 * @param string $where
 * @param array $values [ field => value ]
 * @return boolean
 */

    public function update($where, $values)
    {
        //Dados da QUERY
        $fields = array_keys($values);
        //monta QUERY
        $query = 'UPDATE '.$this->produtos.' SET '.implode('=?.',$fields).'=? WHERE '.$where;

        //executa QUERY
        $this->execute($query,array_values($values));
        //retorna SUCESSO
        return true;
    }

    /**
     * Metodo responsavel por excluir dados do banco
     * @param string $where
     * @return boolean
     */

    public function delete($where)
    {
        //MONTA QUERY
        $query = 'DELETE FROM '.$this->produtos.' WHERE '.$where;
        //EXECUTA QUERY
        $this->execute($query);
        //RETORNA SUCESSO
        return true;
    }
}
