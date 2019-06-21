<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()?>assets/bower_components/js/jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<script>
 $(function () {
    $("#myModal_Edit_profile").on("show.bs.modal", function(e) {
        var link = $(e.relatedTarget);
        $(this).find(".modal-body").html("");
        $(this).find(".modal-body").load(link.attr("data-href"));
    });
 })
</script>

<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/bower_components/js/adminlte.min.js"></script>
<script src="<?php echo base_url()?>assets/bower_components/js/jquery.dataTables.min.js"></script>

<script>  $('title').text("Admin Panel | " + $('.title').text()); </script>
<script>
	$(document).ready( function () {
	 $('#example23').DataTable({
	    'paging':true,
	    'info':true,
	    'ordering':true,
	    'lengthMenu': [[10, 15, 20, -1], [10, 15, 20, "All"]]
	 });
	});
</script>

<script>
	$(document).ready(function() {

		//(View/layouts/header.php)
		//In Modal for Edit Administrator Profile form: Edit Button, Confirm Pass, New Pass fields will be hidden.
		$('.add-attr, .cpass, .npass').hide();

		//OnClick Function for Adding Attribute Starts here.
		$('.add-attr').click(function(){

		   	//(View/layouts/header.php)
			//In Modal for Edit Administrator Profile form: Edit Button, Confirm Pass, New Pass fields will be hidden when button with class ".add-attr" will be clicked.
		    $('.add-attr, .cpass, .npass').hide();
		    $('input').attr('readonly','readonly'); //Readonly when Update Button is clicked.
		    $('.remove-attr').show(); // Show EDIT button when Update button is clicked.
		});
		//OnClick Function for Adding Attribute Ends here.
		
//----------------------------//--------------------------//--------------------------//
		
		//OnClick Function for Removing Attribute Starts here.
		$('.remove-attr').click(function(){            
		   $('.remove-attr').hide();

		   //This class will Enabled the file upload field.
		   $('.Edit_Upload').removeAttr('disabled', 'disabled');

		   	//(View/layouts/header.php)
			//In Modal for Edit Profile form: Edit Button, Confirm Pass and New Pass fields are visible and all input fields will be editable when EDIT Button will be clicked.
		   $('.add-attr, .cpass, .npass').show(); 
		   $('input').removeAttr('readonly','readonly'); //Make fields editable when EDIT button is clicked.
		   $('.readonly').attr('readonly','readonly'); //Make text field with upload file permenantly readonly
		});
	});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
        	$('#upload_picture,#upload_logo').attr('placeholder',input.files[0].name);
	    	/* $('#user_image').attr('src', e.target.result);*/
     	};
        reader.readAsDataURL(input.files[0]);
    }
}
</script>

<?php
//echo $result = basename($_SERVER['PHP_SELF']);
$result = $this->router->fetch_class();

//Including JavaScript files for Text Editor
if ($result == "cm_term" || $result == "cm_privacy" || $result == "cm_how"){ ?>
	<script src="<?php echo base_url()?>assets/bower_components/js/ckeditor/ckeditor.js"></script>

<?php }else{}

//Including JavaScript files for Charts in index.php and dashboard_events.php page.
if($result == "dashboard_users" || $result == "dashboard_ads"){ ?>

	<script src='<?php echo base_url()?>assets/bower_components/js/Chart.bundle.js'></script>
	<script src='<?php echo base_url()?>assets/bower_components/js/utils.js'></script>

<?php }else{} ?>

