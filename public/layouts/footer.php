 <?php
    global $debugbarRenderer;
    echo $debugbarRenderer->render();
    ?>
 <?php $temp = Template::find(1); ?>
 <div class="footer-wrapper">
     <div class="footer-section f-section-1">
         <p class=""></p>
     </div>
     <div class="footer-section f-section-2">
         <p class="">Copyright © <?= date('Y') ?> <?= $temp->sitename ?>, All rights reserved.</p>
     </div>
 </div>
 </div>
 <!--  END CONTENT PART  -->

 </div>
 <!-- END MAIN CONTAINER -->

 <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
 <script src="<?= TP_BACK ?>assets/js/libs/jquery-3.1.1.min.js"></script>
 <script src="<?= TP_BACK ?>bootstrap/js/popper.min.js"></script>
 <script src="<?= TP_BACK ?>bootstrap/js/bootstrap.min.js"></script>
 <script src="<?= TP_BACK ?>plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 <script src="<?= TP_BACK ?>assets/js/app.js"></script>

 <script>
     $(document).ready(function() {
         App.init();

     });
 </script>
 <script src="<?= TP_BACK ?>assets/js/custom.js"></script>
 <!-- END GLOBAL MANDATORY SCRIPTS -->
 <script>
     $(document).ready(function() {
    
         $('#zero-config').DataTable({
             "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                 "<'table-responsive'tr>" +
                 "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
             "oLanguage": {
                 "oPaginate": {
                     "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                     "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                 },
                 "sInfo": "Showing page _PAGE_ of _PAGES_",
                 "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                 "sSearchPlaceholder": "Search...",
                 "sLengthMenu": "Results :  _MENU_",
             },
             "stripeClasses": [],
             "lengthMenu": [7, 10, 20, 50],
             "pageLength": 7
         });
     });
 </script>
 <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
 <script src="<?= TP_BACK ?>plugins/apex/apexcharts.min.js"></script>
 <script src="<?= TP_BACK ?>assets/js/dashboard/dash_2.js"></script>

 <script src="<?= TP_BACK ?>assets/js/forms/bootstrap_validation/bs_validation_script.js"></script>

 <script src="assets/js/scrollspyNav.js"></script>
 <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
 <?php

    if (isset($_GET['pname'], $_GET['action'])) {
        // echo $_GET['pname'];
        if ($_GET['pname'] == "menus" || $_GET['pname'] == "logfile") {
            Menus::hd_script();
        } else {
            if (class_exists($_GET['pname'])) {
                $_GET['pname']::hd_script();
            } else {
                redirect_to(BASE_PATH . "public" . DS . "admin");
            }
        }
    } else {
        Template::hd_script();
        Template::other_script();
    }

    ?>

 </body>

 </html>