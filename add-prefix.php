/**
 * @snippet       Add Prefix to Category @ WooCommerce Breadcrumb
 * @author        Khalid Almallahi
 * @testedwith    WooCommerce 3.9
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */
 
add_filter( 'woocommerce_get_breadcrumb', 'kotsh_single_product_edit_cat_breadcrumbs', 9999, 2 );
 
function kotsh_single_product_edit_cat_breadcrumbs( $crumbs, $breadcrumb ) {
    
   if ( is_product() ) {
      $index = count( $crumbs ) - 2; // cat is always second last item
      $value = $crumbs[$index];
      $crumbs[$index][0] = 'Category: ' . $crumbs[$index][0];
   }
    
   return $crumbs;
}
