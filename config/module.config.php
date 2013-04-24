<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Angrybirds\Controller\Hello' => 'Angrybirds\Controller\HelloController',
        ),
    ),
	'router' => array(
        'routes' => array(
            'angrybirds' => array(
                'type'    => 'literal',
                'options' => array(
                    'route' => '/hello/world',
                    'defaults' => array(
                        'controller' => 'Angrybirds\Controller\Hello',
                        'action'     => 'world',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'angrybirds' => __DIR__ . '/../view',
        ),
    ),
);