<?php

namespace App\Http\Services\Departments;

interface Department
{
    public function getName();

    public function getSalaries();

    public function getBonuses();
}
