<?php

interface OperatorInterface
{


    /**
     * @param integer $number
     * @param integer $result
     * @return integer | float
     */
    public function run($number, $result);
}
