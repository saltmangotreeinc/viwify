<?php 
// error_reporting(E_ALL);
// ini_set('display_errors', '1');
require_once( $_SERVER['DOCUMENT_ROOT'].'/wp-load.php' );
$email = $_POST['email'];

if(!empty($email)) {
  try{
    $prefix ='wp_';
    $table = $wpdb->$prefix.'demo';
    $data = array('email' => $email);
    $format = array('%s','%s');
    $wpdb->insert($table,$data,$format);
    $my_id = $wpdb->insert_id;
    if($my_id ==0){
      echo json_encode($wpdb->last_error);
    } else {
      echo json_encode($my_id);
    }
  } catch(Exception $e){
    echo $e;
  }
}
?>