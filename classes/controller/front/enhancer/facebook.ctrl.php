<?php

namespace Novius\Social\Widget;

use Fuel\Core\Arr;
use Nos\Controller_Front_Application;
use Nos\Nos;

class Controller_Front_Enhancer_Facebook extends Controller_Front_Application
{
    public static function getDataList()
    {
        return array(
            'hide-cover'            => array(
                'label' => 'Hide cover photo in the header',
            ),
            'show-facepile'         => array(
                'label' => 'Show profile photos when friends like this',
                'form'  => array(
                    'default' => 1,
                )
            ),
            'show-posts'            => array(
                'label' => 'Show posts from the Page\'s timeline.',
            ),
            'small-header'          => array(
                'label' => 'Use the small header instead',
            ),
            'adapt-container-width' => array(
                'label' => 'Try to fit inside the container width',
                'form'  => array(
                    'default' => 1,
                )
            ),
        );
    }


    public function action_page($params = array())
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
        $data = array();
        $list = $this->getDataList();

        foreach ($list as $key => $values) {
            $data[$key] = \Arr::get($params, "data-".$key, 0);
        }

        return \View::forge('novius_social_widget::front/enhancer/facebook',
            array(
                'url'    => $params['url'],
                'data'   => $data,
                'width'  => \Arr::get($params, 'width'),
                'height' => \Arr::get($params, 'height'),
            ), false);
    }
}