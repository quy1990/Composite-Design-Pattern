<?php

namespace App\Http\Services\Forms;

class Form extends FormComponent
{
    private $_elements = array();

    function add(FormComponent $obj)
    {
        $this->_elements[] = $obj;
    }

    function display()
    {
        foreach ($this->_elements as $a) {
            $a->display();
        }

    }

    function remove(FormComponent $obj)
    {
        $this->_elements = array_diff($this->_elements, [$obj]);
    }

}
