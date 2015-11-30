<?php
\Nos\I18n::current_dictionary('novius_social_widget::common');

$config = array(
    'popup'  => array(
        'layout' => array(
            'fields' => array(
                'view'   => 'nos::form/fields',
                'params' => array(
                    'begin'  => '<div>',
                    'end'    => '</div>',
                    'fields' => array(
                        'url',
                        'width',
                        'height',
                    ),
                ),
            ),
        ),
    ),
    'fields' => array(
        'url'    => array(
            'label'      => __('Page URL'),
            'validation' => array(
                'required',
            ),
        ),
        'width'  => array(
            'label' => __('Width'),
        ),
        'height' => array(
            'label' => __('Height'),
        ),
    ),
);

$chrome = \Novius\Social\Widget\Controller_Front_Enhancer_Facebook::getDataList();

foreach ($chrome as $type => $params) {
    $fieldname = "data-$type";

    $config['popup']['layout']['fields']['params']['fields'][] = $fieldname;

    $fieldConfig                  = array(
        'label'    => __($params['label']),
        'template' => '{label} {field}<br>',
        'form'     => \Arr::merge(array(
                'type'  => 'checkbox',
                'value' => 1,
                'empty' => 0,
            ), \Arr::get($params, 'form', array())),
    );
    $config['fields'][$fieldname] = $fieldConfig;
}

return $config;