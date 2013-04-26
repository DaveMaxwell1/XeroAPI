<?php
/**
 * @file
 * A single location to store configuration.
 */

/**
 * Define for file includes
 */
define('BASE_PATH',dirname(__FILE__));

/**
 * Define which app type you are using: 
 * Private - private app method
 * Public - standard public app method
 * Partner - partner app method      
 */      
define("XRO_APP_TYPE",     "Public");

/**
 * Set your callback url or set 'oob' if none required
 */
define("OAUTH_CALLBACK",     'http://xeroapi.azurewebsites.net/xero/example2.php');

/**
 * Application specific settings
 * Not all are required for given application types
 * consumer_key: required for all applications
 * consumer_secret:  for partner applications, set to: s (cannot be blank)
 * rsa_private_key: not needed for public applications
 * rsa_public_key: not needed for public applications
 */
                     	 
$signatures = array( 'consumer_key'     => 'TGW1D8MILJITWAMK0NUMW4UTR3OB8R',
              	      	 'shared_secret'    => 'I6GUKSCUL8PGK7G4G7YSMDZMGZWJHG',
                	     'rsa_private_key'	=> BASE_PATH . '/certs/rq-partner-app-2-privatekey.pem',
                     	 'rsa_public_key'	=> BASE_PATH . '/certs/rq-partner-app-2-publickey.cer',
						 // API version 
                     	 'api_version'				=> '2.0',);

                     	 
/**
 * Special options for Partner applications - should be commented out for non-partner applications
 * Partner applications require a Client SSL certificate which is issued by Xero
 * the certificate is issued as a .p12 cert which you will then need to split into a cert and private key:
 * openssl pkcs12 -in entrust-client.p12 -clcerts -nokeys -out entrust-cert.pem
 * openssl pkcs12 -in entrust-client.p12 -nocerts -out entrust-private.pem <- you will be prompted to enter a password
 */   	
$signatures['curl_ssl_cert'] = BASE_PATH . '/certs/entrust-cert.pem';
$signatures['curl_ssl_password'] = '1234';
$signatures['curl_ssl_key'] = BASE_PATH . '/certs/entrust-private.pem';

/**
 * It is a good idea to set a user agent for the Xero API logs
 */
$useragent = "";

