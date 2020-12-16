<?php


function loadView($view, array $data = null, bool $header = false)
{
    $list_css = array(
        'bootstrap/bootstrap.min.css',
        '__all.css',
        '__widgets.css'
    );

    $list_js = array(
        'jquery-3.5.1.slim.min.js',
        'bootstrap/bootstrap.bundle.min.js'
    );
    $data['css'] = $list_css;
    $data['js'] = $list_js;
    $data['header'] = $header;
    $data['view'] = $view . '/form';
    echo view('structure/head', $data);
}