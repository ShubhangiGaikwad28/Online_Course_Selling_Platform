<?php
include "db.php";
session_start();
'INSERT INTO `courses` (`id`, `title`, `img-url`, `small-text`, `price`, `requirements`, `description`, `topic`) VALUES (""))';

$sql = "SELECT * FROM courses";
$result = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Techzone - the best ethical hacking courses seller website</title>
  <!--======= css ========-->
  <link rel="stylesheet" href="styles/style.css" />
  <!--======= css =======-->
  <!--======= favicon =======-->
  <link rel="apple-touch-icon" sizes="57x57" href="fav/apple-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="60x60" href="fav/apple-icon-60x60.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="fav/apple-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="fav/apple-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="fav/apple-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="fav/apple-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="fav/apple-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="fav/apple-icon-152x152.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="fav/apple-icon-180x180.png" />
  <link rel="icon" type="image/png" sizes="192x192" href="fav/android-icon-192x192.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="fav/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="96x96" href="fav/favicon-96x96.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="fav/favicon-16x16.png" />
  <link rel="manifest" href="fav/manifest.json" />
  <meta name="msapplication-TileColor" content="#ffffff" />
  <meta name="msapplication-TileImage" content="fav/ms-icon-144x144.png" />
  <meta name="theme-color" content="#ffffff" />
  <!--======= favicon =======-->
  <!-- ==== apis ====== -->
  <script src="app.js" defer></script>
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- ==== apis ====== -->
</head>

