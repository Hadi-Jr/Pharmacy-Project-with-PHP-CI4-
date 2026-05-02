<!-- Login Page Header Area Start -->
<div class="seipkon-login-page-header-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="login-page-logo">
                    <a href="<?= base_url('/') ?>">
                        <img style="width: 200px" src="<?= base_url('assets/img/logo/random-logo3-removebg-preview.png') ?>" alt="Seipkon Logo" />
                    </a>
                </div>
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="login-page-logo-right">
                    <form class="lang-dropdown-form">
                        <select name="language" class="lang-select">
                            <option value="en" <?= session()->get('locale') === 'en' ? 'selected' : '' ?>>
                                English
                            </option>
                            <option value="de" <?= session()->get('locale') === 'de' ? 'selected' : '' ?>>
                                Deutsch
                            </option>
                            <option value="bg" <?= session()->get('locale') === 'bg' ? 'selected' : '' ?>>
                                Български
                            </option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Page Header Area End -->

<!-- Login Form Start -->
<div class="seipkon-login-form-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-form-box">
                    <h3><?= lang('App.login') ?></h3>
                    <form id="login_form" action="">
                        <div class="form-group">
                            <input type="text" name="email" placeholder="<?= lang('App.email_username_placeholder') ?>" class="form-control" required >
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="<?= lang('App.password_placeholder') ?>" class="form-control" required >
                        </div>
                        <div class="form-group form-checkbox">
                            <p class="lost-pass pull-left">
                                <?= lang('App.no_account_yet') ?>
                                <a href="<?= base_url('register') ?>">
                                    <?= lang('App.register_here') ?>
                                </a>
                            </p>

                            <p class="lost-pass pull-right">
                                <a href="#">
                                    <?= lang('App.forgot_password') ?>
                                </a>
                            </p>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="response_hldr"></div>
                                    <div class="form-layout-submit">
                                        <button type="button" class="login_button">
                                            <?= lang('App.login') ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
   $(document).ready(function () {
       $('.login_button').on('click', function () {
           var form_data = $('#login_form').serializeArray();

           $.ajax({
               url: '<?= base_url('login') ?>',
               data: form_data,
               type: 'post',
               success: function (response) {
                   $('#response_hldr').empty().html(response);
                   setTimeout(function () {
                       window.location.href = "<?= base_url('/') ?>"
                   }, 2000);
               }
           });
       });
   });
</script>
<script>
    $(document).ready(function() {
        $('select[name="language"]').on('change', function () {
            var locale = $(this).val();

            $.ajax({
                url: '<?= base_url('language/switch') ?>',
                type: 'post',
                data: {
                    'locale': locale
                },
                success: function() {
                    location.reload();
                },
            });
        });
    });
</script>
