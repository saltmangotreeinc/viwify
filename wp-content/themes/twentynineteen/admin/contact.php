<?php
require_once( $_SERVER['DOCUMENT_ROOT'].'/wp-load.php' );

$name = $_POST["userName"];
$email = $_POST["userEmail"];
$subject = $_POST["subject"];
$content = $_POST["content"];

$prefix ='wp_';
$table = $wpdb->$prefix.'wp_contact';
$data = array('name' => $name, 'email' => $email, 'subject'=>$subject, 'content'=>$content);
$format = array('%s','%s');
$wpdb->insert($table,$data,$format);
$my_id = $wpdb->insert_id;
if($my_id ==0){
  echo json_encode($wpdb->last_error);
} else {
  echo json_encode($my_id);
}

?>