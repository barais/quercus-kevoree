<?
$wordpress_path = "/home/barais/workspaces/familiargit/workspace/quercus/webappres";    
require_once( $wordpress_path . '/wp-load.php' ); //not sure if this line is needed
//activate_plugin() is here:
require_once(  $wordpress_path . '/wp-admin/includes/plugin.php');
//$plugins = array("hello");//  "w3-total-cache",  "wordpress-seo");
//foreach ($plugins as $plugin){
$plugin_path = $wordpress_path.'wp-content/plugins/akismet/akismet.php';
activate_plugin($plugin_path);
//}
echo 'done';
?>
