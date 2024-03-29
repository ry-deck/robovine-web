<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.1.386
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Home Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Checked',
		'checkbox_unchecked' => 'Unchecked',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_reCAPTCHA2_private_key' => 'Invalid reCAPTCHA 2.0 private key.',
		'invalid_reCAPTCHA2_server_response' => 'Invalid reCAPTCHA 2.0 server response.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'ryanmorgandecker@gmail.com',
		'to' => 'ryanmorgandecker@gmail.com'
	),
	'fields' => array(
		'custom_U176' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Name\' is required.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Age',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Age\' is required.',
				'format' => 'Field \'Age\' has an invalid email.'
			)
		),
		'custom_U158' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Body Type',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Body Type\' is required.'
			)
		),
		'custom_U154' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Date of Birth (MM/DD/YYYY)',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Date of Birth (MM/DD/YYYY)\' is required.'
			)
		),
		'custom_U144' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Date of Death (MM/DD/YYYY)',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Date of Death (MM/DD/YYYY)\' is required.'
			)
		),
		'custom_U180' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'Mother\'s Maiden Name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Mother\'s Maiden Name\' is required.'
			)
		),
		'custom_U167' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'JJJJJJJJJJJJJJJJJJJ',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'JJJJJJJJJJJJJJJJJJJ\' is required.'
			)
		),
		'custom_U163' => array(
			'order' => 8,
			'type' => 'string',
			'label' => 'Don\'t Turn Around',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Don\'t Turn Around\' is required.'
			)
		),
		'custom_U171' => array(
			'order' => 9,
			'type' => 'string',
			'label' => 'Grievances',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Grievances\' is required.'
			)
		)
	)
);

process_form($form);
?>
