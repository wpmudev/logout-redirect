<?php
/*
Plugin Name: Logout Redirect
Plugin URI: 
Description:
Author: Andrew Billits
Version: 1.0.0
Author URI:
*/

/* 
Copyright 2007-2009 Incsub (http://incsub.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License (Version 2 - GPLv2) as published by
the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

//------------------------------------------------------------------------//
//---Config---------------------------------------------------------------//
//------------------------------------------------------------------------//

$logout_redirect_url = 'http://domain.tld/'; // the url you want users to be redirected too after logging out

//------------------------------------------------------------------------//
//---Hook-----------------------------------------------------------------//
//------------------------------------------------------------------------//
if ( $_GET['loggedout'] == 'true' ) {
	add_action('login_head', 'logout_redirect');
}
//------------------------------------------------------------------------//
//---Functions------------------------------------------------------------//
//------------------------------------------------------------------------//

function logout_redirect(){
	global $logout_redirect_url;

	echo "
	<SCRIPT LANGUAGE='JavaScript'>
	window.location='" . $logout_redirect_url . "';
	</script>
	";
}

?>
