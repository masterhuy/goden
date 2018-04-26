<?php
/**
* 2007-2017 PrestaShop
*
* Jms Blog
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

include_once('../../config/config.inc.php');
include_once('../../init.php');
include_once('class/JmsHelper.php');

if (Tools::isSubmit('action')) {
    $image_position         = Configuration::get('JRB_IMAGE_POSITION');
    $popup_position         = Configuration::get('JRB_POPUP_POSITION');

    $popup_show_trans       = Configuration::get('JRB_POPUP_SHOW_ANIMATE');
    $popup_hide_trans       = Configuration::get('JRB_POPUP_HIDE_ANIMATE');

    $class                 = array();
    $class[]               = $image_position ? $image_position : '';

    $product_id            = Tools::getValue('id', 0);
    $background_image      = Configuration::get('JRB_BACKGROUND');

    if ($product_id) {
        $product_id_str = 'data-product="' . $product_id . '">';
    } else {
        $product_id_str = '';
    }

    $class[] = $popup_position;
    ob_start();
    $helper = new JmsHelper();
    $rebought_content = Configuration::get('JRB_POPUP_CONTENT');
    $image_redirect    = Configuration::get('JRB_EXTERNAL_LINK');
    $products = $helper->getProducts(true);

    die(json_encode($products));
}
