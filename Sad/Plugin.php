<?php
/**
 * 国务院公告2020年4月4日将举行全国性哀悼活动，所以大家可以用这个插件让网站变成黑白色<style>#plugin-Sad td{color: red;}</style>
 * 
 * @package Sad全站失色
 * @author 泽泽社长
 * @version 4.4
 * @link http://qqdie.com
 */
class Sad_Plugin implements Typecho_Plugin_Interface
{ 
 public static function activate()
	{
 Typecho_Plugin::factory('admin/footer.php')->end = array('Sad_Plugin', 'header');
Typecho_Plugin::factory('Widget_Archive')->header = array('Sad_Plugin', 'header');
    }
	/* 禁用插件方法 */
	public static function deactivate(){}
    public static function config(Typecho_Widget_Helper_Form $form){ }
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}
    public static function header(){
?>
<style>html{
        /*兼容FF*/
        filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale");
        /*兼容IE内核*/
        filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);
        /*兼容其它，谷歌之类的*/
        -webkit-filter: grayscale(1);
    }</style>
<?php
} 
}