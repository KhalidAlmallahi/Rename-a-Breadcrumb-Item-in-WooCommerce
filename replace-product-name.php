/**
 * @snippet       Swap Product with SKU @ WooCommerce Breadcrumb
 * @author        Khalid Almallahi
 * @testedwith    WooCommerce 3.9
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */
 
add_filter( 'woocommerce_get_breadcrumb', 'kotsh_single_product_edit_prod_name_breadcrumbs', 9999, 2 );
 
function kotsh_single_product_edit_prod_name_breadcrumbs( $crumbs, $breadcrumb ) {
    
   if ( is_product() ) {
      global $product;
      $index = count( $crumbs ) - 1; // product name is always last item
      $value = $crumbs[$index];
      $crumbs[$index][0] = $product->get_sku();
   }
    
   return $crumbs;
}
