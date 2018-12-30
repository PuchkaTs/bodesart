<?php
/**
 * User model config
 */
return array(
    'title' => 'Хэл',
    'single' => 'Хэл',
    'model' => 'App\Language',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'name',
        'position',
        'slug'
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
            'title' => 'Хэл',
            'type' => 'text',
        ),
        'slug' => array(
            'title' => 'Slug',
            'type' => 'text',
        ),
        'position' => array(
            'title' => 'Байрлал',
            'type' => 'number',
        ),
        // 'role' => array(
        //     'type' => 'relationship',
        //     'title' => 'Хэрэглэгчийн эрх',
        //     'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        // ),
    ),

  
);