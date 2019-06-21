<?php include("layouts/head.php"); ?>

   <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
         
         <?php include("layouts/header.php"); ?>
         <?php include("layouts/side_navbar.php"); ?>
         
         <div class="content-wrapper">
            <section class="content-header">
               <?php echo heading('Dashboard<small>Ads</small>', 1, 'class="title"') ?>
               <ol class="breadcrumb">
                  <li><i class="fa fa-dashboard"></i> Dashboard</li>
                  <li class="active">Ads</li>
               </ol>
            </section>
            <!-- Main content -->
            <div class="box-body">
               <div class="row">
                  <div class="col-md-6">
                     <div class="chart-responsive">
                        <canvas id="myChart1"></canvas>
                     </div>
                     <!-- ./chart-responsive -->
                  </div>
                  <div class="col-md-6">
                     <div class="chart-responsive">
                        <canvas id="myChart2"></canvas>
                     </div>
                     <!-- ./chart-responsive -->
                  </div>
                  <!-- /.col -->
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="chart-responsive">
                        <canvas id="myChart3"></canvas>
                     </div>
                     <!-- ./chart-responsive -->
                  </div>
                  <div class="col-md-6">
                     <div class="chart-responsive">
                        <canvas id="myChart4"></canvas>
                     </div>
                     <!-- ./chart-responsive -->
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
            </div>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
<?php include("layouts/javascripts.php"); ?>
<?php include("layouts/footer.php"); ?>