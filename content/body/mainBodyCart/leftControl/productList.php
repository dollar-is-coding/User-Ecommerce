<?php include 'productlist-data.php';
//var_dump($dssanpham_rowsdata);
 ?>
<div class="single-sidebar">
<?php
                            foreach ($dssanpham_rowsdata as $data) {

                            ?>
                        <h2 class="sidebar-title">Products</h2>
                        <div class="thubmnail-recent">
                        <?php $level=''; echo '<img src="'.$level.image_path.$data['hinhAnh'].'"  alt="">';?>
                            <h2><a href="single-product.php"><?php echo $data["tenSanPham"]; ?></a></h2>
                            <div class="product-sidebar-price">
                                <ins><?php echo $data["giaBan"]; ?></ins>
                            </div>
                        </div>

                        <?php
                            }
                            ?>
                    </div>