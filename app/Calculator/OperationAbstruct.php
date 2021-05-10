<?php
namespace App\Calculator;

abstract class OperationAbstruct
{
     protected $operands;

     public function setOperands(array $operands)
     {
         $this->operands = $operands;
     }
}