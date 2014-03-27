<?php
/**
 * @author Roland Daynauth 813005028
 *         Willis Estrada 808012999
 * 
 */

class Configuration{
    private $app;    
    private $properties;
    
            
    function __construct(Config $config, Credentials $credentials, $token) {
        $this->app = new SoapClient($config->getHost(). "/AkiAppsServices/wsdl/IConfiguration");
        $this->properties = array();
        $this->properties['countries'] = $this->app->getCountries($token);
        $this->properties['immigration'] = $this->app->getImmigrationCodes($token);
        $this->properties['schools'] = $this->app->getSchools($token);
        $this->properties['priorities'] = $this->app->getPriorities($token, $credentials->getInstitution());
        $this->properties['parish'] = $this->app->getParishes($token);
    }
    
    public function __get($arg){
        return $this->properties[$arg];
    }
}

