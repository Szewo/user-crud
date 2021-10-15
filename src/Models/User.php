<?php

namespace App\Models;

class User
{
    private string $name;
    private string $surname;
    private string $telephoneNumber;
    private string $address;

    /**
     * @param string $name
     * @param string $surname
     * @param string $telephoneNumber
     * @param string $address
     */
    public function __construct(string $name, string $surname, string $telephoneNumber, string $address)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->telephoneNumber = $telephoneNumber;
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getTelephoneNumber(): string
    {
        return $this->telephoneNumber;
    }

    /**
     * @param string $telephoneNumber
     */
    public function setTelephoneNumber(string $telephoneNumber): void
    {
        $this->telephoneNumber = $telephoneNumber;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }



}