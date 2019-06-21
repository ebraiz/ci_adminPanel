<?php echo doctype(); ?>
<html>
  <head>
      <title>Admin Panel | Forgot Password</title>
      <?php
        $meta = array(
                array('http-equiv' => 'x-ua-compatible', 'content' => 'ie=edge'),
                array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1'),
                array('name' => 'robots', 'content' => 'no-cache'),
                array('name' => 'description', 'content' => 'Admin Panel'),
                array('name' => 'keywords', 'content' => 'Admin Panel,Panel, Administrator'),
                array('name' => 'robots', 'content' => 'no-cache'),
                array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
            );
        echo meta($meta); 
      ?>
      
      <?php echo link_tag('assets/bower_components/images/favicon.png', 'shortcut icon', 'image/ico'); ?>
      <?php echo link_tag('assets/bower_components/css/bootstrap.min.css') ?>
      <?php echo link_tag('assets/bower_components/css/style.css') ?>
  </head>

  <body>
  <div class="wrapper">
     <header class="header-area"></header> 

      <section class="reg-account login-account">
        <div class="container">
           <div class="row">
              <div class="col-md-4 col-md-offset-4 login-form">
                 <div class="panel panel-default">
                    <div class="panel-body">
                      <div class="text-center">
                        <?php echo img('assets/bower_components/images/logo.png', ['alt'=>'Logo Image']) ?>
                        <?php echo heading('Forgot Password', 3, 'class="login-heading"') ?>
                      </div>
                       <p class="login-subheading">Please enter your email address for One-Time Password</p>
                       <div class="panel-body">
                        <?php echo form_open('/', ['class'=>'form', 'id'=>'signup-form', 'role'=>'form', 'autocomplete'=>'off']) ?>
                             <div class="form-group">
                                <div class="input-group">
                                  <?php echo form_input(['type'=>'email', 'name'=>'email', 'class'=>'form-control', 'placeholder'=>'Email Address', 'id'=>'user-email', 'value'=>set_value('email')]) ?>
                                </div>
                             </div>
                             <div class="form-group">
                              <?php echo form_submit('reset', 'Reset', ['class'=>'btn btn-lg btn-primary btn-block','id'=>'forgot-btn']) ?>
                             </div>
                          </form>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
      </section>
    </div>
  </body>
</html>