<?php

namespace App\Http\Services\Departments;

use App\Http\Services\Departments\Employees\Employee;

class FinancialDepartment implements Department
{
    private $name = "FinancialDepartment";
    private $employees = [];
    private $salaries = 0.0;
    private $bonuses = 0.0;

    public function getName()
    {
        return $this->name;
    }

    public function addEmployee(Employee $employee): void
    {
        $this->employees[] = $employee;
    }

    public function removeEmployee(Employee $employee): void
    {
        $this->employees = array_diff($this->employees, [$employee]);
    }

    public function getSalaries()
    {
        foreach ($this->employees as $employee) {
            $this->salaries += $employee->getSalary();
        }

        return $this->salaries;
    }

    public function getBonuses()
    {
        foreach ($this->employees as $employee) {
            $this->bonuses += $employee->getBonus();
        }

        return $this->bonuses;
    }
}
