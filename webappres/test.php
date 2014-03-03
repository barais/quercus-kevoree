<?php
 $fields = array(
	'description' => true,
        'downloaded' => false,
        'author' => false,
        'author_profile' => false,
        'contributors' => false,
        'requires' => false,
        'tested' => false,
        'compatibility' => false,
        'homepage' => false,
        'description' => false,
        'last_updated' => false,
        'added' => false
    );
    $body = (object) array( 'search' => 'test','fields' => $fields, 'per_page' => 100);
    $post_data = array('action' => 'query_plugins', 'request' => serialize($body));
	//print(serialize($body))
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_URL, 'http://api.wordpress.org/plugins/info/1.0/');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $return = curl_exec($ch);
    curl_close($ch);


 $fields = array(
	'downloadlink' => true
    );
    $body = (object) array( 'slug' => 'nelio-ab-testing','fields' => serialize($fields));
    $post_data = array('action' => 'plugin_information', 'request' => serialize($body));
	print(serialize($body))
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_URL, 'http://api.wordpress.org/plugins/info/1.0/');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $return = curl_exec($ch);
    print($return);
    curl_close($ch);


    //print($return);
?>
