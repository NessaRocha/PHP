<?php

/**
 * Classe para gerenciar views
 * Métodos que serão responsaveis por renderizar views
 * Ex.: conteudos dinamicos (usuarios conectados, dados do banco)
 */

namespace App\Utils;

class View
{
    /**
     * variaveis padroes
     * @var array
     * precisa concatenar com os dados recebidos
     * 
     */
    private static $vars = [];

    /**
     * @param array
     * 
     */
    public static function init($varsRec = [])
    {
        self::$vars = $varsRec;
    }
    /**
     * Metodo responsavel por retornar o conteudo de uma view, se existir
     */
    private static function getContentView($view)
    {
        $file = __DIR__ . '/../../resources/view/' . $view . '.php';
        return file_exists($file) ? file_get_contents($file) : 'Não existe';
    }

    /**
     * Metodo responsavel por retornar o conteudo renderizado de uma view
     * @param string
     * @param array
     * @return string
     * 
     */
    //Conteudo da view
    public static function render($view, $vars = [])
    {
        //Conteudo da view
        $contentView = self::getContentView($view);

        /**
         * array_merge e uma funcao embutida no PHP usada para mesclar dois oumais arrays num unico array. Usada para mesclar os elementos ou valores de duas ou mais matrizes em uma unica matriz.
         * Mescla de variaveis de View
         */
        $vars = array_merge(self::$vars, $vars);

        //Chaves dos arrays de variaveis
        $keys = array_keys($vars);
        $keys = array_map(function ($item) {
            return '{{' . $item . '}}';
        }, $keys);

        //Retorna o conteudo renderizado
        return str_replace($keys, array_values($vars), $contentView);


      
    }
}
