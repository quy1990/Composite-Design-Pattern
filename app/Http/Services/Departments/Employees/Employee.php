<?php

namespace App\Http\Services\Departments\Employees;

interface Employee
{
    public function getName();

    public function setName(string $name);

    public function getSalary();

    public function setSalary(float $salary);

    public function getBonus();

    public function setBonus(float $bonus);
}
