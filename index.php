<?php

include 'include.php';

use App\Resource\RequestValidationResource;
use Route\Routes;
use App\Utility\JsonUtility;

$route = new Routes();
$request = ERROR_ROUTE;

if(in_array($route->getRoute(), ROUTES, true) ) {

    switch ($route->getRoute()) {
        case API:
            $request = (new RequestValidationResource($route))->process();
            break;
        default:
            $request = ERROR_GENERIC;
            break;
    }
}

(new JsonUtility())->processReturnJson($request);