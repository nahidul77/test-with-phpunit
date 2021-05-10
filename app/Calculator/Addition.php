<?php

namespace App\Calculator;
use App\Calculator\Exceptions\NoOperandException;

class Addition implements OperationInterface
{
    protected $operands;
    
    public function setOperands(array $operands)
    {
        $this->operands = $operands;
    }

    public function calculate()
    {
        if(count($this->operands) === 0){
            throw new NoOperandException;
        }
        
        return array_sum($this->operands);
    }
}