<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page
{

    public static function getHome()
    {
        //Criando uma nova instancia de Organization
        $obOrganization = new Organization;




        $content = View::render('pages/home', [
            'name' => $obOrganization->name,
          

        ]);

        return parent::getPage('Home', $content);
    }
}