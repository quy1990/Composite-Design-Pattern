<?php

namespace App\Http\Services\Forms;

abstract class FormComponent
{
    abstract function display();

    abstract function add(FormComponent $obj);

    abstract function remove(FormComponent $obj);
}
