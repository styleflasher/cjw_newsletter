<?php

/**
 * Class: GermanSalutationFilter
 *
 * @category
 * @package
 * @author   Andreas Adelsberger <andreas.adelsberger@styleflasher.at>
 * @license  copyright 2013 Styleflasher New Media
 * @link     http://www.styleflasher.at
 *
 * @var      GermanSalutationFilter
 */
class GermanSalutationFilter
{
    /**
     * __construct
     *
     */
    public function __construct()
    {

    }

    /**
     * filter
     *
     * @param mixed $csvDataArray
     *
     * @return array
     */
    public function filter( $csvDataArray )
    {
        foreach ( $csvDataArray as $rowId => $item )
        {
            //eZDebug::writeDebug( $item['salutation']);
            switch( trim( $item['salutation'] ) )
            {
                case "Herr":
                    $salutation = 1;
                    break;

                case "Frau":
                    $salutation = 2;
                    break;

                default:
                    $salutation = 0;
                    break;
            }
            $csvDataArray[$rowId]['salutation'] = $salutation;
        }
        eZDebug::writeDebug( $csvDataArray );
        return $csvDataArray;
    }
}


