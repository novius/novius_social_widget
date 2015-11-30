<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link       http://www.novius-os.org
 */

return array(
    'name'       => 'Social Widgets',
    'version'    => '1.0.0',
    'provider'   => array(
        'name' => 'Novius',
    ),
    'namespace'  => 'Novius\Social\Widget',
    'permission' => array(),
    'i18n_file'  => 'novius_social_widget::metadata',
    'launchers'  => array(),
    'icons'      => array(
        16 => 'static/apps/novius_social_widget/img/icon/16.png',
        32 => 'static/apps/novius_social_widget/img/icon/32.png',
        64 => 'static/apps/novius_social_widget/img/icon/64.png',
    ),
    'enhancers'  => array(
        'social_widget_twitter' => array(
            'title'      => 'Twitter Widget',
            'desc'       => '',
            'enhancer'   => 'novius_social_widget/front/enhancer/twitter/main', // URL of the enhancer
            'previewUrl' => 'admin/novius_social_widget/enhancer/twitter/preview', // URL of preview
            'dialog'     => array(
                'contentUrl' => 'admin/novius_social_widget/enhancer/twitter/popup',
                'width'      => 450,
                'height'     => 400,
                'ajax'       => true,
            ),
        ),
        'social_widget_facebook_page' => array(
            'title'      => 'Facebook Page',
            'desc'       => '',
            'enhancer'   => 'novius_social_widget/front/enhancer/facebook/page', // URL of the enhancer
            'previewUrl' => 'admin/novius_social_widget/enhancer/facebook/preview', // URL of preview
            'dialog'     => array(
                'contentUrl' => 'admin/novius_social_widget/enhancer/facebook/popup',
                'width'      => 450,
                'height'     => 400,
                'ajax'       => true,
            ),
        ),
    ),
);
