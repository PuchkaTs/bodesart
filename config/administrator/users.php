<?php
/**
 * User model config
 */
return array(
    'title' => 'Хэрэглэгч',
    'single' => 'Хэрэглэгч',
    'model' => 'App\User',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'name',
        'email'
    ),
    /**
     * The filter set
     */
    'filters' => array(

    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'name' => array(
            'title' => 'Нэр',
            'type' => 'text',
        ),
        'email' => array(
            'title' => 'Шуудан',
            'type' => 'text',
        ),
        'password' => array(
            'title' => 'Нууц үг',
            'type' => 'text',
        ),
        'birth' => array(
            'title' => 'Төрсөн өдөр',
            'type' => 'date',
        ),
        'role' => array(
            'type' => 'relationship',
            'title' => 'Хэрэглэгчийн төрөл',
            'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        ),
        'photo' => array(
            'title' => 'Зураг 200x200',
            'type' => 'image',
            'location' => public_path() . '/assets/artists/200x200/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'sizes' => array(
                array(200, 200, 'crop', public_path() . '/assets/artists/200x200/', 100),

            )
        ),
        'about' => array(
            'title' => 'Хэрэглэгчийн тухай',
            'type' => 'wysiwyg',
        ),
        'language' => array(
            'type' => 'relationship',
            'title' => 'Хэл',
            'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        ),
    ),

  
);