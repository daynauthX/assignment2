<?php
/**
 * @author Roland Daynauth 813005028
 *         Willis Estrada 808012999
 * 
 */

class View{
    private $template;
    private $model;
    
    public function __construct($model = null) {
       $this->model = $model;
       $this->template = 'template/report.php';
    }
    
    public function render(){
        include $this->template;
    }
}

