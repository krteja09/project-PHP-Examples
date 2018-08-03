<?php

/**
 * Class Divider
 */
class Divider implements OperatorInterface{


    /**
     * @param integer $number
     * @param integer $result
     * @return integer
     */
    public function run($number, $result)
    {
        return $result / $number;
    }

}