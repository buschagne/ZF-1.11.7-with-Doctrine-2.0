<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace ZC\Entity;
/**
 * 
 * @Table(name="users")
 * @Entity
 * @author jarek
 */
class User {
    /**
     *
     * @var integer $id
     * @Column(name="id", type="integer",nullable=false)
     * @Id
     * @GenerateValue(strategy="IDENTITY") 
     */
    private $id;
    
    /**
     *
     * @Column(type="string", length=60, nullable=true)
     * @var string
     */
    private $firstname;
    
     /**
     *
     * @Column(type="string", length=60, nullable=true)
     * @var string
     */
    private $secondname;

}

?>
