<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClassHasAttributeTest
 *
 * @author Olivier
 */

use PHPUnit\Framework\TestCase;
require_once '../model/Model.php';
require_once '../model/Media.php';

class ClassHasAttributeTest extends TestCase
{
    public function testFailure()
    {
        $this->assertClassHasAttribute('_mediaId', Media::class);
        $this->assertClassHasAttribute('_event', Media::class);
    }
}
