<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->

<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Main Header Start -->
    <header class="main-header">
        <!-- Logo Start -->
        <div class="seipkon-logo">
            <a href="<?= base_url('/') ?>">
                <img class="img-responsive"
                     src="assets/img/8796168978462.svg" alt="logo">
            </a>
        </div>
        <!-- Logo End -->

        <!-- Header Top Start -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="header-top-section">

                    <div class="pull-left">
                        <!-- Collapse Menu Btn Start -->
                        <button type="button" id="sidebarCollapse" class=" navbar-btn">
                            <i class="fa-solid fa-layer-group"></i>
                            <?= lang('App.categories') ?>
                        </button>

                        <a style="color: #f83a3a; cursor:pointer; margin-left: 50px; margin-right: 20px;">
                            <i class="fa-solid fa-tag"></i>
                            <?= lang('App.promotions') ?>
                        </a>
                        <a style="color: #3d3b3b; cursor:pointer; margin-right: 20px;">
                            <?= lang('App.new_products') ?>
                        </a>
                        <div class="header-top-search" bis_skin_checked="1">
                            <form>
                                <input type="search" placeholder="Search...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="header-top-right-section pull-right">
                        <div style="margin-top: 8px; padding: 14px;">
                            <a style="cursor: pointer; font-size: 22px; margin-right: 10px;">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                            <a style="cursor: pointer; font-size: 22px;">
                                <i class="fa-solid fa-user"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Header Top End -->
    </header>
    <!-- Main Header End -->

    <?= view('sidebar/sidebar') ?>
