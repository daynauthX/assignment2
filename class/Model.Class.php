<?php
/**
 * @author Roland Daynauth 813005028
 *         Willis Estrada 808012999
 * 
 */
class Model{
    private $app;
    private $token;
    private $appid;
    private $credentials;
    private $configuration;
    private $properties;
    private $countries;
       
    function __construct(Config $config, Credentials $credentials, $token){
        $this->config = $config;
        $this->token = $token;
        $this->credentials = $credentials;
        $this->app = new SoapClient($config->getHost(). "/AkiAppsServices/wsdl/IApplication");
        $this->appid = $this->app->getApplicationID($this->token, 
                $this->credentials->getUsername(), $this->credentials->getInstitution());       
        $this->configuration = new Configuration($this->config, $this->credentials, $this->token);
        $this->properties = array();
        $this->setProperties();
    }

    private function setProperties(){
        $this->properties['subjects'] = $this->app->getApplicantSubjects($this->token, $this->appid);
        $this->properties['details'] = $this->app->getApplicantDetails($this->token, $this->appid);
        $this->properties['basedata'] = $this->app->getApplicantBaseData($this->token, $this->appid);
        $this->properties['address'] = $this->app->getApplicantAddressData($this->token, $this->appid);
        $this->properties['emergency'] = $this->app->getApplicantEmergencyData($this->token, $this->appid);
        $this->properties['medical'] = $this->app->getApplicantMedData($this->token, $this->appid);
        $this->properties['work'] = $this->app->getApplicantWorkExperiences($this->token, $this->appid);
        $this->properties['school'] = $this->app->getApplicantSchools($this->token, $this->appid);
        $this->properties['program'] = $this->app->getApplicantPrograms($this->token, $this->appid);
    }
    
    public function __get($arg){
        return isset($this->properties[$arg]) ? $this->properties[$arg] : '';
    }
    
    public function Country($code){
        foreach ($this->configuration->countries->countries as $country){
            if ($code === $country->Code) {
                return $country->Description;
            }
        }
        return '';
    }
    
    public function Immigration($code){
        foreach ($this->configuration->immigration->immigrationcodes as $immigration){
            if ($code === $immigration->Code) {
                return $immigration->Name;
            }
        }
        return '';
    }
    
     public function SchoolList($code){
        foreach ($this->configuration->schools->schools as $schools){
            if ($code === $schools->Code) {
                return $schools->Name;
            }
        }
        return '';
    }
    
    public function Priorities($code){
        foreach ($this->configuration->priorities->prioritycodes as $priorities){
            if ($code === $priorities->Code) {
                return $priorities->Name;
            }
        }
        return '';        
    } 
    
    public function Parish($code){
        foreach ($this->configuration->parish->parishes as $parishes){
            if ($code === $parishes->Code) {
                return $parishes->ParishName;
            }
        }
        return '';         
    }
}


