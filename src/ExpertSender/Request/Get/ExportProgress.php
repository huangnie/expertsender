<?php

namespace App\Extensions\ExpertSender\Request\Get;

use App\Extensions\ExpertSender\Request;

class ExportProgress extends Request
{
    protected $endPoint = '/Api/Exports';

    protected $responseEntity = 'App\\Extensions\\ExpertSender\\Response\\ExportProgressType';

    public function __construct($exportId)
    {
    	$exportId = intval($exportId);
        
        if (!$exportId) {
            throw new \InvalidArgumentException('export id must be an nor zero number');
        }

        $this->endPoint .= "/{$exportId}";
    }
}