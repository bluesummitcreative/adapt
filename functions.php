<?php
	require_once('functions/enqueue-styles-scripts.php');
	require_once('functions/custom-walker.php');
	require_once('functions/gravity-forms.php');
	require_once('functions/register-menus.php');	
	require_once('functions/register-sidebars.php');
	require_once('functions/theme-setup.php');
	require_once('functions/woocommerce.php');

	add_action('check_admin_referer', 'logout_without_confirm', 10, 2);
	function logout_without_confirm($action, $result)
	{
		/**
		 * Allow logout without confirmation
		 */
		if ($action == "log-out" && !isset($_GET['_wpnonce'])) {
			$redirect_to = isset($_REQUEST['redirect_to']) ? $_REQUEST['redirect_to'] : 'https://adapt.mines.edu/account/';
			$location = str_replace('&amp;', '&', wp_logout_url($redirect_to));
			header("Location: $location");
			die;
		}
	}
?>