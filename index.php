<?php

include 'constants.php';

use App\Resource\RequestValidationResource;
use App\Utility\RoutesUtility;

// $request = new RequestValidationResource(RoutesUtility::getRoute());
$route = RoutesUtility::getRoute();
$request = self::ERROR_GENERIC;

if(in_array($route()->getRoute, self::MODULES, true) ) {
    switch ($route['module']) {
        case self::API:
            $request = new RequestValidationResource($routes);
            break;
        default:
            $request = self::ERROR_GENERIC;
            break;
    }
}


$request = $request->process();
var_dump($request);exit;



try {
    $request = new RequestValidationResource(RoutesUtility::getRoute());  
    $request = $request->process();
    var_dump($request);exit;
} catch (Exception $e) {
    // Criar um retorno JSON padrão Http
    return 'Error index - ' . $e->getMessage();
}


// public function teste()
// {
//     echo 'teste';
// }