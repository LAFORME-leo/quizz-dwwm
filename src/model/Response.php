<?php
namespace app\quizz\model;
class Response
{
    public bool $_isValid = false;
    
  
    public function __construct()
    {
        $this->_isValid;
    }

    public function IsValid():bool
    {
        return $this->_isValid;
    }
}
