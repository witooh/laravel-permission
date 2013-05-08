<?php
namespace Witooh\Permission;

/**
 * Class Permission
 * @package Witooh\Permission
 *
 * @property string $name
 * @property array $access
 */
class Permission {

    protected $name;
    protected $access;

    function __construct(){
        $this->name = null;
        $this->access = array();
    }

    /**
     * @param string $name
     */
    public function setName($name){
        $this->name = $name;
    }

    /**
     * @param array $access
     */
    public function setAccess(array $access){
        $this->access = $access;
    }

    /**
     * @param string $access
     */
    public function addAccess($access){
        $this->access[] = $access;
    }

    /**
     * @param string $access
     * @return bool
     */
    public function can($access){
        return isset($this->access[$access]) ? true : false;
    }

    /**
     * @param string $name
     * @return bool
     */
    public function is($name){
        return $this->name == $name ? true : false;
    }

    /**
     * @return array
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

}