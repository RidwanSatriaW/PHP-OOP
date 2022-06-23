<?php

namespace Data;

interface HasBrand
{
    function getBrand(): string;
}

interface IsMaintenance
{
    function isMaintenance(): bool;
}

//interface mewarisi interface menggunakan extend
interface Car extends HasBrand
{
    function drive(): void;

    function getTire(): int;
}

//class mewarisi interface menggunakan implement

class Avanza implements Car, IsMaintenance
{

    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return "Toyota";
    }

    public function isMaintenance(): bool
    {
        return false;
    }

}