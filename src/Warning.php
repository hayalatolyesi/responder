<?php

namespace Erdal\Responder;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/
class Warning implements IResponder{
    
    /**
    * 
    * For Response Messages
    *
    * $message string
    * 
    */
    public string $message;
    
    /** 
    * 
    * This Object, Identity Name
    *
    * CONST STATUS string
    * 
    */      
    CONST STATUS ="warning";
    
    /** 
    *
    *  @param string $message (Not null)
    *
    *  @param int $customCode (Not null)
    *
    *  @return void
    *
    */
    public function set(String $message, int $customCode):void{
        
        $this->message  =$message;

        $this->code         = $customCode;

        
    }
    
}