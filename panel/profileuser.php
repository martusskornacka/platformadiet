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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ustawienia</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="dashboard.css" />
  <link rel="stylesheet" href="profile.css">
</head>

<body>
<div class="main-container">

    <!-- HEADER -->
   
    <header class="block" id="mobile-menus">

        <ul class="header-menu horizontal-list" >

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
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
        <?php  if (isset($_SESSION['username'])) : ?>
        <div class="profile-menu">
            <p> <a class="header-menu-tab" href="profileuser.php"><?php echo $_SESSION['username']; ?></a>
        </p>
      
            <div class="profile-picture small-profile-picture">
            <img src="<?php echo 'images/' . $user['profile_image'] ?>" width="40px" alt="">            </div>
            <p><a class="menu-box-tab" href="logout.php"><span class="fas fa-sign-out-alt" ></span></a></p>
        </div>

        <?php endif ?> 

    </header>

 
  
    <div class="row">
      <div class="col-4 offset-md-4 form-div">
      
        <form action="profileuser.php" method="post" enctype="multipart/form-data">
          <h2 class="text-center mb-3 mt-3">Zaktualizuj profil</h2>
          <?php if (!empty($msg)): ?>
            <div class="alert <?php echo $msg_class ?>" role="alert">
              <?php echo $msg; ?>
            </div>
          <?php endif; ?>
          <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
                <h4>Zmień zdjęcie</h4>
              </div>
              <img src="images/avatar.jpg" onClick="triggerClick()" id="profileDisplay">
            </span>
            <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
            <label>Zdęcie profliowe</label>
          </div>
          <div class="form-group">
            <label>O mnie</label>
            <textarea name="bio" class="form-control"></textarea>
          </div>
          <div class="form-group">
          <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
</div>
<div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
</div>
<div class="form-group">
    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
          <div class="form-group">
            <button type="submit" name="save_profile" class="btn btn-primary btn-block">Zapisz zmiany</button>
          </div>
        </form>
      </div>
    </div>
  
  </div>
  <script src="dashboard.js"></script>
  <script src="profile.js"></script>
</body>
</html>
