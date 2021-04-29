<?php

class Speedometer {

    public const LONGUEUR_CONVERSION = 1.60934 ;

    public static function convertKMtoMiles(int $routeDuParadis) : ?float
    {
        return $routeDuParadis * self::LONGUEUR_CONVERSION ;
        }

    public static function convertMilestoKM(int $routeDeLenfer) : ?float
    {
        return $routeDeLenfer / self::LONGUEUR_CONVERSION ;
        }
}