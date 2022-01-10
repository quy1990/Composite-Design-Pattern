<?php

namespace App\Http\Controllers;

use App\Http\Services\Departments\Employees\DevOp;
use App\Http\Services\Departments\Employees\Programmer;
use App\Http\Services\Departments\Employees\Seller;
use App\Http\Services\Departments\FinancialDepartment;
use App\Http\Services\Departments\HeadDepartment;
use App\Http\Services\Departments\ITDepartment;
use App\Http\Services\Departments\SalesDepartment;

class DepartmentController
{
    public function index()
    {
        $salesDepartment = new SalesDepartment();
        $seller1 = new Seller();
        $seller2 = new Seller();
        $salesDepartment->addEmployee($seller1);
        $salesDepartment->addEmployee($seller2);

        $financialDepartment = new FinancialDepartment();
        $itDepartment = new ITDepartment();
        $programmer1 = new Programmer();
        $programmer2 = new Programmer();
        $programmer3 = new Programmer();
        $devOp = new DevOp();
        $devOp->setSalary(10000);
        $devOp->setBonus(500);

        $itDepartment->addEmployee($programmer1);
        $itDepartment->addEmployee($programmer2);
        $itDepartment->addEmployee($programmer3);
        $itDepartment->addEmployee($devOp);

        $headDepartment = new HeadDepartment();
        $headDepartment->addDepartment($salesDepartment);
        $headDepartment->addDepartment($financialDepartment);
        $headDepartment->addDepartment($itDepartment);

        $headDepartment->getName();
        echo ", sum =" . $headDepartment->getSalaries();
        echo ", bonus =" . $headDepartment->getBonuses();


    }
}
