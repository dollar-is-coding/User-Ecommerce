<?php include 'product-data.php'; ?>
<div class="row">
                <?php
                foreach ($dssanpham_rowsdata as $data) {
                ?>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                          <?php $level=''; echo '<img src="'.$level.image_path.$data['hinhAnh'].'" alt="">';?>
                        </div>
                        <h2><a href=""><?php echo $data['tenSanPham']; ?></a></h2>
                        <div class="product-carousel-price">
                            <ins><?php echo $data['giaBan'].' VND'; ?></ins>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                        </div>                       
                    </div>
                </div>
                <?php
                }
                ?>
        
            </div>

            <!-- detail-data.php?id=<?php echo $data['maSanPham']; ?> -->