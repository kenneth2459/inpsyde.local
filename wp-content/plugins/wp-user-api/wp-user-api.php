<?php 
/**
 * Plugin Name: User plugin API
 * Plugin URI: https://github.com/KenethYMG/caymanrestaurant/
 * Description: The very first plugin that I have ever created.
 * Version: 1.0
 * Author: Keneth Rosales
 * Author URI: https://github.com/KenethYMG/caymanrestaurant/
 */

add_action( 'the_content', 'user_profile_API' );

function user_profile_API ( $content ) {

 if (is_page( 'Page user api' )){ 
     $json = file_get_contents('https://jsonplaceholder.typicode.com/users');
     $objs = json_decode($json);
     //print_r($objs);
     
      $table = '<table class="table">';
      $table .= '<thead>';
      $table .= '<tr>';
      $table .= '<th scope="col">ID</th>';
      $table .= '<th scope="col">User display name</th>';
      $table .= '<th scope="col">More info</th>';
      $table .= '<th scope="col">Complete info</th>';
      $table .= '</tr>';
      $table .= '</thead>';
      $table .= '<tbody>';
      foreach ($objs as $obj){
           $table .= '<tr>';
           $table .= '<td>';
           $table .= $obj->id;
           $table .= '</td>';
           $table .= '<td>';
           $table .= $obj->name;
           $table .= '</td>';
           $table .= '<td>';
           $table .= '<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#div'.$obj->id.'" aria-expanded="false" aria-controls="#div'.$obj->id.'">
                        Show all the data info
                      </button>';
           $table .= '</td>';
           $table .= '<td>';
               $table.='<div class="collapse" id="div'.$obj->id.'">';
               $table.= '<div class="card card-body">' ;
               $table.= '<p> User email: ' . $obj->username .'</p>';
               $table.= '<p> User first name: ' . $obj->email .'</p>';
               $table.= '<p> User last name: ' . $obj->phone .'</p>';
               $table.= '</div>';
               $table.= '</div>';
           $table .= '</td>';
           $table .= '</tr>';
      }
      $table .= '</tbody>';
      $table .= '</table>';
      return '<p>'.$table.'</p>'. $table_content ;
  }else{
     return $content;
  }
}

?>