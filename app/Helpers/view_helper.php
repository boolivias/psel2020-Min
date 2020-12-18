<?php


function loadView($view, array $dt = array(), bool $header = false)
{
    $list_css = array(
        'bootstrap/bootstrap.min.css',
        '__all.css',
        '__widgets.css',
        '__input.css',
        '__button.css',
        '__nav.css'
    );

    $list_js = array(
        'jquery-3.5.1.slim.min.js',
        'bootstrap/bootstrap.bundle.min.js',
        'script.js',
        'jquery.mask.min.js'
    );
    $data['css'] = $list_css;
    $data['js'] = $list_js;
    $data['header'] = $header;
    $data['view'] = $view;
    $data['data'] = array('data' => $dt);
    echo view('structure/head', $data);
}
