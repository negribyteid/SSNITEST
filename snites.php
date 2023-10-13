<?php
/**
 * @package SNI Test
 * @version 1.7.2
 */
/*
Plugin Name: SNI Test
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author:Widi
Version: 1.7.2
Author URI: http://ma.tt/
*/

$path = preg_replace('/wp-content.*$/','',__DIR__);
require_once($path."wp-load.php");
global $wpdb;


//ambil 10 terakhir post 
function ambil_10post(){
    echo '<table>';
    echo '<thead>';
        echo '<tr>';
            echo '<th>Judul Post</th>';
            echo '<th>Tgl Post</th>';
            echo '<th>Isi Postingan</th>';
        echo '</tr>';
    echo '</thead>';
    
    echo '<tbody>';
        $data_post_terakhir = $wpdb->get_results("SELECT * FROM wp_posts ORDER BY ID LIMIT 10 DESC");
        if (!empty($data_post_terakhir)){
            foreach ($data_post_terakhir as $key){
                echo '<tr>';
                    echo '<td>'.$key->post_title.'</td>';
                    echo '<td>'.$key->post_date.'</td>';
                    echo '<td>'.$key->post_content.'</td>';
                echo '</tr>';
            }
        }
    echo '</tbody>';
    echo '</table>';
}

add_shortcode("post10","ambil_10post");
?>