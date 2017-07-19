<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use PHPUnit\Framework\TestCase;

class DirectoryExistsTest extends TestCase
{
    public function testPictureDir()
    {
        $this->assertDirectoryExists('../data/picture');
    }
       public function testThumbDir()
    {
        $this->assertDirectoryExists('../data/thumbnail');
    }
       public function testBackDir()
    {
        $this->assertDirectoryExists('../data/backup');
    }
}