 <!-- Modal -->
 <div class="modal fade" id="filemanagerModal" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-dialog-full-width  modal-xl">
         <div class="modal-content modal-content-full-width">
             <div class="modal-header modal-header-full-width">
                 <h5 class="modal-title">Filemanager</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                         aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <iframe src="{{ url('rfm/filemanager/dialog.php?field_id=image') }}" frameborder="0"
                     style="width:100%;height:60vh;overflow:hidden"></iframe>
             </div>
         </div>
     </div>
 </div>

 <style>
     .modal-dialog-full-width {
         width: 100% !important;
         height: 100% !important;
         margin: 0 !important;
         padding: 0 !important;
         max-width: none !important;

     }

     .modal-content-full-width {
         height: auto !important;
         min-height: 100% !important;
         border-radius: 0 !important;
         background-color: #ececec !important
     }

     .modal-header-full-width {
         border-bottom: 1px solid #9ea2a2 !important;
     }

     .modal-footer-full-width {
         border-top: 1px solid #9ea2a2 !important;
     }

 </style>
