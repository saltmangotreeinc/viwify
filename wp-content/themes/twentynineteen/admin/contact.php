<?php
require_once( $_SERVER['DOCUMENT_ROOT'].'/wp-load.php' );

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$company = $_POST["company"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$prefix ='wp_';
$table = $wpdb->$prefix.'contact';
$data = array('firstName' => $firstName, 'lastName'=>$lastName, 'company'=>$company,
    'email' => $email, 'mobile'=>$mobile, 'subject'=>$subject, 'message'=>$message);
$format = array('%s','%s');
$wpdb->insert($table,$data,$format);
$my_id = $wpdb->insert_id;
if($my_id ==0){
  echo json_encode($wpdb->last_error);
} else {
  echo json_encode($my_id);
}

?>