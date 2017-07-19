<?php

use PHPUnit\Framework\TestCase;

require_once '../controller/autoload.php';

/**
 * @covers Parametres
 */
final class Test extends TestCase
{

    public function testParamSlogan()
    {
        $settings = new Settings();
        $this->assertEquals(
                $settings->getSlogan(), 'Partagez vos photos sur ce spot tout au long de la soirée !'
        );
    }

    public function testParamEvenement()
    {
        $settings = new Settings();
        $this->assertEquals(
                $settings->getEvent(), "Saisissez ici le nom de l'événement !"
        );
    }

    public function testParamMdp()
    {
     $settings = new Settings();
        $this->assertTrue(password_verify('admin', $settings->getPwd())
        );
    }

}
