<?php

/**
 * Class searchReplace
 */
class searchReplace
{

    /**
     * @param string $text
     * @param string $searchFor
     * @param string $replaceWith
     * @return string
     */
    public function run($text, $searchFor, $replaceWith)
    {
        $offset = 0;

        if (isset($text) && isset($searchFor) && isset($replaceWith)) {

            $searchLength = strlen($searchFor);

            if (!empty($text) && !empty($searchFor) && !empty($replaceWith)) {

                while ($strPos = strpos($text, $searchFor, $offset)) {
                    $offset = $strPos + $searchLength . "<br>";
                    $text = substr_replace($text, $replaceWith, $strPos, $searchLength);
                }
                return $text;
            } else {
                return "Thanks for filling the values";
            }
        }
    }

}