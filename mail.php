<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('ENTER_API_KEY_HERE');
$domain = "sandboxa5d237850da84e4aa41a30ef88b4a8a9.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
	array('from'    => 'Mailgun Sandbox <postmaster@sandboxa5d237850da84e4aa41a30ef88b4a8a9.mailgun.org>',
		  'to'      => 'New Gen Clinic <thunderbrainstorm.01@gmail.com>',
		  'subject' => 'Hello New Gen Clinic',
		  'template'    => 'dpi.plus',
		  'h:X-Mailgun-Variables'    => '{"test": "test"}'));
# Send an email using your active template with the above snippet
# You can see a record of this email in your logs: https://app.mailgun.com/app/logs.
?>