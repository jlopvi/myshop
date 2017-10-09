<?php

return array(
	# Account credentials from developer portal
	'Account' => array(
		'ClientId' => 'AbesKWxuRKar41UpcFIUBwgxvN5nJ3fhpCOeg2m59kOFbxiSvoUWJZjfFeeftJcH-l0AuETPZ7OuGIli',
		'ClientSecret' => 'EPuUH0wlcXgGtjrqgmxoa0_8Z-oBeI-MRg1idFBV4sAU__xDXZDCq4ucUeXq25oLDwRZiPkDMtY2GrDt',
	),

	# Connection Information
	'Http' => array(
		// 'ConnectionTimeOut' => 30,
		'Retry' => 1,
		//'Proxy' => 'http://[username:password]@hostname[:port][/path]',
	),

	# Service Configuration
	'Service' => array(
		# For integrating with the live endpoint,
		# change the URL to https://api.paypal.com!
		'EndPoint' => 'https://api.sandbox.paypal.com',
		// Indica donde se van a dirigir las peticiones modo desarrollo
	),


	# Logging Information
	'Log' => array(
		//'LogEnabled' => true,

		# When using a relative path, the log file is created
		# relative to the .php file that is the entry point
		# for this request. You can also provide an absolute
		# path here
		'FileName' => '../PayPal.log',

		# Logging level can be one of FINE, INFO, WARN or ERROR
		# Logging is most verbose in the 'FINE' level and
		# decreases as you proceed towards ERROR
		//'LogLevel' => 'FINE',
	),
);
