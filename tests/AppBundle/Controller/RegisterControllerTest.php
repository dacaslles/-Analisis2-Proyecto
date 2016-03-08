<?php

namespace Acme\Bundle\StareStoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RegisterControllerTest extends WebTestCase
{
    public function testRegisterUser()
    {
        $client = static::createClient();

        $crawler = $client->request('POST', '/register/user',array('nombre'=>'nombre','apellido'=>'apellido','correo'=>'correo@testuser.com',
            'telefono'=>'12345678','nacimiento'=>'5/10/1990','password'=>'123'));

        $this->assertContains('completado', $client->getResponse()->getContent());
    }

    public function testRegisterOwner()
    {
        $client = static::createClient();

        $crawler = $client->request('POST', '/register/owner',array('nombre'=>'nombre','apellido'=>'apellido','correo'=>'correo@testowner.com',
            'telefono'=>'12345678','movil'=>'12345678','nacimiento'=>'5/10/1990','password'=>'123'));

        $this->assertContains('completado', $client->getResponse()->getContent());   
    }

    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('POST', '/login/user',array('correo'=>'correo@testuser.com','password'=>'123'));

        $this->assertContains('Bienvenido', $client->getResponse()->getContent());   
    }

    public function testRegisterUserOut()
    {
        $mysqli = new \mysqli('localhost','root','david','StarStores');

        if ($mysqli->connect_errno) {
            echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }

        if (!$mysqli->query('CALL delete_last_user()')) {
            echo "Falló CALL: (" . $mysqli->errno . ") " . $mysqli->error;
        }
    }
}