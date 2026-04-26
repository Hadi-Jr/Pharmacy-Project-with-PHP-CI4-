<!-- Bootstrap JS -->
<script src="<?= base_url('assets/plugins/bootstrap/bootstrap.min.js') ?>"></script>
<!-- Bootstrap-select JS -->
<script src="<?= base_url('assets/plugins/bootstrap-select/js/bootstrap-select.min.js') ?>"></script>
<!-- Daterange JS -->
<script src="<?= base_url('assets/plugins/daterangepicker/js/moment.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/daterangepicker/js/daterangepicker.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>
<!-- Jvector JS -->
<script src="<?= base_url('assets/plugins/jvector/js/jquery-jvectormap-1.2.2.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/jvector/js/jquery-jvectormap-world-mill-en.js') ?>"></script>
<script src="<?= base_url('assets/plugins/jvector/js/jvector-init.js') ?>"></script>
<!-- Raphael JS -->
<script src="<?= base_url('assets/plugins/raphael/js/raphael.min.js') ?>"></script>
<!-- Morris JS -->
<!-- <script src="<?= base_url('assets/plugins/morris/js/morris.min.js') ?>"></script> -->
<!-- Sparkline JS -->
<script src="<?= base_url('assets/plugins/sparkline/js/jquery.sparkline.js') ?>"></script>
<!-- Chart JS -->
<!-- Toggles JS -->
<script src="<?= base_url('assets/plugins/masked-input/js/jquery.maskedinput.min.js') ?>"></script>
<!-- Select2 JS -->
<script src="<?= base_url('assets/plugins/select2/js/select2.full.js') ?>"></script>
<!-- Jquery parsley JS -->
<script src="<?= base_url('assets/plugins/parsley/js/parsley.min.js') ?>"></script>

<script src="<?= base_url('assets/plugins/charts/js/Chart.js') ?>"></script>
<!-- Datatables -->
<script src="<?= base_url('assets/plugins/datatables/js/jquery.dataTables.min.js') ?>"></script>
<!-- Perfect Scrollbar JS -->
<script src="<?= base_url('assets/plugins/perfect-scrollbar/jquery-perfect-scrollbar.min.js') ?>"></script>
<!-- Vue JS -->
<script src="<?= base_url('assets/plugins/vue/vue.min.js') ?>"></script>
<!-- Jquery Steps JS -->
<script src="<?= base_url('assets/plugins/jquery-steps/js/jquery.steps.min.js') ?>"></script>
<!-- Summernote JS -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script src="<?= base_url('assets/plugins/summernote/js/custom-summernote.js') ?>"></script>
<!-- Dashboard JS -->
<!-- <script src="<?= base_url('assets/js/dashboard.js') ?>"></script> -->
<!-- Form Wizard Custom JS For Only This Page -->
<script src="<?= base_url('assets/js/form_wizard_custom.js') ?>"></script>

<!-- rater-js plugin -->
<script src="<?= base_url('assets/libs/rater-js/index.js') ?>"></script>
<!-- rating init -->
<script src="<?= base_url('assets/js/rating.init.js') ?>"></script>

<!-- Advance Component Form JS For Only This Page -->
<script src="<?= base_url('assets/js/advance_component_form.js') ?>"></script>

<!-- Datatables -->
<script src="<?= base_url('assets/plugins/datatables/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables/js/dataTables.bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables/js/buttons.bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables/js/buttons.flash.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables/js/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables/js/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables/js/responsive.bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables/js/jszip.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables/js/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables/js/vfs_fonts.js') ?>"></script>

<!-- Form Wizard Custom JS For Only This Page -->
<script src="<?= base_url('assets/js/advance_table_custom.js') ?>"></script>

<!-- Custom JS -->
<script src="<?= base_url('assets/js/seipkon.js') ?>"></script>

<script>
    $(document).ready(function() {

        $('.js-select2').each(function() {
            $(this).select2({
                placeholder: '-- Изберете опция --',
                allowClear: true,
                width: '100%'
            });
        });

    });

</script>
</body>
</html>