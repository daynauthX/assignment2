<?php
/**
 * @author Roland Daynauth 813005028
 *         Willis Estrada 808012999
 * 
 */

class Authenticate{
    private $authen;
    private $credentials;
    private $config;
    
    public function __construct(Credentials $credentials, Config $config) {
        $this->credentials = $credentials;
        $this->config = $config;      
        $this->authen = new SoapClient($this->config->getHost()."/AkiAppsServices/wsdl/IAuthentication");
    }
    
    public function authenUser(){
        return  $this->authen->authenticateUser($this->config->getLicence(), 
                $this->credentials->getUsername(), 
                $this->credentials->getPassword(), 'Applicant', 
                $this->credentials->getInstitution());
    }
}


