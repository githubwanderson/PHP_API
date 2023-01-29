<?php

include 'constants.php';

use App\Resource\RequestValidationResource;
use App\Utility\RoutesUtility;

try {
    $request = new RequestValidationResource(RoutesUtility::getRoute());
    $request = $request->process();
} catch (Exception $e) {
    // Criar um retorno JSON padrão Http
    return 'Error index - ' . $e->getMessage();
}




// public function teste()
// {
//     echo 'teste';
// }