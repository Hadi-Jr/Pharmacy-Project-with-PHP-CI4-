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
                                    <h3><?= $category_name ?></h3>
                                </div>
                            </div>
                            <div class="col-md-6  col-sm-6">
                                <div class="seipkon-breadcromb-right">
                                    <ul>
                                        <li><a href="<?= base_url('/') ?>">home</a></li>
                                        <li>categories</li>
                                        <li><?= strtolower($category_name) ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Breadcromb Row -->
            <div class="empty-category">
                <p><?= lang('App.empty_cat_message') ?></p>
            </div>

        </div>
    </div>
</section>