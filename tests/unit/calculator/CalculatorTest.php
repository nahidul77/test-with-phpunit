<?php 

class CalculatorTest extends \PHPUnit\Framework\TestCase 
{

    /** @test */
    public function can_set_single_operation()
    {
       $addition = new \App\Calculator\Addition;
       $addition->setOperands([5, 10]);

       $calculator = new \App\Calculator\Calculator;
       $calculator->setOperation($addition);

       $this->assertCount(1, $calculator->getOperations());
    }

    /** @test */
    public function can_set_multiple_operations()
    {
       $addition1 = new \App\Calculator\Addition;
       $addition1->setOperands([5, 10]);

       $addition2 = new \App\Calculator\Addition;
       $addition2->setOperands([2, 2]);

       $calculator = new \App\Calculator\Calculator;
       $calculator->setOperation($addition1, $addition2);

       $this->assertCount(2, $calculator->getOperations());
    }

    /** @test */
    public function operations_are_ignored_if_not_instance_of_operation_interface()
    {
       $addition = new \App\Calculator\Addition;
       $addition->setOperands([5, 10]);

       $calculator = new \App\Calculator\Calculator;
       $calculator->setOperations([$addition, 'cats', 'dogs']);

    
       $this->assertCount(2, $calculator->getOperations());
    }


}