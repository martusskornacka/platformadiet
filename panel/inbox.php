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
    <link rel="stylesheet" href="inbox.css" />



    <title>Wiadomości</title>
  </head>
  <body onload="showMe()">

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
    <div class="inbox">
    
      <div class="mainbox ">
       <h3><i class="far fa-paper-plane"></i> Twoje wiadomości</h3>
      <ul class="mailbox">
      <li class="mail">
      <h5>Title</h5>
      <p class="czas"><i class="far fa-calendar"></i> 05.10.2020 </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pulvinar porta lobortis. Etiam suscipit id nisi et viverra. Vestibulum et arcu odio. In tincidunt sagittis justo, tristique hendrerit lectus euismod a. Duis sodales nisl non ex iaculis malesuada. Pellentesque imperdiet arcu ac ligula varius bibendum. Morbi feugiat pretium tellus ut aliquam. Sed molestie justo quis ligula blandit, pulvinar venenatis eros vehicula. Integer ut magna pulvinar, aliquam urna imperdiet, aliquam felis.</p>
    <button  onclick="showDiv()">Przejdź</button></li>
      <li>
      <h5>Title</h5>
      <p class="czas"><i class="far fa-calendar"></i> 05.10.2020 </p>
      <p>huehuehue</p>
    <button href="">Przejdź</button>
      </li>
      <li></li>
      <li></li>
      </ul>
  </div>
  <div class="seemail" id="contentMail">
  <div class="row">
  <div class="imageMail">
  <img src="images/openMail.svg" alt="" width=150px height=150px/>
  </div>
  <div class="titlemail">
  <h3>Title</h3>
  <br/>
  <p>Testowa wiadomość</p>
  <button class="removeMeBtn" onclick="removeMess()"><i class="fas fa-trash-alt"></i></button>
  </div>

  </div>
 
  </div>
<div id="displayMail">
  <p>hehehhehe</p>
  <p> <img src="mail.svg" alt="" width=150px height=150px/></p>
        </div>
</div>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script> -->
    <script src="dashboard.js"></script>
    <script src="inbox.js"></script>
    <!-- With locals-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js" ></script>
<!-- Without locals-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" ></script>
  </body>
</html>
