 <!-- Back to top with progress indicator-->
 <a class="prgoress_indicator d-none" href="javascript:void(0);" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })">
    <!-- <i class="fal fa-circle-chevron-up"></i> -->
 </a>

 <!-- Load JS -->
 <script src="<?php echo HTTP_PATH; ?>/utils/jquery/dist/jquery.min.js"></script>

 <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
 <script src="<?php echo HTTP_PATH; ?>/utils/jquery-ui/ui/i18n/datepicker-vi.js"></script>

 <script src="<?php echo HTTP_PATH; ?>/utils/bootstrap/dist/js/bootstrap.bundle.js"></script>
 <script src="<?php echo HTTP_PATH; ?>/utils/slick-carousel/slick/slick.min.js"></script>
 <script src="<?php echo HTTP_PATH; ?>/utils/owl.carousel/dist/owl.carousel.min.js"></script>
 <script src="<?php echo HTTP_PATH; ?>/utils/sweetalert2/dist/sweetalert2.all.min.js"></script>
 <script src="<?php echo HTTP_PATH; ?>/utils/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
 <script src="<?php echo HTTP_PATH; ?>/utils/hc-offcanvas-nav/dist/hc-offcanvas-nav.js"></script>
 <script src="<?php echo HTTP_PATH; ?>/utils/select2/dist/js/select2.full.min.js"></script>
 <script src="<?php echo HTTP_PATH; ?>/utils/select2/dist/js/i18n/vi.js"></script>
 <script src="<?php echo HTTP_PATH; ?>/utils/datatables/datatables.min.js"></script>
 <script src="<?php echo HTTP_PATH; ?>/utils/datatables/dataTables.bootstrap5.min.js"></script>
 <script src="<?php echo HTTP_PATH; ?>/utils/cleave.js/dist/cleave.min.js"></script>
 <script src="<?php echo HTTP_PATH; ?>/utils/jquery-validation/dist/jquery.validate.min.js"></script>
 <script src="<?php echo HTTP_PATH; ?>/utils/tipsy/jquery.tipsy.js"></script>

 <!-- Page Script  -->
 <?php
    if (isset($GLOBALS["pScript"])) {
        $list_cript = $GLOBALS["pScript"];
        $arr_cript =  explode(";", $list_cript);

        if (!empty($arr_cript)) {
            foreach ($arr_cript as $item) {
                echo '<script src="' . SOURCE . $item . '"></script>';
            }
        }
    }
    ?>
 <!-- End Page Script  -->

 <script src="<?php echo HTTP_PATH; ?>/assets/js/app.js"></script>
 <script src="<?php echo HTTP_PATH; ?>/assets/js/script.js"></script>

 </html>