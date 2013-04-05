<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// GoCart Theme
$config['theme']			= 'default';

// SSL support
$config['ssl_support']		= false;

// Business information
$config['company_name']		= 'Friska Collect';
$config['address1']			= 'c/o CV Ross & Co Limited';
$config['address2']			= 'Unit 1, Office 1, Tower Lane Business Park';
$config['country']			= 'UK'; // use proper country codes only
$config['city']				= 'Bristol'; 
$config['state']			= '';
$config['zip']				= 'BS30 8XT';
$config['email']			= 'info@friskacollect.co.uk';
$config['company_registration'] = 6851798;
$config['vat_registration'] = 972509792;

// Store currency
$config['currency']						= 'GBP';  // USD, EUR, etc
$config['currency_symbol']				= '&pound;';
$config['currency_symbol_side']			= 'left'; // anything that is not "left" is automatically right
$config['currency_decimal']				= '.';
$config['currency_thousands_separator']	= ',';

// Shipping config units
$config['weight_unit']	    = 'KG'; // LB, KG, etc
$config['dimension_unit']   = 'CM'; // FT, CM, etc

// site logo path 
$config['site_logo']		= '/gocart/themes/default/assets/images/friska_logo.png';
$config['site_logo_alternate']	= '/gocart/themes/default/assets/images/friska_logo_black.png';

//change the name of the admin controller folder 
$config['admin_folder']		= 'admin';

//file upload size limit
$config['size_limit']		= intval(ini_get('upload_max_filesize'))*1024;

//are new registrations automatically approved (true/false)
$config['new_customer_status']	= true;

//do we require customers to log in 
$config['require_login']		= false;

//default order status
$config['order_status']			= 'Pending';

// default Status for non-shippable orders (downloads)
$config['nonship_status'] = 'Delivered';

$config['order_statuses']	= array(
	'Pending'  				=> 'Pending',
	'Processing'    		=> 'Processing',
	'Shipped'				=> 'Shipped',
	'On Hold'				=> 'On Hold',
	'Cancelled'				=> 'Cancelled',
	'Delivered'				=> 'Delivered'
);

// enable inventory control ?
$config['inventory_enabled']	= true;

// allow customers to purchase inventory flagged as out of stock?
$config['allow_os_purchase'] 	= false;

//do we tax according to shipping or billing address (acceptable strings are 'ship' or 'bill')
$config['tax_address']		= 'ship';

//do we tax the cost of shipping?
$config['tax_shipping']		= false;