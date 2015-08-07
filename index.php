<?php
include('./form_input-function.php');
$reg_errors=array();
?>
<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

      
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
        <style>
        html{
        	margin: 0 auto;
        	text-align: center;
        }
        
        .form{
        	margin: 2em auto;
        	padding: 0 2em;
        	text-align: left;
        }
        </style>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <h3>Creation du formulaire</h3>
        <form method="post" action="index.php" class="form">
        <?php
        // creation du formulaire 
        create_form_input('name','text','Name', $reg_errors);
        create_form_input('email','text','Email', $reg_errors, array('placeholder'=>'Votre email'));
        create_form_input('comment','textarea','Comment', $reg_errors, array('maxlength'=>140));
        ?>
        <input type="submit" name="submit" value="Go" class="btn btn-default"/>
        </form>
        
<h3>Recuperation du formulaire</h3>


<form method="post" action="" class="form">

<?php 
print_r( 'les donnees : ' .$_POST);
//affectation de base mais peut etre en liaison d'une base de donnees pour faire un update.
$_GET['name'] = $_POST['name'];
$_GET['email'] = $_POST['email'];
$_GET['comment'] = $_POST['comment'];

// Recuperation des donnees avec la function 
make_Text_Input('name', 'text', 'Name', $reg_error);
make_Text_Input('email','text','Email', $reg_errors, array('placeholder'=>'Votre email') );
make_Text_Input('comment','textarea','Comment', $reg_errors, array('maxlength'=>140));
?>
</form>

            </body>
</html>
