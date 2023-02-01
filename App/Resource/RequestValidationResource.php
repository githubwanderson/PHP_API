<?php

namespace App\Resource;

use App\Utility\ConstantsUtility;
use Route\Routes;

class RequestValidationResource
{   
    private Routes $request;
    private $dataPost;
    
    public function __construct(Routes $request)
    {
        $this->request = $request;
    }
    
    /**
     * Responsável por validar method de entrada com methods aceitos
     * @return get()|post()|false
     */
    public function process()
    {
        $return = ConstantsUtility::ERROR_TYPE_REQUEST;
        if(in_array($this->request->getMethod(), ConstantsUtility::TYPE_REQUEST, true) ) {
            
            $return = $this->validationTokenRequest();
            if($return !== true){
                return $return; 
            }

            $method = strtolower($this->request->getMethod());
            $return = $this->$method();
        }
        return $return;
    }

    /**
     * Tratamento tipo get
     * @return Json|String|false
     */   
    public function get()
    {
        $return = ConstantsUtility::ERROR_TYPE_ROUTE;
        if(in_array($this->request->getResource(), ConstantsUtility::METHOD_GET, true)) {
            switch ($this->request->getResource()) {
                case ConstantsUtility::PRODUCT:
                    $return = (new ProductResource())->getProduct($this->request->getId());
                    break;
                case ConstantsUtility::ORDER:
                    $return = (new OrderResource())->getOrder($this->request->getId()); 
                    break;                
                default:
                    $return = ConstantsUtility::ERROR_TYPE_ROUTE;
                    break;
            }
        }
        return $return;
    }

    /**
     * Tratamento tipo post
     * @return Json|String|false
     */
    public function post()
    {      
        $return = ConstantsUtility::ERROR_TYPE_REQUEST;
        if(in_array($this->request->getResource(), ConstantsUtility::METHOD_POST, true)) {   
            if($this->validationDataPost()) {
                switch ($this->request->getResource()) {           
                    case ConstantsUtility::ORDER:
                        $return = (new OrderResource())->setOrder($this->dataPost);
                        break;                
                    default:
                        $return = ConstantsUtility::ERROR_TYPE_ROUTE;
                        break;
                }
            } else {
                $return = ConstantsUtility::ERROR_POST_DATA;
            }            
        }
        return $return;         
    }

    /**
     * Solicita a validação do Token
     * @return boolean
     */
    private function validationTokenRequest()
    {
        return (new TokenResource())->validation();
    }

    /**
     * Valida se ha conteudo em $_POST 
     * @return boolean
     */
    private function validationDataPost()
    {
        $return = false;
        $this->dataPost = file_get_contents('php://input');

        if($this->dataPost != null) {
            $this->dataPost = json_decode($this->dataPost,true,512, JSON_THROW_ON_ERROR); 
            // if($this->dataPost != null) {
            //     $return = true;
            // }
            if (is_array($this->dataPost) && count($this->dataPost) > 0) {
                $return = true;
            }
        }
        return $return;        
    }
}