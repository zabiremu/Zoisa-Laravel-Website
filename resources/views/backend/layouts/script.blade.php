 <!-- JQUERY JS -->
 <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>

 <!-- BOOTSTRAP JS -->
 <script src="{{ asset('backend/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
 <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

 <!-- SIDE-MENU JS-->
 <script src="{{ asset('backend/assets/plugins/sidemenu/sidemenu.js') }}"></script>

 <!-- APEXCHART JS -->
 <script src="{{ asset('backend/assets/js/apexcharts.js') }}"></script>

 <!-- INTERNAL SELECT2 JS -->
 <script src="{{ asset('backend/assets/plugins/select2/select2.full.min.js') }}"></script>

 <!-- CHART-CIRCLE JS-->
 <script src="{{ asset('backend/assets/js/circle-progress.min.js') }}"></script>

 <!-- INTERNAL DATA-TABLES JS-->
 <script src="{{ asset('backend/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('backend/assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
 <script src="{{ asset('backend/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>

 <!-- INDEX JS -->
 <script src="{{ asset('backend/assets/js/index1.js') }}"></script>

 <!-- REPLY JS-->
 <script src="{{ asset('backend/assets/js/reply.js') }}"></script>

 <!-- PERFECT SCROLLBAR JS-->
 <script src="{{ asset('backend/assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
 <script src="{{ asset('backend/assets/plugins/p-scroll/pscroll.js') }}"></script>

 <!-- STICKY JS -->
 <script src="{{ asset('backend/assets/js/sticky.js') }}"></script>

 <!-- COLOR THEME JS -->
 <script src="{{ asset('backend/assets/js/themeColors.js') }}"></script>

 <!-- CUSTOM JS -->
 <script src="{{ asset('backend/assets/js/custom.js') }}"></script>

 <!-- DATA TABLE JS-->
 <script src="{{ asset('backend/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('backend/assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
 <script src="{{ asset('backend/assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
 <script src="{{ asset('backend/assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
 <script src="{{ asset('backend/assets/plugins/datatable/js/jszip.min.js') }}"></script>
 <script src="{{ asset('backend/assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
 <script src="{{ asset('backend/assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
 <script src="{{ asset('backend/assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
 <script src="{{ asset('backend/assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
 <script src="{{ asset('backend/assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
 <script src="{{ asset('backend/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
 <script src="{{ asset('backend/assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
 <script src="{{ asset('backend/assets/js/table-data.js') }}"></script>

 {{-- sweet alert --}}
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 {{-- FONT AWESOME LINK --}}
 <script src="https://kit.fontawesome.com/622cc589c6.js" crossorigin="anonymous"></script>

 {{-- validate main.js --}}
 <script src="{{ asset('backend/assets/js/validate.min.js') }}"></script>

 <!-- INTERNAL Summernote Editor js -->
 <script src="{{ asset('backend/assets/plugins/summernote-editor/summernote1.js') }}"></script>
 <script src="{{ asset('backend/assets/js/summernote.js') }}"></script>

 {{-- tagify js --}}
 <script src="{{ asset('backend/assets/js/jQuery.tagify.min.js') }}"></script>

 {{-- Toast --}}
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 <script>
     @if (Session::has('message'))
         var type = "{{ Session::get('alert-type', 'info') }}"
         switch (type) {
             case 'info':
                 toastr.info("{{ Session::get('message') }}");
                 break;
             case 'success':
                 toastr.success("{{ Session::get('message') }}");
                 break;
             case 'warning':
                 toastr.warning("{{ Session::get('message') }}");
                 break;
             case 'error':
                 toastr.error("{{ Session::get('message') }}");
                 break;
         }
     @endif
 </script>
 {{-- Custom Js Link --}}
 @stack('script')
 </body>

 </html>
