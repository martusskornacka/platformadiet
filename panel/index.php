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

    <!-- Bootstrap core CSS -->
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <title>Platforma</title>
  </head>
  <body>

<div class="main-container">

    <!-- HEADER -->
   
    <header class="block" id="mobile-menus">

        <ul class="header-menu horizontal-list"  id="header-menu">

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
      
    <!-- LEFT-CONTAINER -->
    <div class="left-container container">
        <!-- <div class="menu-box block"> <!-- MENU BOX (LEFT-CONTAINER)
            <h2 class="titular">Twój Panel</h2>
            <ul class="menu-box-menu">
                <li>
                    <a class="menu-box-tab" href="#6"><span class="icon fontawesome-envelope scnd-font-color"></span>Wiadomości<div class="menu-box-number">24</div></a>                            
                </li>
                <li>
                    <a class="menu-box-tab" href="nowosci.php"><span class="icon entypo-paper-plane scnd-font-color"></span>Nowości<div class="menu-box-number">3</div></a>                            
                </li>
                <li>
                    <a class="menu-box-tab" href="#10"><span class="icon entypo-calendar scnd-font-color"></span>Plan Treningowy<div class="menu-box-number">5</div></a>                            
                </li>
                <li>
                    <a class="menu-box-tab" href=""><span class="icon entypo-cog scnd-font-color"></span>Jadłospisy</a>
                </li>
                <li>
                    <a class="menu-box-tab" href="#13"><sapn class="icon entypo-chart-line scnd-font-color"></sapn>Statystyki</a>
                </li>                        
            </ul>
        </div> -->
        <div class="donut-chart-block block" > <!-- DONUT CHART BLOCK (LEFT-CONTAINER) -->
            <h2 class="titular">Realizacja celów miesiąca </h2>
            <div class="donut-chart">
                <!-- DONUT-CHART by @kseso https://codepen.io/Kseso/pen/phiyL -->
                <div id="porcion1" class="recorte"><div class="quesito ios" data-rel="21"></div></div>
                <div id="porcion2" class="recorte"><div class="quesito mac" data-rel="39"></div></div>
                <div id="porcion3" class="recorte"><div class="quesito win" data-rel="31"></div></div>
                <div id="porcionFin" class="recorte"><div class="quesito linux" data-rel="9"></div></div>
                <!-- END DONUT-CHART by @kseso https://codepen.io/Kseso/pen/phiyL -->    
                <p class="center-date"id="month"><br><span class="scnd-font-color"></span></p> 
            </div>
            <ul class="os-percentages horizontal-list">
                <li>
                    <p class="ios os scnd-font-color">Masa ciała</p>
                    <p class="os-percentage">21<sup>%</sup></p>
                </li>
                <li>
                    <p class="mac os scnd-font-color">Obwody</p>
                    <p class="os-percentage">48<sup>%</sup></p>
                </li>
                <li>
                    <p class="linux os scnd-font-color">Tłuszcz</p>
                    <p class="os-percentage">9<sup>%</sup></p>
                </li>
                <li>
                    <p class="win os scnd-font-color">Kroki</p>
                    <p class="os-percentage">32<sup>%</sup></p>
                </li>
            </ul>
        </div>
        <!-- <div class="line-chart-block block clear"> <!-- LINE CHART BLOCK (LEFT-CONTAINER) -->
            <!-- <div class="line-chart"> -->
              <!-- LINE-CHART -->
                <!-- <div class='grafico'>
                   <ul class='eje-y'>
                     <li data-ejeY='30'></li>
                     <li data-ejeY='20'></li>
                     <li data-ejeY='10'></li>
                     <li data-ejeY='0'></li>
                   </ul>
                   <ul class='eje-x'>
                     <li>Apr</li>
                     <li>May</li>
                     <li>Jun</li>
                   </ul>
                     <span data-valor='25'>
                       <span data-valor='8'>
                         <span data-valor='13'>
                           <span data-valor='5'>   
                             <span data-valor='23'>   
                             <span data-valor='12'>
                                 <span data-valor='15'>
                                 </span></span></span></span></span></span></span>
                </div> -->
               <!-- end of chart -->
            <!-- </div> -->
            <!-- <ul class="time-lenght horizontal-list">
                <li><a class="time-lenght-btn" href="#14">Week</a></li>
                <li><a class="time-lenght-btn" href="#15">Month</a></li>
                <li><a class="time-lenght-btn" href="#16">Year</a></li>
            </ul>
            <ul class="month-data clear">
                <li>
                    <p>APR<span class="scnd-font-color"> 2013</span></p>
                    <p><span class="entypo-plus increment"> </span>21<sup>%</sup></p>
                </li>
                <li>
                    <p>MAY<span class="scnd-font-color"> 2013</span></p>
                    <p><span class="entypo-plus increment"> </span>48<sup>%</sup></p>
                </li>
                <li>
                    <p>JUN<span class="scnd-font-color"> 2013</span></p>
                    <p><span class="entypo-plus increment"> </span>35<sup>%</sup></p>
                </li>
            </ul> -->
        <!-- </div> --> 
        <div class="media block"> <!-- MEDIA (LEFT-CONTAINER) -->
            <div id="media-display">
                <a class="media-btn play" href="#23"><span class="fontawesome-play"></span></a>
            </div>
            <div class="media-control-bar">
                <a class="media-btn play" href="#23"><span class="fontawesome-play scnd-font-color"></span></a>
                <p class="time-passed">4:15 <span class="time-duration scnd-font-color">/ 9:23</span></p>
                <a class="media-btn volume" href="#24"><span class="fontawesome-volume-up scnd-font-color"></span></a>
                <a class="media-btn resize" href="#25"><span class="fontawesome-resize-full scnd-font-color"></span></a>
            </div>
        </div>
        <ul class="social horizontal-list block"> <!-- SOCIAL (LEFT-CONTAINER) -->
            <li class="facebook"><p class="icon"><span class="zocial-facebook"></span></p><p class="number">248k</p></li>
            <li class="twitter"><p class="icon"><span class="zocial-twitter"></span></p><p class="number">30k</p></li>
            <li class="googleplus"><p class="icon"><span class="zocial-googleplus"></span></p><p class="number">124k</p></li>
            <li class="mailbox"><p class="icon"><span class="fontawesome-envelope"></span></p><p class="number">89k</p></li>
        </ul>
    </div>

    <!-- MIDDLE-CONTAINER -->
    <div class="middle-container container">
        <!-- <div class="profile block"> <!-- PROFILE (MIDDLE-CONTAINER) -->
            <!-- <a class="add-button" href="#28"><span class="icon entypo-plus scnd-font-color"></span></a>
            <div class="profile-picture big-profile-picture clear">
                <img width="150px" alt="My photo" src="<?php echo 'images/' . $user['profile_image'] ?>" >
            </div>
            <h1 class="user-name"><?php echo $_SESSION['username']; ?></h1>
            <div class="profile-description">
                <p class="scnd-font-color">Lorem ipsum dolor sit amet consectetuer adipiscing</p>
            </div>
            <ul class="profile-options horizontal-list">
                <li><a class="comments" href="#40"><p><span class="icon fontawesome-comment-alt scnd-font-color"></span>23</li></p></a>
                <li><a class="views" href="#41"><p><span class="icon fontawesome-eye-open scnd-font-color"></span>841</li></p></a>
                <li><a class="likes" href="#42"><p><span class="icon fontawesome-heart-empty scnd-font-color"></span>49</li></p></a>
            </ul>
        </div>  -->
        <div class="weather block clear"> <!-- jadlospis (MIDDLE-CONTAINER) -->
            <h2 class="titular"><span class="icon entypo-calendar"></span><strong>Twój tygodniowy jadłospis</strong></h2>
           
            <div class="current-day">
            
                <p class="current-day-date">Dzisiaj
          
                </p>
                <p class="current-day-temperature" id="actual"></p>
           
            </div>
            <ul class="next-days">
                <li>
                    <a href="#43">
                        <p class="next-days-date" id="tomorrow"></p>
                        <p class="next-days-temperature" ><span class="fas fa-chevron-right scnd-font-color"></span></p>
                    </a>
                </li>
                <li>
                    <a href="#44">
                        <p class="next-days-date" id="three"></span></p>
                        <p class="next-days-temperature"><span class="fas fa-chevron-right scnd-font-color"></span></p>
                    </a>
                </li>
                <li>
                    <a href="#45">
                        <p class="next-days-date" id="four"><span class="day"></span> </p>
                        <p class="next-days-temperature"><span class="fas fa-chevron-right scnd-font-color"></span></p>
                    </a>
                </li>
                <li>
                    <a href="#46">
                        <p class="next-days-date" id="five"><span class="day"></span> </p>
                        <p class="next-days-temperature"><span class="fas fa-chevron-right scnd-font-color"></span></p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <p class="next-days-date" id="six"><span class="day"></span> </p>
                        <p class="next-days-temperature"><span class="fas fa-chevron-right scnd-font-color"></span></p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <p class="next-days-date" id="seven"><span class="day"></span> </p>
                        <p class="next-days-temperature"><span class="fas fa-chevron-right scnd-font-color"></span></p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="tweets block"> <!-- TWEETS (MIDDLE-CONTAINER) -->
            <h2 class="titular"><span class="icon zocial-twitter"></span>Ostatnie wpisy</h2>
            <div class="tweet first">
                <p>Lorem ipsum<a class="tweet-link" href="#17">@Costa</a></p>
                <p><a class="time-ago scnd-font-color" href="#18">3 minuty temu</a></p>
            </div>
            <div class="tweet">
                <p>Lorem ipsum <a class="tweet-link" href="#19">#Costadiet</a></p>
                <p><a class="scnd-font-color" href="#20">1 minuta temu</a></p>
            </div>
        </div> 
        <!-- <ul class="social block"> <!-- SOCIAL (MIDDLE-CONTAINER) -->
            <!-- <li><a href="#50"><div class="facebook icon"><span class="zocial-facebook"></span></div><h2 class="facebook titular">SHARE TO FACEBOOK</h2></li></a>
            <li><a href="#51"><div class="twitter icon"><span class="zocial-twitter"></span></div><h2 class="twitter titular">SHARE TO TWITTER</h2></li></a>
            <li><a href="#52"><div class="googleplus icon"><span class="zocial-googleplus"></span></div><h2 class="googleplus titular">SHARE TO GOOGLE+</h2></li></a>
        </ul>  -->
    </div>

    <!-- RIGHT-CONTAINER -->
    <div class="right-container container">
        <div class="join-newsletter block" > <!-- Oblicz WHR (RIGHT-CONTAINER) -->
            <h2 class="titular">Oblicz swoje WHR</h2>
            <div class="input-container">
            <select id="plec" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <option >Wybierz płeć</option>
  <option value="val1">Kobieta</option>
  <option value="val2">Męzczyzna</option>
