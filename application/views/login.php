<?php include("layouts/head.php"); ?>
    <body>
        <!-- Add your site or application content here -->
        <div class="wrapper">
            <section class="reg-account login-account">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 login-form">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <!-- <h3 class="text-center">Login</h3> -->
                                    <div class="text-center">
                                        <?php echo img('assets/bower_components/images/logo.png', ['alt'=>'Logo Image']) ?>
                                        <?php echo heading('Admin Login', 3, 'class="login-heading"') ?>
                                    </div>
                                    <p class="login-subheading">Please enter your credentials to Login.</p>

                                    <?php if( $error = $this->session->flashdata('login_failed')): ?>
                                        <div class="alert alert-danger">
                                          <strong>Error: </strong><?= $error ?>
                                        </div>
                                    <?php endif; ?>

                                    <div class="panel-body">
                                        <?php echo form_open('login/admin_login', ['class'=>'form', 'id'=>'login-form', 'role'=>'form', 'autocomplete'=>'off']) ?>
                                        
                                        <div class="form-group">
                                            <div class="input-group">
                                                <?php echo form_input(['type'=>'email', 'name'=>'email', 'class'=>'form-control', 'placeholder'=>'Email', 'id'=>'user-email','value'=>set_value('email')]) ?>
                                                <?php echo form_error('email','<div class="text-danger">','</div>') ?>
                                            </div>

                                            <div class="input-group">
                                                <a href="#" class="a_img" onclick="loginEye()">
                                                    <?php echo img(array('src'=>'assets/bower_components/images/eye.png','class'=>'img_eye')) ?>
                                                </a>
                                                    
                                                <?php echo form_password(['name'=>'password', 'class'=>'form-control', 'placeholder'=>'Password', 'id'=>'user-password']) ?>
                                                
                                                <?php echo form_error('password','<div class="text-danger">','</div>') ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <?php echo form_submit('login', 'Login', ['class'=>'btn btn-lg btn-primary btn-block','id'=>'login-btn']) ?>
                                        </div>

                                        <?php echo form_close() ?>
                                        <div class="col-md-12 col-xs-12" style="text-align:center;">
                                            <a href="forgotpassword">Forgot Password!</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script src="<?php echo base_url()?>assets/bower_components/js/form-main.js"></script>
    </body>
</html>