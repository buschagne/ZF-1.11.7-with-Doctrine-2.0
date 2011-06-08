<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelTestCase
 *
 * @author jarek
 */
class ModelTestCase extends PHPUnit_Framework_TestCase {
    
    /**
     *
     * @var \Bisna\Application\Container\DoctrineContainer
     */
    protected $doctrineContainer;
    
    public function getClassMetas($path, $namespace) {
        $metas = array();
        if($handle = opendir($path)) {
            while(false !== ($file = readdir($handle))) {
                if(strstr($file, '.php')) {
                    list($class) = explode('.',$file);
                    $metas[] = $this->doctrineContainer->getEntityManager()->getClassMetadata($namespace . $class);
                }
            }
        }
        return $metas;
    }
    
    public function setUp() {
        global $application;
        $application->bootstrap();
        
        $this->doctrineContainer = Zend_Registry::get('doctrine');
        
        $tool = new \Doctrine\ORM\Tools\SchemaTool($this->doctrineContainer->getEntityManager());
        $tool->createSchema($this->getClassMetas(APPLICATION_PATH . '/../library/ZC/Entity', 'ZC\Entity\\'));
        
        parent::setUp();
    }
    
    public function tearDown() {
        parent::tearDown();
        
    }
    
}

