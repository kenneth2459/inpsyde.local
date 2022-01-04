<?php 
/**
 * Plugin Name: User plugin
 * Plugin URI: https://github.com/KenethYMG/caymanrestaurant/
 * Description: The very first plugin that I have ever created.
 * Version: 1.0
 * Author: Keneth Rosales
 * Author URI: https://github.com/KenethYMG/caymanrestaurant/
 */

add_action( 'the_content', 'user_profile' );

function user_profile ( $content ) {
	global $current_user;
      get_currentuserinfo();
 if (is_page( 'Page user info' )){ 
      $user_data = 'Username: ' . $current_user->user_login . "\n";
      $user_data.= 'User email: ' . $current_user->user_email . "\n";
      $user_data.= 'User first name: ' . $current_user->user_firstname . "\n";
      $user_data.= 'User last name: ' . $current_user->user_lastname . "\n";
      $user_data.= 'User display name: ' . $current_user->display_name . "\n";
      $user_data.= 'User ID: ' . $current_user->ID . "\n";

      $table = '<table class="table">';
      $table .= '<thead>';
      $table .= '<tr>';
      $table .= '<th scope="col">ID</th>';
      $table .= '<th scope="col">User display name</th>';
      $table .= '<th scope="col">More info</th>';
      $table .= '</tr>';
      $table .= '</thead>';
      $table .= '<tbody>';
      $table .= '<tr>';
      $table .= '<td>';
      $table .= $current_user->ID;
      $table .= '</td>';
      $table .= '<td>';
      $table .= $current_user->user_login;
      $table .= '<td>';
	  $table .= '<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
			    Show all the data info
			  </button>';
      $table .= '</tr>';
      $table .= '</td>';
      $table .= '</tbody>';
      $table .= '</table>';

      	$table_content.='<div class="collapse" id="collapseExample">';
  		$table_content.= '<div class="card card-body">' ;
    	$table_content.= '<p> User email: ' . $current_user->user_email .'</p>';
    	$table_content.= '<p> User first name: ' . $current_user->user_firstname .'</p>';
    	$table_content.= '<p> User last name: ' . $current_user->user_lastname .'</p>';
    	$table_content.= '<p> User display name: ' . $current_user->display_name .'</p>';
    	$table_content.= '</div>';
    	$table_content.= '</div>';
      return $content. '<p>'.$table.'</p>'. $table_content ;
  }else{
  	return $content;
  }
}

?>