<!DOCTYPE html>
<!--
   This is a starter template page. Use this page to start your new project from
   scratch. This page gets rid of all links and provides the needed markup only.
   -->
<html lang="en">
   @section('htmlheader')
   @include('adminlte::layouts.partials.htmlheader')
   @show
   <!--
      BODY TAG OPTIONS:
      =================
      Apply one or more of the following classes to get the
      desired effect
      |---------------------------------------------------------|
      | SKINS         | skin-blue                               |
      |               | skin-black                              |
      |               | skin-purple                             |
      |               | skin-yellow                             |
      |               | skin-red                                |
      |               | skin-green                              |
      |---------------------------------------------------------|
      |LAYOUT OPTIONS | fixed                                   |
      |               | layout-boxed                            |
      |               | layout-top-nav                          |
      |               | sidebar-collapse                        |
      |               | sidebar-mini                            |
      |---------------------------------------------------------|
      -->

   <body class="skin-blue sidebar-mini">
      <div id="app">
      <div class="wrapper">
	  
      @include('adminlte::layouts.partials.mainheader')
      @include('adminlte::layouts.partials.sidebar')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
	  
         <!-- Main content -->
         <section class="content">
            <div class="row">
               <div class="col-md-12">
                  <div class="box">
                     <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-share-square-o" aria-hidden="true"></i> Actualizar CSV Recibo Maximo </h3>
                        <div class="box-tools pull-right">
                           <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                           </button>
                           <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                     </div>
                     <!-- /.box-header -->
                     <div class="box-body">
                        <div class="row">
                           <div class="col-md-12">
						
						       
                              <div id="LayOut" style ="overflow-x:scroll">
                                 @include('adminlte::layouts.LayOuts.Empresa.Frialsa Villagran II')
                              </div>
<script>
function launchFullScreen(element) {
  if(element.requestFullScreen) {
    element.requestFullScreen();
  } else if(element.mozRequestFullScreen) {
    element.mozRequestFullScreen();
  } else if(element.webkitRequestFullScreen) {
    element.webkitRequestFullScreen();
  }
}


function cancelFullscreen() {
  if(document.cancelFullScreen) {
    document.cancelFullScreen();
  } else if(document.mozCancelFullScreen) {
    document.mozCancelFullScreen();
  } else if(document.webkitCancelFullScreen) {
    document.webkitCancelFullScreen();
  }
}


</script>

                           </div>
                        </div>
                     </div>
                     <!-- /.box-footer -->
                  </div>
                  <!-- Your Page Content Here -->
         </section>
         <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         @include('adminlte::layouts.partials.controlsidebar')
         @include('adminlte::layouts.partials.footer')
         </div>
         <!-- ./wrapper -->
      </div>
      @section('scripts')
      @include('adminlte::layouts.partials.scripts')
      @show
   </body>
   
</html>