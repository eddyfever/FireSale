<?php echo form_open(); ?>
    <p>Payment processing is done on the PayPal website, so if you're happy with everything please click below to finalise your order!</p>
    <input type="hidden" name="return_url" value="<?php echo site_url($this->routes_m->build_url('cart').'/success/paypal_express'); ?>" />
    <button type="submit" class="btn"><span>Pay with PayPal Express</span></button>
<?php echo form_close();
