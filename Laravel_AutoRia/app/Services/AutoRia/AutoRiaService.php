<?php

namespace App\Services\AutoRia;

/**
 * Class AutoRiaService
 * @package App\Services\AutoRia
 */
class AutoRiaService {

    public function getTypeCar()
    {

    }

    public function getTypeBodyCar()
    {

    }

    public function getCarBrand()
    {
        try {
            $jsonData = file_get_contents('https://auto.ria.com/uk/legkovie/toyota/?page=1');
            $data = json_decode($jsonData, true);
            return $data;
        } catch (\Exception $e) {
            if($e) die($e->getMessage());
        }
    }

    public function getModelCar()
    {

    }

    public function getGearboxType()
    {

    }
}