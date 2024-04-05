<?php
namespace app\quizz\model;
class Question
{
    private $_text ="";
    public function __construct() {
        $this->_text = "";
    }
    public function getText()
    {
        return $this->_text;
    }
}