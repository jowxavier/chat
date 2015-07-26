<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Sign in &middot; Twitter Bootstrap</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<?php echo link_tag('assets/css/bootstrap.css'); ?>
		<style type="text/css">
			body {
				/*padding-top: 40px;
				padding-bottom: 40px;*/
			}

			.form-signin {	
				max-width: 300px;
				padding: 19px 29px 29px;
				/*margin: 0 auto 20px;*/
				background-color: #fff;
				border: 1px solid #e5e5e5;
				-webkit-border-radius: 5px;
				-moz-border-radius: 5px;
				border-radius: 5px;
				-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
				-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
				box-shadow: 0 1px 2px rgba(0,0,0,.05);
			}
			
			.form-signin .form-signin-heading,
			.form-signin .checkbox {
				margin-bottom: 10px;
			}
			
			.form-signin input[type="text"],
			.form-signin input[type="password"] {
				font-size: 16px;
				height: auto;
				margin-bottom: 15px;
				padding: 7px 9px;
			}
		</style>
		<link href="css/bootstrap-responsive.css" rel="stylesheet">

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Fav and touch icons -->
		<link rel="shortcut icon" href="ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
	</head>

	<body>
		<div class="container">
			<?php 	
			echo form_open('signin', array('class' => 'form-signin'));
			    echo heading('Entrar no Chat', 2, 'class="form-signin-heading"');                
                echo form_error('nickname');
                echo form_input(array(
                    'id' => 'nickname',
                    'name' => 'nickname',
                    'value' => set_value('nickname', ''),
                    'class' => 'input-block-level',
                    'placeholder' => 'Nickname',
                    'maxlength' => 20
                ));

                // Caso for admin, informe a var $type = 'admin'
                $type = 'admin';

				echo form_hidden(array('type'  => $type));

		        $data = array(
		            'name' => 'button',
		            'id' => 'button',
		            'type' => 'submit',
		            'content' => 'Entrar',
		            'class' => 'btn btn-large btn-primary'
		        );

		        echo form_button($data);
		echo form_close(); ?>
		</div> 
	</body>
</html>
