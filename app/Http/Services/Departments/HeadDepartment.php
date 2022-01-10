<?php

namespace App\Http\Services\Departments;

class HeadDepartment implements Department
{
    private $name = "HeadDepartment";
    private $childDepartments = [];
    private $salaries = 0.0;
    private $bonuses = 0.0;

    public function getName()
    {
        echo $this->name;
        foreach ($this->childDepartments as $department) {
            echo ",  " . $department->getName();
        }
    }

    public function getSalaries()
    {
        foreach ($this->childDepartments as $department) {
            $this->salaries += $department->getSalaries();
        }

        return $this->salaries;
    }

    public function addDepartment(Department $department): void
    {
        $this->childDepartments[] = $department;
    }

    public function removeDepartment(Department $department): void
    {
        $this->childDepartments = array_diff($this->childDepartments, [$department]);
    }

    public function getBonuses()
    {
        foreach ($this->childDepartments as $department) {
            $this->bonuses += $department->getBonuses();
        }

        return $this->bonuses;
    }

}
