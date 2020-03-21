<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /* DESACTIVAMOS LOS CAMPOS CREATE_AT  Y UPDATE_AT */
    public $timestamp = false;

    /* seteamos el nombre de tabla en la base de datos */
    protected $table = 'contacts';

    /* asignamos los campos que se pueden rellenar en un formulario */
    protected $filliable = ['name', 'phone'];

}

