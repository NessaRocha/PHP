<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Respostas extends Page
{

    public static function getRespostas()
    {
        //Criando uma nova instancia de Organization
        $obOrganization = new Organization;




        $content = View::render('pages/respostas', [
            'name' => $obOrganization->name,
          

        ]);

        return parent::getPage('Respostas', $content);
    }
}