<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/11
 * Time: 10:19
 */

/**
 * 多语言设置
 * 1.启用hook钩子
钩子功能可以在全局范围内打开或关闭，您可以在 application/config/config.php 文件中设定:
$config['enable_hooks'] = TRUE;
 * 
 */


class LangClass extends CI_Controller {

    function set_lang() {
        //var_dump("123");

        //从Uri中分解出当前的语言，如 '', 'en' 或 'cn'
        $my_lang = $this->uri->segment(1);
        //var_dump($my_lang);

        //默认语言为英语english
        if ($my_lang=='en' || $my_lang=='cn')
        {
            //动态设置当前语言为'en' 或 'cn'
            $this->config->set_item('language', $my_lang);
            //为方便，配置做后缀的当前语言，如 '', '_en' 或 '_cn'
            $this->config->set_item('post_lang', '_'.$my_lang);
        }

        $this->load->helper('language');

    }

}