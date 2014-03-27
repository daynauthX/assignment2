<?php
/**
 * @author Roland Daynauth 813005028
 *         Willis Estrada 808012999
 * 
 */

class Config{
    private $host;
    private $licence;
    
    function __construct() {
        $this->host = 'http://64.28.139.185/';
        $this->licence = 'HEDUApps';
    }
    
    public function getHost(){
        return $this->host;
    }
    
    public function getLicence(){
        return $this->licence;
    }
}
