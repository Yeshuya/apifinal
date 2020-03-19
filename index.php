<?php 
$navigation = (isset($_GET['navigation']) && $_GET['navigation'] != '') ? $_GET['navigation']: '';
//credits: john paul maja :D <3

  include('google/google-confirm.php');
  if($login_button == true){
    include('facebook/facebook-confirm.php');
  }
?>


<html> 
    <head>
      <title> API INVENTORY </title>
		  <link rel="stylesheet" type="text/css" href="css/styles_index.css">
    </head> 
    <body>
      <div class="header">
        <a href="index.php"><h3> API INVENTORY </h3></a>
      </div>

      <div class="topnav_container">
	  <div class="topnav">
		<div class="dropdown">
			<button class="dropbtn">Product
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<a href="index.php?navigation=product">Manage Product</a>
				<a href="index.php?navigation=create">Add Product</a>
			</div>
		  </div>
		  <a href="index.php?navigation=categories">Category</a>
		  <a href="index.php">Account</a>
	  </div>
      </div>
      
      <div class="content">
        <?php //google ------ credits: john paul maja :D <3
        if($login_button == ''){
          switch($navigation){
            case 'product':
              require_once 'product.php';
              break;
            case 'categories':
              require_once 'categories.php';
              break;
            case 'create':
              require_once 'form_create.php';
              break;
            case 'details':
              require_once 'product-details.php';
              break;
            case 'update':
              require_once 'form_update.php';
              break;
	    case 'delete':
              require_once 'deleteproduct.php';
              break;
            default:
              require_once 'home.php';
              break;
          }
        }else{
          echo '<div align="center">'.$login_button . '</div>';
        }

        ?>
        <br>
        <?php //facebook
            if(isset($facebook_login_url)){
            echo '<div align="center">' .$facebook_login_url. '</div>';
            }else{
              switch($navigation){
                case 'product':
                  require_once 'product.php';
                  break;
                case 'categories':
                  require_once 'categories.php';
                  break;
                case 'create':
                  require_once 'form_create.php';
                  break;
                case 'details':
                  require_once 'product-details.php';
                  break;
                case 'update':
                  require_once 'form_update.php';
                  break;
		case 'delete':
              	  require_once 'deleteproduct.php';
                  break;
                default:
                  require_once 'home.php';
                  break;
              }
            }
        ?>
      </div>
    </body>
</html>




