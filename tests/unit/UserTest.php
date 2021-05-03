<?php 

class UserTest extends \PHPUnit\Framework\TestCase 
{

    public function testThatWeCanGetTheFirstName(){
       
        $user = new App\models\User;

       $user->setFirstName('Alfred');

       $this->assertEquals($user->getFirstName(), 'Alfred');
    }

    public function testThatWeCanGetTheLastName(){
        
        $user = new App\models\User;
 
        $user->setLastName('Hogg');
 
        $this->assertEquals($user->getLastName(), 'Hogg');
     }
}