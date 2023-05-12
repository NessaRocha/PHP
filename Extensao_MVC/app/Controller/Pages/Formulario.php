<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;



class Formulario extends Page
{

    public static function getFormulario()
    {
        //Criando uma nova instancia de Organization
        $obOrganization = new Organization;




        $content = View::render('pages/formulario', [
            'name' => $obOrganization->name,
            

        ]);

        return parent::getPage('Formulario', $content);
    }
}
