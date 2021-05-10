<?php

 namespace App\Calculator;

 class Calculator
 {
    protected $operations = []; 
    
    public function setOperation(OperationInterface $operation)
     {
        $this->operations[] = $operation;
     }

     public function setOperations(array $operations)
     {
        $filterOperations = array_filter($operations, function($operation){
            return $operation instanceof OperationInterface;
        });
     }

     public function getOperations()
     {
         return $this->operations;
     }
 }