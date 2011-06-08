<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace ZC\Entity;
/**
 * Description of UserTest
 *
 * @author jarek
 */
class UserTest extends \ModelTestCase {
    public function testCanCreateUser() {
        $this->assertInstanceOf('ZC\Entity\User', new User());
    }
}