</select>
                <input type="text" id="talia" placeholder='Obwód talii w cm' class=" text-input" value=''>
                <input type="text" id="biodra" placeholder='Obwód bioder w cm' class=" text-input" value=''>
            </div>
            <a class="subscribe button" onClick="WHR()">Oblicz</a>
            <p class="addWHR" id="showWHR"></p>
            <p class="addWHR">Dodaj wynik do swojej karty <a class="add-button" href="#28" onClick='sendTo()'><span class="icon entypo-plus scnd-font-color"></span></a></p>
      <!-- <?php
      $rate=$_POST['rate'];
       $sql = "INSERT INTO `users`( `rate`) 
       VALUES ('$rate')";
       if (mysqli_query($db, $sql)) {
           echo json_encode(array("statusCode"=>200));
       } 
       else {
           echo json_encode(array("statusCode"=>201));
       }
      ?> -->
       <p id="com"></p>
        </div>
       
        <div class="loading block"> <!-- Postępy (RIGHT-CONTAINER) -->
        <h2 class="titular">Zrealizowałeś w tym tygodniu</h2>
            <div class="progress-bar downloading"></div>
           
            <p><span class="icon fas fa-carrot scnd-font-color"></span>Plan zywieniowy</p>
            <p class="percentage">81<sup>%</sup></p>
            <div class="progress-bar uploading"></div>
            <p><span class="icon fas fa-burn scnd-font-color"></span>Plan treningowy</p>
            <p class="percentage">43<sup>%</sup></p>
        </div>
        <div class="calendar-day block">  <!--CALENDAR DAY (RIGHT-CONTAINER) -->
            <div class="arrow-btn-container">
                <a class="arrow-btn left" onClick="prevChange()"><span class="icon fontawesome-angle-left"></span></a>
                <h2 class="titular" id="calendar-day"></h2>
                <a class="arrow-btn right" onClick="nextChange()"><span class="icon fontawesome-angle-right"></span></a>
            </div>
                <p class="the-day">26</p>
                <a class="add-event button" href="#27">ADD EVENT</a>
        </div>
        <!-- <div class="calendar-month block" id="calendar"> CALENDAR MONTH (RIGHT-CONTAINER) -->
            <!-- <div class="arrow-btn-container">
                <a class="arrow-btn left" id="calprev"><span class="icon fontawesome-angle-left"></span></a>
                <h2 class="titular" id="namemont">APRIL 2013</h2>
                <a class="arrow-btn right" id="calnext"><span class="icon fontawesome-angle-right"></span></a>
            </div>
            <table class="calendar">
                <thead class="days-week">
                    <tr>
                        <th>S</th>
                        <th>M</th>
                        <th>T</th>
                        <th>W</th>
                        <th>R</th>
                        <th>F</th>
                        <th>S</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a class="scnd-font-color" href="#100">1</a></td>
                    </tr>
                    <tr>
                        <td><a class="scnd-font-color" href="#101">2</a></td>
                        <td><a class="scnd-font-color" href="#102">3</a></td>
                        <td><a class="scnd-font-color" href="#103">4</a></td>
                        <td><a class="scnd-font-color" href="#104">5</a></td>
                        <td><a class="scnd-font-color" href="#105">6</a></td>
                        <td><a class="scnd-font-color" href="#106">7</a></td>
                        <td><a class="scnd-font-color" href="#107">8</a></td>
                    </tr>
                    <tr>
                        <td><a class="scnd-font-color" href="#108">9</a></td>
                        <td><a class="scnd-font-color" href="#109">10</a></td>
                        <td><a class="scnd-font-color" href="#110">11</a></td>
                        <td><a class="scnd-font-color" href="#111">12</a></td>
                        <td><a class="scnd-font-color" href="#112">13</a></td>
                        <td><a class="scnd-font-color" href="#113">14</a></td>
                        <td><a class="scnd-font-color" href="#114">15</a></td>
                    </tr>
                    <tr>
                        <td><a class="scnd-font-color" href="#115">16</a></td>
                        <td><a class="scnd-font-color" href="#116">17</a></td>
                        <td><a class="scnd-font-color" href="#117">18</a></td>
                        <td><a class="scnd-font-color" href="#118">19</a></td>
                        <td><a class="scnd-font-color" href="#119">20</a></td>
                        <td><a class="scnd-font-color" href="#120">21</a></td>
                        <td><a class="scnd-font-color" href="#121">22</a></td>
                    </tr>
                    <tr>
                        <td><a class="scnd-font-color" href="#122">23</a></td>
                        <td><a class="scnd-font-color" href="#123">24</a></td>
                        <td><a class="scnd-font-color" href="#124">25</a></td>
                        <td><a class="today" href="#125">26</a></td>
                        <td><a href="#126">27</a></td>
                        <td><a href="#127">28</a></td>
                        <td><a href="#128">29</a></td>
                    </tr>
                    <tr>
                        <td><a href="#129">30</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table> -->
        <!-- </div> end calendar-month block 
    </div> end right-container -->
<!-- </div> end main-container -->


    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script> -->
    <script src="dashboard.js"></script>
    <script src="calendar.js"></script>
    <!-- With locals-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js" ></script>
<!-- Without locals-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" ></script>
  </body>
</html>
