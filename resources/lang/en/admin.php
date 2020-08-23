<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'alumno' => [
        'title' => 'Alumnos',

        'actions' => [
            'index' => 'Alumnos',
            'create' => 'New Alumno',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'Nombre' => 'Nombre',
            'ApellidoPaterno' => 'ApellidoPaterno',
            'ApellidoMaterno' => 'ApellidoMaterno',
            'Telefono' => 'Telefono',
            'Edad' => 'Edad',
            'FechaNacimiento' => 'FechaNacimiento',
            
        ],
    ],

    'empleado' => [
        'title' => 'Empleados',

        'actions' => [
            'index' => 'Empleados',
            'create' => 'New Empleado',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'Nombre' => 'Nombre',
            'ApellidoPaterno' => 'ApellidoPaterno',
            'ApellidoMaterno' => 'ApellidoMaterno',
            'Telefono' => 'Telefono',
            'Edad' => 'Edad',
            'FechaNacimiento' => 'FechaNacimiento',
            'LugarNacimiento' => 'LugarNacimiento',
            
        ],
    ],

    'puesto' => [
        'title' => 'Puesto',

        'actions' => [
            'index' => 'Puesto',
            'create' => 'New Puesto',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'Nombre' => 'Nombre',
            'ApellidoPaterno' => 'ApellidoPaterno',
            'ApellidoMaterno' => 'ApellidoMaterno',
            'Edad' => 'Edad',
            'FechaIngreso' => 'FechaIngreso',
            'Puesto' => 'Puesto',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];