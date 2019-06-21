
<header class="main-header fixed">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>P</span>
      <!-- logo for regular state and mobile devices -->

      <span class="logo-lg"><?php echo img(array('src'=>'assets/bower_components/images/logo.png','class'=>'logo-pic', 'alt'=>'Admin Panel Logo')) ?><b>Admin Panel</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-fixed-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <?php echo img(array('src'=>'assets/bower_components/images/user2-160x160.jpg','class'=>'user-image', 'alt'=>'User Image')) ?>

              <span class="hidden-xs">Administrator</span>
            </a>
            <ul class="dropdown-menu">

              <!-- User image -->
              <li class="user-header">
              <?php echo img(array('src'=>'assets/bower_components/images/user2-160x160.jpg','class'=>'img-circle', 'alt'=>'User Image')) ?>

                <p>
                  Admin User
                  <small>admin_user@technado.co</small>
                </p>
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <?php echo anchor("#",'Profile', ['class'=>'btn btn-default btn-flat', 'data-toggle'=>'modal', 'data-target'=>'#myModal_Edit_profile', 'data-href'=>"edit_profile/show_profile_details/{$this->session->userdata('user_id')}"]) ?>
                </div>
                <div class="pull-right">
                  <?= anchor('login/logout','Sign out ', ['class' => 'btn btn-default btn-flat']) ?>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Modal Form Edit Administrator Profile-->
  <div class="modal fade" id="myModal_Edit_profile" role="dialog">
   <div class="modal-dialog">
   
    <!-- Modal content-->
    <div class="modal-content">
      <?php echo form_open_multipart('edit_profile/edit_profile_details') ?>
      <div class="modal-header">
        <?php echo form_button('','&times', ['class'=>'close', 'data-dismiss'=>'modal']) ?>
        <?php echo heading('Edit Profile', 3, 'class="modal-title"') ?>
      </div> 
      <div class="modal-body"></div>
      <div class="modal-footer">
        <?php echo form_submit('','Update', ['class'=>'btn btn-success add-attr']) ?>
        <?php echo form_button('','Edit', ['class'=>'btn btn-primary remove-attr']) ?>
        <?php echo form_button('','Close', ['class'=>'btn btn-default', 'data-dismiss'=>'modal']) ?>
      </div>
      <?php echo form_close() ?>
    </div>
   </div>
  </div>