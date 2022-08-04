<?php

namespace Alura\Calisthenics\Domain\Student;

class FullName
{
    private string $firstname;
    private string $lastname;

    /**
     * @param string $firstname
     * @param string $lastname
     */
    public function __construct(string $firstname, string $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function __toString():string
    {
        return "$this->firstname $this->lastname";
    }

}