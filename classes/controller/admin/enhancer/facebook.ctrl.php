<?php

namespace Novius\Social\Widget;

class Controller_Admin_Enhancer_Facebook extends \Nos\Controller_Admin_Enhancer
{

    public function action_popup()
    {
        if (empty($_GET['url'])) {
            foreach ($this->config['fields'] as $key => $field) {
                if (\Arr::get($field, 'form.default') && !isset($_GET[$key])) {
                    \Arr::set($_GET, $key, \Arr::get($field, 'form.default'));
                }
            }
        }
        return parent::action_popup();
    }
}