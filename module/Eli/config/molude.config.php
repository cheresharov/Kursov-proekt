<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Eli\Controller\Index' => 'Eli\Controller\IndexController',
        ),
    ),
  
    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'eli' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/eli[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Eli\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
  
    'view_manager' => array(
          'template_map' => array(
          'layout/Eli'           => __DIR__ . '/../view/layout/Eli.phtml',
             ),
            'template_path_stack' => array(
                'eli' => __DIR__ . '/../view',
            ),
    ),
);