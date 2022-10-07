
/*Php Image directory Code*/

<?php echo get_template_directory_uri(); ?>

/*Php url Code*/

<?php echo get_site_url(); ?>

/*Php Shortcode*/

<?php echo do_shortcode('[projecthome_shortcode]'); ?>

/*Php theme option code*/

<?php echo $options['twtrurl'] ?>

/*Php Product Show Code*/

<?php echo do_shortcode('[products limit="12" columns="4" orderby="popularity"]') ?>

/*Php Posttype Code*/

$garages = get_post_meta(get_the_id(), 'GARAGE BAY', true);

/*Php Posttype Date Code*/

$dateday = get_the_date('d');

/*Php posttype categories code*/

$args = array('post_type' => 'product', 'category__in ' => 'barrels', 'category_name'  => 'barrels' );

/*Product Categories Code*/
<?php if ( is_product_category()) {  ?>

/*CheackOut Placeholder Field Code*/

<?php
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
?>