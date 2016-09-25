<?php
	require(DB_CONFIG); check_session($conn);
	$title = "Setting";
	require ADMIN_HEADER;
	require ADMIN_SIDEBAR;
?>

<div class="main-panel">
<?php 
	require ADMIN_PANEL_TOP; 
?>

<?php
	require ADMIN_FOOTER;
?>