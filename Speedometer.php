<?php
// 1km = 0.621 Miles
// 1Miles = 1.609Km

Class Speedometer {
    public const CONVERTKMTOMILES = 0.621;
    public const CONVERTMILESTOKM = 1.609;

    public static function retrieveMiles(int $miles) : ?int
    {
        return $miles * self::CONVERTKMTOMILES;
    }

    public static function retrieveKm(int $km): ?int
    {
        return $km * self::CONVERTMILESTOKM;
    }
}