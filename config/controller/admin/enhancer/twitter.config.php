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
                        'widget-id',
                        'limit',
                        'width',
                        'height',
                    ),
                ),
            ),
        ),
    ),
    'fields' => array(
        'widget-id' => array(
            'label'      => __('Widget ID'),
            'validation' => array(
                'required',
            ),
        ),
        'limit'     => array(
            'label' => __('Limit'),
        ),
        'width'     => array(
            'label' => __('Width'),
        ),
        'height'    => array(
            'label' => __('Height'),
        ),
    ),
);

$chrome = array(
    'noheader'    => array(
        'label' => 'Hide Header',
    ),
    'nofooter'    => array(
        'label' => 'Hide Footer',
    ),
    'noborders'   => array(
        'label' => 'Hide Borders',
    ),
    'noscrollbar' => array(
        'label' => 'Hide Scrollbar',
    ),
    'transparent' => array(
        'label' => 'Transparent background',
    ),
);

foreach ($chrome as $type => $params) {
    $fieldname = "chrome-$type";

    $config['popup']['layout']['fields']['params']['fields'][] = $fieldname;

    $fieldConfig                  = array(
        'label'    => __($params['label']),
        'template' => '{label} {field}<br>',
        'form'     => array(
            'type'  => 'checkbox',
            'value' => 1,
            'empty' => 0,
        )
    );
    $config['fields'][$fieldname] = $fieldConfig;
}

return $config;