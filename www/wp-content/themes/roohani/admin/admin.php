<?php

require_once ROOHANI_ADMIN . '/class/all.class.php';

if( class_exists('AFW') ) {

    // Create options
    AFW::createWPOption( 'roohani', [

    'framework_title' => sprintf(__('Roohani Theme <%1$s> by Abu sufiyan</%1$s>', 'roohani'), 'small'),
    
    // menu settings
    'menu_title'      => __('Roohani Theme', 'roohani'),
    'menu_slug'       => 'roohani',
    'menu_capability' => 'manage_options',

    'version'         => 'v1.1.5',

    ]);

    AFW::createSection( 'roohanii', [
    'title'   =>  __( 'Scroll Indicator', 'roohani' ),
    'id'      => 'roohaniscrollindicator',
    'fields'  => [

            [ 'title' => __( 'Scroll Indicator', 'roohani' ), 'type' => 'toggle', 'id' => 'scroll_indicator' ],
            [ 'title' => __( 'Indicator color', 'roohani' ), 'type' => 'color_picker', 'id' => 'scroll_color' ],
            [ 'title' => __( 'Indicator BG', 'roohani' ), 'type' => 'color_picker', 'id' => 'scroll_bg' ],

        ]
    ]);

    AFW::createSection( 'roohani', [
    'title'   =>  __( 'Backup', 'roohani' ),
    'id'      => 'roohanibackup',
    'fields'  => [[ 'title' => __( 'Backup', 'roohani' ), 'type' => 'backup', 'id' => 'backup' ]]
    ]);

}
