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
        <div class="">
            <a href="<?= base_url('/') ?>">
                <img width="100px" style="margin: 0 auto;float: left; position: relative; z-index: 1; margin: 5px 0 0 15px;" class="img-responsive"
                     src="<?= base_url('assets/img/logo.png') ?>" alt="logo">
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
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- Collapse Menu Btn End -->

                    </div>
                    <div class="header-top-right-section pull-right">
                        <ul class="nav nav-pills nav-top navbar-right">
                            <!-- Profile Toggle Start -->
                            <li class="dropdown">
                                <div class="profile-box dropdown-menu animated bounceIn">
                                    <ul>
                                        <li>
                                            <a href="<?= base_url('/profile/view') ?>">
                                                <i class="fa fa-user"></i> <?= lang('App.login') ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Profile Toggle End -->
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Header Top End -->

    </header>
    <!-- Main Header End -->
