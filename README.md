# Rename a Breadcrumb Item in WooCommerce
WooCommerce generates shop, category, tag, single product breadcrumbs out of the box. Such breadcrumbs should follow your WooCommerce permalink settings. For example, I use the “Shop base with category” option under WordPress > Permalinks. In my case, by default, a product belonging to category “Uncategorized” has an URL = “https://example.com/shop/uncategorized/product-name/” and its single product page breadcrumbs follow that same rule: “Home / Shop / Uncategorized / Product Name”.

Now, what if I want to rename one of the items? What if I want to replace one of the breadcrumb items with something else? Well, WooCommerce gives us a cool filter called “woocommerce_get_breadcrumb” that we can use to edit the breadcrumb content before displaying it. In this post, we will see how to add a suffix to product categories and also how to replace the product name with the SKU value. Enjoy!

# Note: This code adding to function.php in your theme

<img src="https://businessbloomer.com/wp-content/uploads/2020/02/woocommerce-edit-breadcrumbs.png">

