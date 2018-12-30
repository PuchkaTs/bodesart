<?php
/**
 * User model config
 */
return array(
    'title' => 'Дэд цэс',
    'single' => 'Дэд цэс',
    'model' => 'App\Submenu',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'name',
        'position',
        'menu' => array(
            'title' => 'Цэс',
            'relationshop' => 'menu',
            'select' => '(:table).name'
        ),
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
            'title' => 'Цэсний нэр',
            'type' => 'text',
        ),
        'position' => array(
            'title' => 'Байрлал',
            'type' => 'number',
        ),
        'menu' => array(
            'type' => 'relationship',
            'title' => 'Цэс',
            'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        ),
    ),

  
);