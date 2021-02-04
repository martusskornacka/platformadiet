<?php include('config.php')  ?>
<?php 
 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: sign.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: sign.php");
  }
  $results = mysqli_query($db, "SELECT * FROM profile as p inner join users as u  on p.id=u.id");
  $users = mysqli_fetch_all($results, MYSQLI_ASSOC);
 
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta http-equiv="Content-Language" content="pl" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="dashboard.css" />
    <link rel="stylesheet" href="diet.css" />
    <link href="https://vjs.zencdn.net/7.10.2/video-js.css" rel="stylesheet" />


    <title>Jadłospisy</title>
  </head>
  <body >

<div class="main-container">

    <!-- HEADER -->
    <header class="block">
    <ul class="header-menu horizontal-list">
    <li>
                <a class="header-menu-tab" href="index.php"><span class="icon fontawesome-envelope scnd-font-color"></span>Panel</a>
    </li>   
    <li>
                <a class="header-menu-tab" href="inbox.php"><span class="icon fontawesome-envelope scnd-font-color"></span>Wiadomości</a>
    </li>
    <li>
                <a class="header-menu-tab" href="nowosci.php"><span class="icon entypo-paper-plane scnd-font-color"></span>Nowości</a> 
            </li>
            <li>
                <a class="header-menu-tab" href="training.php"><span class="icon entypo-calendar scnd-font-color"></span>Plan Treningowy</a>
            </li>
            <li>
                <a class="header-menu-tab" href="diet.php"><span class="icon entypo-cog scnd-font-color"></span>Jadłospisy</a>
            </li>
            <li>
                <a class="header-menu-tab" href="#13"><span class="icon entypo-chart-line scnd-font-color"></span>Statystyki</a>
            </li>
        </ul>
        <?php  if (isset($_SESSION['username'])) : ?>
        <div class="profile-menu">
            <p> <?php echo $_SESSION['username']; ?>
        </p>
      
            <div class="profile-picture small-profile-picture">
            <img src="<?php echo 'images/' . $user['profile_image'] ?>" width="40px" alt="">            </div>
            <p><a class="menu-box-tab" href="logout.php"><span class="fas fa-sign-out-alt" ></span></a></p>
        </div>
     
        <?php endif ?> 
    </header>
    <div class="container-fluid">
      <!-- search -->

        <div id="myPlan">
        <!-- the newest movie -->
        <div class="row" style=" justify-content: center">
       <div class="col-12 newDiet">

       <div class="photo">
        <img src="images/dietPlan.svg" alt="" width=150px height=150px/>
      <div class="description">
        <h3>Lorem ipsum</h3>  
      <br/>
      <p style="clear:both">hehehehheehehhehehehheheh</p>
        </div>
    </div> 
    <div class="downDiet">
        <a href="" download><i class="fas fa-file-download"></i> Pobierz jadłospis
  
</a>
        </div>
  </div>
       </div>
        </div>
        <!-- end -->
         <!-- I row -->
         <div class="wszystkie">
    <div class="row" >
        <div class="col-4 dietDay">
<div class="photo">
        <img src="images/dietPlan.svg" alt="" width=150px height=150px/>
      <div class="description">
        <h3>Lorem ipsum</h3>  
      <br/>
      <p style="clear:both">hehehehheehehhehehehheheh</p>
        </div>
    </div>
    <div class="downDiet">
        <a href="" download><i class="fas fa-file-download"></i> Pobierz jadłospis
  
</a>
        </div>
      </div>
        <div class="col-4 dietDay">
        
  <div class="photo">
        <img src="images/dietPlan.svg" alt="" width=150px height=150px/>
      <div class="description">
        <h3>Lorem ipsum</h3>  
      <br/>
      <p style="clear:both">hehehehheehehhehehehheheh</p>
        </div>
    </div>
    <div class="downDiet">
        <a href="" download><i class="fas fa-file-download"></i> Pobierz jadłospis
  
</a>
        </div>
</div> 
        
        <div class="col-4 dietDay">
  
  <div class="photo">
        <img src="images/dietPlan.svg" alt="" width=150px height=150px/>
      <div class="description">
        <h3>Lorem ipsum</h3>  
      <br/>
      <p style="clear:both">hehehehheehehhehehehheheh</p>
        </div>
    </div>
    <div class="downDiet">
        <a href="" download><i class="fas fa-file-download"></i> Pobierz jadłospis
  
</a>
        </div>
</div> 
     
        </div>
 <!-- II row -->
 <div class="row">
        <div class="col-4 dietDay">

  <div class="photo">
        <img src="images/dietPlan.svg" alt="" width=150px height=150px/>
      <div class="description">
        <h3>Lorem ipsum</h3>  
      <br/>
      <p style="clear:both">hehehehheehehhehehehheheh</p>
        </div>
    </div>
    <div class="downDiet">
        <a href="" download><i class="fas fa-file-download"></i> Pobierz jadłospis
  
</a>
        </div>
        </div>
        <div class="col-4 dietDay">
        </div>
        <div class="col-4 dietDay">
        </div>
        </div>
 <!-- III row -->
 <div class="row">
        <div class="col-4 dietDay">
        </div>
        <div class="col-4 dietDay">
        </div>
        <div class="col-4 dietDay">
        </div>
        </div>
        <!-- end -->
        </div>
        </div>
        </div>


        <!-- show more details about plan -->
<div class="row">
    <div class="details" style="display:none">
        <h3>Uwaga</h3>
        <p>Jezeli nie masz czasu na przygotowanie posiłków z tego dnia, przygotuje te z dnia kolejnego</p>
        </div>
        </div>
        <!-- end details -->
        <script src="https://vjs.zencdn.net/7.10.2/video.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script> -->
    <script src="dashboard.js"></script>
    <script src="diet.js"></script>
    <!-- With locals-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js" ></script>
<!-- Without locals-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" ></script>
  </body>
</html>
