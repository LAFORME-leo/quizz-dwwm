<?php
use PHPUnit\Framework\TestCase;
use app\quizz\model\Response;
class ResponseTest extends TestCase

{
    public function test_1()
    {
        $reponse = new Response();
        $this->assertSame(false, $reponse->IsValid());
    }
    public function test_2()
    {
        $reponse = new Response();
        $this->assertSame(false, $reponse->IsValid());
    }

}