<?php include("layouts/head.php"); ?>

   <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
         
         <?php include("layouts/header.php"); ?>
         <?php include("layouts/side_navbar.php"); ?>
         
         <div class="content-wrapper">
            <section class="content-header">
               <?php echo heading('Privacy Policy', 1, 'class="title"') ?>
               <ol class="breadcrumb">
                  <li><i class="fa fa-dashboard"></i> Content Management</li>
                  <li class="active">Privacy Policy</li>
               </ol>
            </section>
            <div class="page-wrapper padding25">
               
               <!-- Main content -->
               <div class="container-fluid">
                  <?php echo form_open_multipart('/') ?>
                  <?php echo form_textarea(['name'=>'editor', 'class'=>'ckeditor']) ?>
                  <?php echo form_close() ?>
                  <div class="text-center padding20">
                     <?php echo form_button('','Save', ['class'=>'btn btn-success']) ?>
                  </div>
               </div>
               <!-- /.content -->
            </div>
         </div>
         <!-- /.content-wrapper -->

<?php include("layouts/javascripts.php"); ?>
<?php include("layouts/footer.php"); ?>