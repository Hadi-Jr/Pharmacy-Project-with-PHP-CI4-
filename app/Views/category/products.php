<section id="content" class="seipkon-content-wrapper">
    <div class="page-content">
        <div class="container-fluid">

            <!-- Breadcromb Row Start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcromb-area">
                        <div class="row">
                            <div class="col-md-6  col-sm-6">
                                <div class="seipkon-breadcromb-left">
                                    <h3>Products</h3>
                                </div>
                            </div>
                            <div class="col-md-6  col-sm-6">
                                <div class="seipkon-breadcromb-right">
                                    <ul>
                                        <li><a href="<?= base_url('/') ?>">home</a></li>
                                        <li>categories</li>
                                        <li>products</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Breadcromb Row -->

            <!-- Product Row Start -->
            <div class="row">
                <?php
                foreach ($products ?? [] as $product) {
                    ?>
                    <div class="col-md-3 col-sm-3">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="product-image">
                                <img src="<?= base_url('assets/img/products/' . $product->image_url) ?>" alt="product"/>
                                <div class="pro-image-overlay"></div>
                                <div class="product-action">
                                    <a href="edit-product.html" class="seipkon-btn seipkon-btn-primary">
                                        <i class="fa fa-pencil"></i>
                                        Edit
                                    </a>
                                    <a href="#" class="seipkon-btn seipkon-btn-danger">
                                        <i class="fa fa-trash"></i>
                                        Delete
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3><?= $product->{session()->get('locale') . '_name'}?></h3>
                                <h4 class="price">$ <?= $product->price ?></h4>
                            </div>
                        </div>
                        <!-- End Single Product -->
                    </div>
                <?php
                }
                ?>
            </div>
            <!-- End Product Row -->

        </div>
    </div>

    <!-- Footer Area Start -->
    <footer class="seipkon-footer-area">
        <p>Seipkon - Bootstrap Admin Template by <a href="#">Themescare</a></p>
    </footer>
    <!-- End Footer Area -->

</section>