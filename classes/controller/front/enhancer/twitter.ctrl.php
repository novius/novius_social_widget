<?php

namespace Novius\Social\Widget;

use Fuel\Core\Arr;
use Nos\Controller_Front_Application;
use Nos\Nos;
use Parser\View;

class Controller_Front_Enhancer_Twitter extends Controller_Front_Application
{
    public function action_main($params = array())
    {
        $config  = $this->config;
        $gConfig = \Config::load('novius_social_widget::config', true);
        if (Arr::get($gConfig, 'embed_js', true)) {
            if (!empty($config['js'])) {
                foreach ($config['js'] as $script) {
                    Nos::main_controller()->addJavascript($script);
                }
            }
        }
        $chrome   = array();
        $typeList = array('chrome');
        foreach ($params as $param => $value) {
            if ($value) {
                foreach ($typeList as $type) {
                    $typePrefix = "$type-";
                    if ($value && \Str::starts_with($param, $typePrefix)) {
                        array_push($$type, \Str::sub($param, \Str::length($typePrefix)));
                    }
                }
            }
        }
        return \View::forge('novius_social_widget::front/enhancer/twitter',
            array(
                'widgetId' => $params['widget-id'],
                'chrome'   => $chrome,
                'limit'    => \Arr::get($params, 'limit'),
                'width'    => \Arr::get($params, 'width'),
                'height'   => \Arr::get($params, 'height'),
            ), false);
    }
}