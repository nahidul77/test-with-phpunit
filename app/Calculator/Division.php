<?php

namespace App\Calculator;
use App\Calculator\Exceptions\NoOperandException;

class Division extends OperationAbstruct implements OperationInterface
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
        
        return array_reduce($this->operands, function($a, $b){
            if($a !== null && $b !== null){
                return $a / $b;
            }

            return $b;
        }, null);
    }
}