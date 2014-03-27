<?php
/**
 * @author Roland Daynauth 813005028
 *         Willis Estrada 808012999
 * 
 */

class Credentials{
    private $username;
    private $password;
    private $institution;
    
    public function __construct() {
        $this->username = 'd1@hotmail.com';
        $this->password = 'd1';
        $this->institution = 'SJPP';
    }
    
    public function getUsername(){
        return $this->username;
    }
    
    public function getPassword(){
        return $this->password;
    }
    
    public function getInstitution(){
        return $this->institution;
    }
}

