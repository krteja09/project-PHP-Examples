<?php

class Calculator
{

    /**
     * @var integer
     */
    public $result;

    /**
     * @var integer
     */
    public $operation;

    /**
     * @param OperatorInterface $operation
     */
    public function setOperation(OperatorInterface $operation)
    {
        $this->operation = $operation;
    }

    /**
     * This function will calculate the result
     */
    public function calculate()
    {
        foreach (func_get_args() as $number) {
            $this->result = $this->operation->run($number, $this->result);
        }
    }

    /**
     * @return integer | float
     */
    public function getResult()
    {
        return $this->result;
    }
}