<?php if($result == "dashboard_users"){ ?>

	<script>
		$('.dashboard_users').parents('.treeview').addClass('menu-open');
		$('.dashboard_users').parents('.treeview-menu').css({'display':'block'});
		$('.dashboard_users').addClass('active');
		$('.dashboard').addClass('active');
		$('.user_management').removeClass('active');

		var ctx = document.getElementById('myChart1').getContext('2d');
		var myChart = new Chart(ctx, {
		    type: 'bar',
		    data: {
		        labels: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN'],
		        datasets: [{
		            label: '# of Votes',
		            data: [12, 19, 3, 5, 2, 4],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		                'rgba(153, 102, 255, 0.2)',
		                'rgba(255, 159, 64, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255,99,132,1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		                'rgba(153, 102, 255, 1)',
		                'rgba(255, 159, 64, 1)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		});

		var ctx = document.getElementById('myChart2').getContext('2d');
		var myChart = new Chart(ctx, {
		    type: 'line',
		    data: {
		        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
		        datasets: [{
		            label: '# of Votes',
		            data: [12, 19, 3, 5, 2, 3],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		                'rgba(153, 102, 255, 0.2)',
		                'rgba(255, 159, 64, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255,99,132,1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		                'rgba(153, 102, 255, 1)',
		                'rgba(255, 159, 64, 1)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		});

		var ctx = document.getElementById('myChart3').getContext('2d');
		var myChart = new Chart(ctx, {
		    type: 'pie',
		    data: {
		        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
		        datasets: [{
		            label: '# of Votes',
		            data: [12, 19, 3, 5, 2, 3],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		                'rgba(153, 102, 255, 0.2)',
		                'rgba(255, 159, 64, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255, 99, 132, 1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		                'rgba(153, 102, 255, 1)',
		                'rgba(255, 159, 64, 1)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		});

		var ctx = document.getElementById('myChart4').getContext('2d');
		var myChart = new Chart(ctx, {
		    type: 'horizontalBar',
		    data: {
		        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
		        datasets: [{
		            label: '# of Votes',
		            data: [12, 19, 3, 5, 2, 3],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		                'rgba(153, 102, 255, 0.2)',
		                'rgba(255, 159, 64, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255,99,132,1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		                'rgba(153, 102, 255, 1)',
		                'rgba(255, 159, 64, 1)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		});
	</script>

<?php }elseif ($result == "dashboard_ads"){ ?>

	<script>
		$('.dashboard_ads').parents('.treeview').addClass('menu-open');
		$('.dashboard_ads').parents('.treeview-menu').css({'display':'block'});
		$('.dashboard_ads').addClass('active');
		$('.dashboard').addClass('active');
		$('.user_management').removeClass('active');
		var ctx = document.getElementById('myChart1').getContext('2d');
		var myChart = new Chart(ctx, {
		    type: 'bar',
		    data: {
		        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
		        datasets: [{
		            label: '# of Votes',
		            data: [12, 19, 3, 5, 2, 3],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		                'rgba(153, 102, 255, 0.2)',
		                'rgba(255, 159, 64, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255,99,132,1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		                'rgba(153, 102, 255, 1)',
		                'rgba(255, 159, 64, 1)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		});

		var ctx = document.getElementById('myChart2').getContext('2d');
		var myChart = new Chart(ctx, {
		    type: 'line',
		    data: {
		        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
		        datasets: [{
		            label: '# of Votes',
		            data: [12, 19, 3, 5, 2, 3],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		                'rgba(153, 102, 255, 0.2)',
		                'rgba(255, 159, 64, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255,99,132,1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		                'rgba(153, 102, 255, 1)',
		                'rgba(255, 159, 64, 1)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		});

		var ctx = document.getElementById('myChart3').getContext('2d');
		var myChart = new Chart(ctx, {
		    type: 'pie',
		    data: {
		        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
		        datasets: [{
		            label: '# of Votes',
		            data: [12, 19, 3, 5, 2, 3],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		                'rgba(153, 102, 255, 0.2)',
		                'rgba(255, 159, 64, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255,99,132,1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		                'rgba(153, 102, 255, 1)',
		                'rgba(255, 159, 64, 1)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		});

		var ctx = document.getElementById('myChart4').getContext('2d');
		var myChart = new Chart(ctx, {
		    type: 'horizontalBar',
		    data: {
		        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
		        datasets: [{
		            label: '# of Votes',
		            data: [12, 19, 3, 5, 2, 3],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		                'rgba(153, 102, 255, 0.2)',
		                'rgba(255, 159, 64, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255,99,132,1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		                'rgba(153, 102, 255, 1)',
		                'rgba(255, 159, 64, 1)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		});
	</script>

<?php }elseif ($result == "categories_management"){ ?>

    <script>
		$('.categories_management').parents('.treeview').addClass('menu-open');
		$('.categories_management').parents('.treeview-menu').css({'display':'block'});
		$('.categories_management').addClass('active');
		$('.user_management').removeClass('active');
	</script>

<?php }elseif ($result == "ads_management"){ ?>

	<script>
		$('.ads_management').parents('.treeview').addClass('menu-open');
		$('.ads_management').parents('.treeview-menu').css({'display':'block'});
		$('.ads_management').addClass('active');
	</script>
	<script src='<?php echo base_url()?>assets/bower_components/js/imageGallery.js'></script>

<?php }elseif ($result == "jmmao_store"){ ?>
	<script>
		$('.jmmao_store').parents('.treeview').addClass('menu-open');
		$('.jmmao_store').parents('.treeview-menu').css({'display':'block'});
		$('.jmmao_store').addClass('active');
		$('input[name="daterange"]').daterangepicker({
		opens: 'left'
		}, function(start, end, label) {
			console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
		});
	</script>	

<?php }elseif ($result == "user_management"){ ?>

	<script>
		$('.user_management').parents('.treeview').addClass('menu-open');
		$('.user_management').parents('.treeview-menu').css({'display':'block'});
		$('.user_management').addClass('active');
	</script>
	<script src='<?php echo base_url()?>assets/bower_components/js/rowDetails.js'></script>
	<script src='<?php echo base_url()?>assets/bower_components/js/imageGallery.js'></script>

<?php }elseif ($result == "cm_term"){ ?>
	
	<script>
		$('.cm_term').parents('.treeview').addClass('menu-open');
		$('.cm_term').parents('.treeview-menu').css({'display':'block'});
		$('.cm_term').addClass('active');
		$('.content_management').addClass('active');
	</script>

<?php }elseif ($result == "cm_how"){ ?>
	
	<script>
		$('.cm_how').parents('.treeview').addClass('menu-open');
		$('.cm_how').parents('.treeview-menu').css({'display':'block'});
		$('.cm_how').addClass('active');
		$('.content_management').addClass('active');
	</script>

<?php }elseif ($result == "cm_privacy"){ ?>
	
	<script>
		$('.cm_privacy').parents('.treeview').addClass('menu-open');
		$('.cm_privacy').parents('.treeview-menu').css({'display':'block'});
		$('.cm_privacy').addClass('active');
		$('.content_management').addClass('active');
	</script>

<?php } else{} ?>
