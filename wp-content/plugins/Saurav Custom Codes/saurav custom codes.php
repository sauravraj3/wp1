<?php
/**
 * Saurav Raj Custom Codes
 *
 * Plugin Name: Saurav Raj Custom Codes
 * Plugin URI:  https://sauravraj.in/plugins/
 * Description: All the custom codes written by Saurav Raj
 * Version:     1.0
 * Author:      Saurav Raj
 * Author URI:  https://sauravraj.in/
 * Text Domain: saurav-raj-custom-codes
 */


add_action( 'all_admin_notices', 'new_notice' );

function new_notice()
{

	global $current_user;
	get_currentuserinfo();

	if(strpos($_SERVER['REQUEST_URI'], 'post-new')>0 || strpos($_SERVER['REQUEST_URI'], 'post.php')>0)
	{

		echo("

			<div style='color:#000;background: #ddd; width: 56%; border: 2px solid #AAA; margin: 0 auto 0 auto; /* float: left; */ padding: 10px; margin-left: 0%; margin-top: 2%;'>

			Hello <b> $current_user->user_login </b>,


			");

		echo("

			<p>Welcome To Blog Poster,</p>

			<p>Don't Forget To Press <b>CTRL+SHIFT+R</b> before writing anything on me. Happy Posting!!!</p>

			</div>


		");

	}
}

?>
