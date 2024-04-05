<?php
namespace app\quizz\model;


class Quizz
{
    

    
//     public function __construct( private string $pTitle = "o") {
//         $this->_title = $pTitle;
//     }
//  public function getTitle()
//     {
//         return $this-> _title;
//     }
private string $_title;
private QuestionCollection $_questions;
public function __construct(string $title = 'No title choosen') {
    $this->_title = $title;
    $this->_questions = new QuestionCollection();
}
public function getTitle():string
{
    return $this->_title;
}

public function addQuestion(Question $question):void
{
    $this->_questions[]=$question;
}

public function getQuestions():QuestionCollection
{
    return $this->_questions;
}

public static function create($pJsonObject) :Quizz
{
    
}


}