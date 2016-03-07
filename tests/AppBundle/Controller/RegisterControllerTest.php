<?php

namespace Acme\Bundle\StareStoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RegisterControllerTest extends WebTestCase
{
    public function testRegisterUser()
    {
        $client = static::createClient();

        $crawler = $client->request('POST', '/register/user',array('nombre'=>'nombre','apellido'=>'apellido','correo'=>'correo@correo.com',
            'telefono'=>'12345678','nacimiento'=>'5/10/1990','password'=>'123'));

        $this->assertContains('completado', $client->getResponse()->getContent());
    }
}