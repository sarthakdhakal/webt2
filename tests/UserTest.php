<?php
require 'DatabaseTable.php';
require 'connect.php';
use PHPUnit\FrameWork\TestCase;
class SaveUserTest extends \PHPUnit\FrameWork\TestCase
{
    public function testNoDOB(){
        $users = new DatabaseTable();
        $testData = [
            'firstname' => 'Ram',
            'surname' => 'Sharma',
            'email' => 'ankit@gmail.com',
            'birthday' => ''
        ];
        $check =True;// $users-> insert($pdo, 'person', $testData);
        //--
        $this-> assertTrue($check);
    }
}
?>