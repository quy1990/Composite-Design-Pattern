<?php

namespace App\Http\Controllers;

use App\Http\Services\Forms\Form;
use App\Http\Services\Forms\FormElement;

class FormController
{
    public function index()
    {
        $form = new Form();
        $email1 = new FormElement();
        $email2 = new FormElement();
        $form->add($email1);
        $form->add($email2);

        $form->display();
    }
}
