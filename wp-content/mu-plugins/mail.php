<?php

add_filter( 'wp_mail_from', function() {
	return 'noreply@example.com';
} );

add_action( 'phpmailer_init', function( $phpmailer ) {
	$phpmailer->isSMTP();
	$phpmailer->SMTPAuth = false;
	$phpmailer->Host = 'mailhog';
	$phpmailer->Port = 1025;
} );
