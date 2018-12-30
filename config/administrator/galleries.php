<?php
/**
 * User model config
 */
return array(
    'title' => 'Галерей',
    'single' => 'Галерей',
    'model' => 'App\Gallery',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'name',
        'position'
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
        'position' => array(
            'title' => 'Байрлал',
            'type' => 'number',
        ),
        'products' => array(
            'type' => 'relationship',
            'title' => 'Бараанууд',
            'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        ),
        'language' => array(
            'type' => 'relationship',
            'title' => 'Хэл',
            'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        ),
    ),

  
);