<?php 

class UserTest extends \PHPUnit\Framework\TestCase 
{

    public function testThatWeCanGetTheFirstName()
    {
       
        $user = new App\models\User;

       $user->setFirstName('Alfred');

       $this->assertEquals($user->getFirstName(), 'Alfred');
    }

    public function testThatWeCanGetTheLastName()
    {
        
        $user = new App\models\User;
 
        $user->setLastName('Hogg');
 
        $this->assertEquals($user->getLastName(), 'Hogg');
     }

     public function testFullNameIsReturned()
     {
         
        $user = new App\models\User;

        $user->setFirstName('Nahidul');

        $user->setLastName('Islam');

        $this->assertEquals($user->getFullName(), 'Nahidul Islam');
     }

     public function testFirstAndLastNameAreTrimmed()
     {
         $user = new App\models\User;

         $user->setFirstName('  Billy     ');

         $user->setLastName('Garret   ');

         $this->assertEquals($user->getFullName(), 'Billy Garret');
     }

     public function testEmailAddressCanBeSet()
     {
         $user = new App\models\User;

         $user->setEmail('harrycane@gmail.com');

         $this->assertEquals($user->getEmail(), 'harrycane@gmail.com');
     }

     public function testEmailVariablesContainCorrectValues()
     {
         $user = new App\models\User;

         $user->setFirstName('Harry');
         $user->setLastName('Kane');
         $user->setEmail('harrykane@gmail.com');

         $emailVariables = $user->getEmailVariables();

         $this->assertArrayHasKey('full_name', $emailVariables);
         $this->assertArrayHasKey('email', $emailVariables);

         $this->assertEquals($user->getFullName(), $emailVariables['full_name']);
         $this->assertEquals($user->getEmail(), $emailVariables['email']);
     }


}