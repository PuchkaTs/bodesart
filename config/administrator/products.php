<?php
/**
 * User model config
 */
return array(
    'title' => 'Бараа',
    'single' => 'Бараа',
    'model' => 'App\Product',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'name',
        'photo' => array(
            'title' => 'Зураг',
            'output' => '<img src="/assets/products/150x100/(:value)" height="100" />',
        ),
    ),
    /**
     * The filter set
     */
    'form_width' => 500,
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
        'price' => array(
            'title' => 'Үнэ',
            'type' => 'number',
        ),
        'description' => array(
            'title' => 'Тайлбар',
            'type' => 'wysiwyg',
        ),
        'artist' => array(
            'type' => 'relationship',
            'title' => 'Зураачийн нэр',
            'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        ),
        'submenu' => array(
            'type' => 'relationship',
            'title' => 'Дэд цэс',
            'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        ),
        'photo' => array(
            'title' => 'Зураг Long Edge 2000px',
            'type' => 'image',
            'location' => public_path() . '/assets/products/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'sizes' => array(
                array(150, 100, 'crop', public_path() . '/assets/products/150x100/', 100),
                array(300, 200, 'fit', public_path() . '/assets/products/300x200/', 100),
                array(2000, 2000, 'auto', public_path() . '/assets/products/', 100),

            )
        ),
    ),

  
);