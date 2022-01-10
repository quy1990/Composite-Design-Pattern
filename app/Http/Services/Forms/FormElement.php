<?php

namespace App\Http\Services\Forms;

class FormElement extends FormComponent
{
    function add(FormComponent $obj)
    {
        return $obj; // Or false.
    }

    function display()
    {
        echo "this is display of form Element <\br>";
    }

    function remove(FormComponent $obj)
    {
        // TODO: Implement remove() method.
    }
}
