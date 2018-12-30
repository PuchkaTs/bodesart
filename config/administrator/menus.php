<?php
/**
 * User model config
 */
return array(
    'title' => 'Цэс',
    'single' => 'Цэс',
    'model' => 'App\Menu',
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
        'name' => array(
            'title' => 'Цэсний нэр',
            'type' => 'text',
        ),
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'name' => array(
            'title' => 'Цэсний нэр',
            'type' => 'text',
        ),
        'position' => array(
            'title' => 'Байрлал',
            'type' => 'number',
        ),
        'language' => array(
            'type' => 'relationship',
            'title' => 'Хэл',
            'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        ),
    ),

  
);