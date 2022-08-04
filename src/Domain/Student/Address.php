<?php

namespace Alura\Calisthenics\Domain\Student;

class Address
{

    public string $number;
    public string $country;
    public string $province;
    public string $city;
    public string $street;
    public string $state;

    /**
     * @param string $number
     * @param string $country
     * @param string $province
     * @param string $city
     * @param string $street
     * @param string $state
     */
    public function __construct(string $number, string $country, string $province, string $city, string $street, string $state)
    {
        $this->number = $number;
        $this->country = $country;
        $this->province = $province;
        $this->city = $city;
        $this->street = $street;
        $this->state = $state;
    }
}