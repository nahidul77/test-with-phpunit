<?php 

class UserTest extends \PHPUnit\Framework\TestCase 
{

    protected $user;
    
    public function setUp():void
    {
       $this->user =  new App\models\User;
    }
    
    public function testThatWeCanGetTheFirstName()
    {
       
       $this->user->setFirstName('Alfred');

       $this->assertEquals($this->user->getFirstName(), 'Alfred');
    }

    public function testThatWeCanGetTheLastName()
    {
 
        $this->user->setLastName('Hogg');
 
        $this->assertEquals($this->user->getLastName(), 'Hogg');
     }

     public function testFullNameIsReturned()
     {

        $this->user->setFirstName('Nahidul');

        $this->user->setLastName('Islam');

        $this->assertEquals($this->user->getFullName(), 'Nahidul Islam');
     }

     public function testFirstAndLastNameAreTrimmed()
     {

         $this->user->setFirstName('  Billy     ');

         $this->user->setLastName('Garret   ');

         $this->assertEquals($this->user->getFullName(), 'Billy Garret');
     }

     public function testEmailAddressCanBeSet()
     {
         $this->user->setEmail('harrycane@gmail.com');

         $this->assertEquals($this->user->getEmail(), 'harrycane@gmail.com');
     }

     public function testEmailVariablesContainCorrectValues()
     {

         $this->user->setFirstName('Harry');
         $this->user->setLastName('Kane');
         $this->user->setEmail('harrykane@gmail.com');

         $emailVariables = $this->user->getEmailVariables();

         $this->assertArrayHasKey('full_name', $emailVariables);
         $this->assertArrayHasKey('email', $emailVariables);

         $this->assertEquals($this->user->getFullName(), $emailVariables['full_name']);
         $this->assertEquals($this->user->getEmail(), $emailVariables['email']);
     }


}