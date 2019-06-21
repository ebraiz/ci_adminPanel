<aside class="main-sidebar fixed">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
   
   <!-- sidebar menu: : style can be found in sidebar.less -->
   <ul class="sidebar-menu" data-widget="tree">
      <li class="treeview dashboard">
         <?php echo anchor('#', '<i class="fa fa-dashboard"></i> <span>Dashboard</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>') ?>

         <ul class="treeview-menu">
            <li class="dashboard_users">
               <?php echo anchor('dashboard_users', '<i class="fa fa-circle-o"></i> Users\'') ?>
            </li>
            <li class="dashboard_ads">
               <?php echo anchor('dashboard_ads', '<i class="fa fa-circle-o"></i> Ads') ?>
            </li>
         </ul>

      </li>

      <li class="user_management">
         <?php echo anchor('user_management', '<i class="fa fa-user-o"></i> <span>Users\' Management</span>') ?>
      </li>

      <li class="categories_management">
         <?php echo anchor('categories_management', '<i class="fa fa fa-list"></i> <span>Categories\' Management</span>') ?>
      </li>

      <li class="ads_management">
         <?php echo anchor('ads_management', '<i class="fa fa-buysellads"></i> <span>Ads\' Management</span>') ?>
      </li>

      <li class="jmmao_store">
         <?php echo anchor('jmmao_store', '<i class="fa fa-shopping-cart"></i> <span>JMMAO Store</span>') ?>
      </li>

      <li class="treeview content_management">
         <?php echo anchor('#', '<i class="fa fa-file"></i> <span>Content Management</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>') ?>

         <ul class="treeview-menu">
            <li class="cm_term">
               <?php echo anchor('cm_term', '<i class="fa fa-circle-o"></i> Terms and Conditions') ?>
            </li>

            <li class="cm_privacy">
               <?php echo anchor('cm_privacy', '<i class="fa fa-circle-o"></i> Privacy Policy') ?>
            </li>

            <li class="cm_how">
               <?php echo anchor('cm_how', '<i class="fa fa-circle-o"></i> How to use?') ?>
            </li>
         </ul>
      </li>

      <li class="google_analytics">
         <?php echo anchor('#', '<i class="fa fa-area-chart"></i> <span>Google Analytics</span>') ?>
      </li>

      <li class="crashlytics">
         <?php echo anchor('#', '<i class="fa fa-asterisk"></i> <span>Crashlytics</span>') ?>
      </li>
   </ul>

</section>
<!-- /.sidebar -->
</aside>
