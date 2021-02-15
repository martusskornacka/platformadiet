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
 
  <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="dashboard.css" />
  <link rel="stylesheet" href="profile.css">
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css"
    />
</head>

<body>
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
        <p> <a class="header-menu-tab" href="profileuser.php"><?php echo $_SESSION['username']; ?></a>
        </p>
      
            <div class="profile-picture small-profile-picture">
            <img src="<?php echo 'images/' . $user['profile_image'] ?>" width="40px" alt="">            </div>
            <p><a class="menu-box-tab" href="logout.php"><span class="fas fa-sign-out-alt" ></span></a></p>
        </div>
     
        <?php endif ?> 
    </header>

    <div>   <h2 style="text-align:center" >Zaktualizuj profil</h2></div>
  <div class="container-main">
   
    <div class="row left-side">
      <div class="col-6 ">
      <div class="mydetails">
 
<p class="valueFname"><?php echo $_SESSION['username']; ?></p>
<p class="valueLname">Nazwisko</p>
<p class="valueEmail">email</p>
<p class="valueAbout">O mnie</p>
        </div>
   

          </div>
          </div>
          <div class="row right-side">
      <div class="col-6  ">
      <form action="profileuser.php" method="post" enctype="multipart/form-data">
       
       <?php if (!empty($msg)): ?>
         <div class="alert <?php echo $msg_class ?>" role="alert">
           <?php echo $msg; ?>
         </div>
       <?php endif; ?>
       <div class="form-group text-center" style="position: relative;" >
         <span class="img-div">
           <div class="text-center img-placeholder"  onClick="triggerClick()">
            <i class="fas fa-cloud-upload-alt"></i>
           </div>
           <img src="images/avatar.jpg" onClick="triggerClick()" id="profileDisplay">
         </span>
         <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
         <label>Zdęcie profliowe</label>
       </div>
          <div class="input-wrapper">
            
            <input type="text" id="bio" autocomplete="off" name="bio" class="form-control"></input>
            <label for="about">O mnie</label>
          </div>
          <div class="input-wrapper">
    <input type="text" id="fname" name="firstname" autocomplete="off">
    <label for="fname">Imię</label>
</div>
<div class="input-wrapper">
    <input type="text" id="lname" name="lastname" autocomplete="off">
    <label for="lname">Nazwisko</label>
</div>
<div class="input-wrapper">
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
    <label for="country">Kraj</label>
          <div class="input-wrapper">
            <button type="submit" name="save_profile" class="butonSave">Zapisz zmiany</button>
          </div>
        </form>
      </div>
    </div>
          </div>
  </div>
  <script src="dashboard.js"></script>
  <script src="profile.js"></script>
</body>
</html>
