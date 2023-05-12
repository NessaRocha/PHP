<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

/**
 * Método responsável de retornar o conteudo (view)da pagina generica
 * Nao deve retornar o conteúdo (apenas teste aqui)
 * @return string
 */
class  Page
{

    private static function getHeader()
    {
        return View::render('pages/header');
    }
    /**
     * Metodo responsavel por renderizar o footer da pagina
     * @return string
     */
    private static function getFooter()
    {
        return View::render('pages/footer');
    }

   

    //criando uma nova instancia do organization
    public static function getPage($title, $content)
    {
        $obOrganization = new Organization;


        return View::render('pages/page', [
            'title' => $title,
            'header' => self::getHeader(),
            'content' => $content,
            'footer' => self::getFooter()

        ]);
    }
}
