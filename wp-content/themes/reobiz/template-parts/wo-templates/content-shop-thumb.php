<div class="product-list">
 	<div class="single-details">
 		<div class="images-product">
			<?php
				global $product;
				global $reobiz_option;
				woocommerce_show_product_loop_sale_flash();
				?>
				<a href="<?php the_permalink();?>">
					<?php woocommerce_template_loop_product_thumbnail(); ?>						
			    </a>
		
				<div class="overley">
				<div class="winners-details">
					<div class="product-info">
						<ul>			
							<?php if ( function_exists( 'YITH_WCQV_Frontend' ) && $reobiz_option['wc_quickview_icon']  ): ?>
								<li>
									<a href="" class="yith-wcqv-button" data-product_id="<?php echo esc_attr( $product->get_id() );?>"><i class="fa fa-search"></i></a>
								</li>
							<?php endif; ?>
							<?php if ( class_exists( 'YITH_WCWL_Shortcode' ) && $reobiz_option['wc_wishlist_icon'] ): ?>
								<?php
									$args = array(
										'browse_wishlist_text' => '<i class="fa fa-check"></i>',
										'already_in_wishslist_text' => '',
										'product_added_text' => '',
										'icon' => 'fa-heart-o',
										'label' => '',
										'link_classes' => 'add_to_wishlist single_add_to_wishlist alt wishlist-icon',
									);
								?>
								<li>
									<?php echo YITH_WCWL_Shortcode::add_to_wishlist( $args );?>	
								</li>
							<?php endif; 

									$product1 = wc_get_product( $product->get_id() ); 
									$price = $product1->get_price(); 

								 if(!empty($price)) : ?>
								 	<li>
								 		<?php reobiz_wc_add_to_cart_icon();?>								 		
									</li> 
							<?php endif; ?>
							
						</ul>
					</div>
				</div>
			   </div>
		</div>
	</div>
</div>