<?php

namespace App\Http\Services\Departments\Employees;

class Programmer implements Employee
{
    private $name;
    private $salary = 3000;
    private $bonus = 0.0;

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary(float $salary)
    {
        $this->salary = $salary;
    }

    public function getBonus()
    {
        return $this->bonus;
    }

    public function setBonus(float $bonus)
    {
        $this->bonus = $bonus;
    }
}