<body>
  <div id="block" class="upperblock">
    <div class="block">
      <i onclick="blockclose()" class="las la-window-close"></i>
      <div class="blockhead">
        <div class="img">
          <img id="Bimg" src="" width="400" alt="" />
        </div>
        <div class="ZKD">
          <h3 id="Btitle"><span>/bash secure purchase.sh</span></h3>
          <legend id="Bprice"></legend>
          <input type="hidden" id="productid" value="" />
          <form method="post">
            <?php
            $_SESSION['productID'] = $_POST['productid'];
            ?>
            <button id="btnss">BUY NOW</button>
          </form>

        </div>
      </div>
      <div class="blockbody">
        <div class="p1">
          <b>Requirements:</b>
          <ul id="Breq"></ul>
        </div>
        <div class="p2">
          <b>Description:</b>
          <p id="Bdesc"></p>
        </div>
        <div class="p3">
          <b>Course Topics:</b>
          <ol id="Btopic"></ol>
        </div>
      </div>
    </div>
  </div>
  <div id="particles-js"><canvas class="particles-js-canvas-el" width="952" height="970" style="width: 100%; height: 100%;"></canvas></div>
  <div class="container">
    <div class="curzr" hidden>
      <div class="curzr-dot"></div>
    </div>
    <nav>
      <div class="logo">
        <h3>
          Tech
          <h2>zone</h2>
          <span>/cd Shubhangi</span>
        </h3>
      </div>
      <div class="listItems">
        <ul>
          <li><a class="act" href="/">hoMe</a></li>
          <li><a href="#footer">About</a></li>
          <li><a href="#courses">courses</a></li>
          <li><a href="#services">services</a></li>
        </ul>
      </div>
      <div onclick="ham()" class="ham">
        <i class="las la-bars"></i>
      </div>
    </nav>
    <main>
      <div class="Sec-1">
        <div class="sec1Top">
          <div>
            <img src="images/undraw_hacker_mind_-6-y85.svg" alt="" />
          </div>
          <div class="ASD">
            <h1>
              we provide<br />
              best <b> courses</b> and <b>tool</b> .
            </h1>
            <p>
              We have hac*ing , coding , tools and ex.. courses in very low price that
              enhance skills so This products are available in other  paid platform but we provide in very low price
              <span>/sudo gitclone</span>
            </p>
            <a href="">ha*k this site</a>
          </div>
        </div>
      </div>
      <div id="services" class="Sec-2">
        <div class="sec2Top">
          <h1>
            <span>/ls tech</span> Computer Science & Information <br />
            Technology
          </h1>
          <p>
            LeARN ETHiCaL H4CKiNG ProGR4MMiNG WiTH <br />
            UsiNG aLL CoUrSEs & TooLs, & oTHeR TeCHNiC4L-B4sEd <br />
            PrODuCTs, iNCLuDiNG, FoR Ex:-
          </p>
        </div>
        <div class="sec2boxs">
          <div class="box">
            <span>Coding cources
            </span>
            <p>
            Coding cources that help to   <br />
              make powerful tool and Get job ubgrade a skills <br />
              in  Every Comfortable Language.
            </p>
          </div>
          <div class="box">
            <span>PriVaTe SoFTWaRe</span>
            <p>
              provide lots of Trusted
              crack Software <br />
            and  PriVaTe SoFTWaRe in very low price <br />
              ex. SMS bulks , business software
            </p>
          </div>
          <div class="box">
            <span>CYpHeRaT SpYWaRe</span>
            <p>
              spyware and botnet Every one  <br />
              need we provide powerful botnet or spyware <br />
              ex cypherat or krypnixrat. 
            </p>
          </div>
          <div class="box">
            <span>OSCP CoNcePTs</span>
            <p>
             we have Offensive Security Certified Professional  
             <br />
             certification in very low price  in  Every Comfortable Language. <br />
              with some tools and resources
            </p>
          </div>
          <div class="box">
            <span>other Technology</span>
            <p>
              Every day new tech has been
              update <br />
             like blockchain , NFTs , crypto  <br />
              we update those cources and products
            </p>
          </div>
        </div>
      </div>
      <div id="courses" class="Sec-3">
        <div class="Sec3Top">
          <div>
            <h2>courses</h2>
            <p>
            take risks now and do  <br> something bold you won't regret it
            </p>
            <span>/Elon Musk</span>
          </div>
          <div>
            <select id="select" class="select">
              <option value="all">select a category</option>
              <option value="courses">courses</option>
              <option value="botnet">botnet</option>
              <option value="coding">coding</option>
              <option value="spyware">spyware</option>
              <option value="tools">tools</option>
              <option value="hacking">hacking</option>
              <option value="all">
                Option that has too long of a value to fit
              </option>
            </select>
            <button class="btnflit" onclick="flilt()">filter</button>
          </div>
          <div>
            <input id="dd" onkeyup="search()" value="" type="text" placeholder="search your ..." />
            <i class="las la-search"></i>
          </div>
        </div>
        <div class="sec3body">
          <div class="bg">
            <img data-v="1" class="frame-obj" src="images/Frame1.png" alt="" />
            <img data-v="2" class="frame-obj" src="images/Frame2.png" alt="" />
            <img data-v="3" class="frame-obj" src="images/Frame3.png" alt="" />
            <img data-v="-2" class="frame-obj" src="images/Frame4.png" alt="" />
            <img data-v="7" class="frame-obj" src="images/Frame5.png" alt="" />
            <img data-v="5" class="frame-obj" src="images/Frame6.png" alt="" />
          </div>

          <?php


          if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

              $category = $row["categor"];
              $imgurl = $row["img-url"];
              $title = $row["title"];
              $smalltext = $row["small-text"];
              $price = $row["price"];
              $requirements = $row["requirements"];
              $description = $row["description"];
              $topic = $row["topic"];


              echo ' <div data-cat="' . $category . '" class="boxs">
                        <img class="curimg" src="' .  $imgurl . '" alt="" />
                        <h3 class="titel">' . $title  . '</h3>
                        <legend>' . $smalltext . '</legend>
                        <div>
                          <div class="price">' .    $price . 'rs</div>
                          <a>buy</a>
                        </div>
                        <div class="hide">
                          <div class="requ">' .   $requirements  . '</div>
                          <div class="desc">' . $description  . '</div>
                          <div class="topic">' . $topic . '</div>
                          <div class="productidi">' . $row['id'] . '</div>
                        </div>
                        </div>';
            }
          } else {
            echo "<h1 class='DSDRR'>0 results</h1>";
          }
          ?>

        </div>
      </div>
    </main>
    <footer id="footer">
      <div class="logo">
         <h3>
          Tech
          <h2>zone</h2>
          <span>/cd Shubhangi</span>
        </h3>
      </div>
      <ul>
        <ul>
          <li><a class="act" href="/">hoMe</a></li>
          <li><a href="#footer">About</a></li>
          <li><a href="#courses">courses</a></li>
          <li><a href="#services">services</a></li>
        </ul>
      </ul>
      <p>"when you ask yourself a question that moment change whole life"</p>
      <p>any problem are occur so please contact below</p>
      <div class="icons">
          <i class="las la-envelope" onclick='window.location="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=GTvVlcSBpRkBPTXZwBgWVcXXgLjCjvFfGBJNJdcGnbMncJNWcgmPjLsJQmwmsgZsKftmFkHfsTwhT"'></i>
          <i class="lab la-telegram" onclick='window.location="https://@x_eRRoR_x1.t.me/"'></i>
          <i class="las la-code" onclick='window.location="https://kunal.thelosser.repl.co/"'></i>
          <i class="lab la-whatsapp" onclick='window.location="https://wa.me//9953163029"'></i>
       </div>
      <span>Copyright ©2022 All rights reserved | by techzone</span>
    </footer>
  </div>
</body>

</html>