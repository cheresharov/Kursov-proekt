<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Iveto\Controller\Index' => 'Iveto\Controller\IndexController',
        ),
    ),
  
    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'iveto' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/iveto[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Iveto\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
  
    'view_manager' => array(
        'template_map' => array(
          'layout/Iveto'			=> __DIR__ . '/../view/layout/Iveto.phtml',
        ),
        'template_path_stack' => array(
            'iveto' => __DIR__ . '/../view',
        ),
    ),
);