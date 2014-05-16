<?php
return array(
    'doctrine' => array(
        'driver' => array(
            'forgotpassword_entity' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\XmlDriver',
                'paths' => __DIR__ . '/xml/forgotpassword'
            ),

            'orm_default' => array(
                'drivers' => array(
                    'ForgotPassword\Entity'  => 'forgotpassword_entity'
                )
            )
        )
    ),
);
