<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Produto
{

    /**
     * Identificador unico, nome, descricao, em estoque ou nao, data do cadastro
     * @var integer
     */
    public $id;
    public $nome;
    public $descricao;
    public $emestoque;
    public $data;

    /**
     * Metodo responsavel por cadastrar um novo produto no banco
     * @return boolean
     */

    public function cadastrar()
    {
        //Definir Data
        //String de formatacao de data
        $this->data = date('Y-m-d H:i:s');

        //Inserir e atribuir
        $obDatabase = new Database('produtos');
        $this->id = $obDatabase->insert([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'emestoque' => $this->emestoque,
            'data' => $this->data
        ]);

        //retornar sucesso
        return true;
    }

    /**
     * Metodo responsavel por atualizar um produto
     * @return boolean
     */

    public function atualizar()
    {
        return (new Database('produtos'))->update('id=' .$this->id, [
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'emestoque' => $this->emestoque,
            'data'      => $this->data
        ]);
    }
    /**
     * Metodo responsavel por excluir um produto do banco
     * @return boolean
     */
    public function excluir()
    {
        return (new Database('produtos'))->delete('id=' .$this->id);
    }
    /**
     * Metodo responsavel por obter os podutos do banco de dados
     * @param string $where
     * @param string $order
     * @param string $limit
     * @return array
     * 
     */
    public static function getProdutos($where = null, $order = null, $limit = null)
    {
        return (new Database('produtos'))->select($where, $order, $limit)
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }
    /**
     * Metodo responsavel por buscar um produto com base no ID
     * @param integer $id
     * @return Produto
     */
    public static function getProduto($id)
    {
        return (new Database('produtos'))->select('id = '. $id)
            ->fetchObject(self::class);
    }
}
