<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default library used in charts.
    |--------------------------------------------------------------------------
    |
    | This value is used as the default chart library used when creating
    | any chart in the command line. Feel free to modify it or set it up
    | while creating the chart to ignore this value.
    |
    */
        'default' => [
            'type'          => 'line', // Tipo do gráfico
            'library'       => 'google', // Biblioteca 
            'element_label' => 'Element', // Nome da legenda 
            'title'         => 'My chart', // Título
            'height'        => 400, // Altura
            'width'         => 500, // Largura
            'responsive'    => true, // Usado para se adequar ao tamanho do box que se encontra
        ],
];
