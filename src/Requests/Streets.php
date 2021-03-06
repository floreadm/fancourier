<?php

namespace SeniorProgramming\Fancourier\Requests;

use SeniorProgramming\FanCourier\Core\Endpoint;

class Streets extends Endpoint{
    
    /**
     * 
     * @return string
     */
    protected function getCallMethod()
    {
        return 'export_strazi_integrat.php';
    }
    
    /**
     * 
     * @return string
     */
    public function fetchResults() 
    {
        return 'csv';
    }
    
    /**
     * 
     * @param array $params
     * @return boolean
     */
    public function validate($params)
    {
        if (empty($params)) 
            return true;
        
        parent::optionalParams(array_keys($params), ['judet', 'language', 'localitate']);
        return true;
    }
}


