<?php
    require_once("../../../../../wp-load.php");

    if(isset($_POST['data']) && !empty($_POST['data'])) {   
        wp_set_current_user( $user_id); // Let woo commerce see the new user
        WC()->cart->get_cart_from_session(); // Load users session
        WC()->cart->empty_cart(true); // Empty the cart
        WC()->session->set('cart', array()); // Empty the session cart data

        // Blah Blah Blah ...

        // WC()->cart->add_to_cart($product_id);

        // Blah Blah Blah ...

        do_action('shutdown'); // Make woocommerce save the cart
        die();
    }
?>