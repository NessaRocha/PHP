<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Cadastro extends Page
{

    public static function getCadastro()
    {
        //Criando uma nova instancia de Organization
        $obOrganization = new Organization;




        $content = View::render('pages/cadastro', [
            'name' => $obOrganization->name,
           

        ]);

        return parent::getPage('Cadastro', $content);
    }
}
