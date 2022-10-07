add_filter( 'woocommerce_checkout_fields' , 'override_billing_checkout_fields', 20, 1 );
function override_billing_checkout_fields( $fields ) {
	$fields['billing']['billing_first_name']['placeholder'] = 'First Name *';
	$fields['billing']['billing_last_name']['placeholder'] = 'Last Name *';
	$fields['billing']['billing_company']['placeholder'] = 'Company';
	$fields['billing']['billing_country']['placeholder'] = 'Country *';
	$fields['billing']['billing_address_1']['placeholder'] = 'Street Address *';
	$fields['billing']['billing_city']['placeholder'] = 'Town / City *';
	$fields['billing']['billing_state']['placeholder'] = 'State *';
	$fields['billing']['billing_postcode']['placeholder'] = 'ZIP *';
	$fields['billing']['billing_phone']['placeholder'] = 'Phone (optional)';
	$fields['billing']['billing_email']['placeholder'] = 'Email Address *';
	$fields['shipping']['shipping_first_name']['placeholder'] = 'First Name *';
	$fields['shipping']['shipping_last_name']['placeholder'] = 'Last Name *';
	$fields['shipping']['shipping_country']['placeholder'] = 'Country *';
	$fields['shipping']['shipping_address_1']['placeholder'] = 'Street Address *';
	$fields['shipping']['shipping_city']['placeholder'] = 'Town / City *';
	$fields['shipping']['shipping_state']['placeholder'] = 'State *';
	$fields['shipping']['shipping_postcode']['placeholder'] = 'ZIP *';
    return $fields;
}