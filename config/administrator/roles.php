<?php
/**
 * User model config
 */
return array(
    'title' => 'Хэрэглэгчийн төрөл',
    'single' => 'Хэрэглэгчийн төрөл',
    'model' => 'App\Role',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'name'
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
            'title' => 'Төрөл',
            'type' => 'text',
        ),
        // 'role' => array(
        //     'type' => 'relationship',
        //     'title' => 'Хэрэглэгчийн эрх',
        //     'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        // ),
    ),

  
);