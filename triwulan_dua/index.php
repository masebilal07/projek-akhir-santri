<?php
session_start();
// if(isset($_SESSION['login'])) {
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Ujian Triwulan Dua</title>
  <link rel="shortcut icon" href="https://static.wixstatic.com/media/2cd43b_3d75f59eec6d4e23931e8da9337dfd90~mv2.png">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script src="jquery-3.2.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $(".menu-header-cari-satu").click(function(){
        $(".cari-artikel").toggle("slow");
        $(".pencarian").toggle("slow");
      });
      $(".menu-header-bar").click(function(){
        $(".burger").toggle("slows");
        $(".header").hide("fast");
        $(".konten-dua").hide("fast");
        $(".footer").hide("fast");
        $(".container").hide("fast");
      });
      $(".menu-burger").click(function(){
        $(".burger").toggle("slows");
        $(".header").show("fast");
        $(".konten-dua").show("fast");
        $(".footer").show("fast");
        $(".container").show("fast");
      });
      
    });
  </script>
  <style type="text/css">
    /* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
  display: block;
}
body {
  line-height: 1;
}
ol, ul {
  list-style: none;
}
blockquote, q {
  quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
  content: '';
  content: none;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}

.clearfix:after {
  visibility: hidden;
  display: block;
  font-size: 0;
  content: " ";
  clear: both;
  height: 0;
}
* html .clearfix             { zoom: 1; } /* IE6 */
*:first-child+html .clearfix { zoom: 1; } /* IE7 */

body {
 /*   font-family: 'Lato', sans-serif;*/
    font-family: 'Source Sans Pro', sans-serif;
    color: #1f232c;
    line-height: 1.15;
}
input,
textarea {
    font-family: 'Lato', sans-serif;
    color: #1f232c;
    font-size: 13px;
}
img {
  /* agar img tidak melebihi element parentnya */
  max-width: 100%;
}
a {
  color: #333333;
  text-decoration: none;
  outline: none;
  /* menambah efek transisi ketika dihover */ 
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
}
h1, h2, h3, h4, h5, h6, p {
 /* margin-bottom: 1em;*/
}
h1, h2, h3, h4, h5, h6, b, strong {
  font-weight: 700; /* bukan bold atau bolder karena saya menggunakan google font */
}
.text-input {
  border-color: #ccc;
  padding: 7px 8px;
  border-radius: 5px;
  -moz-box-shadow: inset 0 1px 0 #eee;
  -webkit-box-shadow: inset 0 1px 0 #eee;
  box-shadow: inset 0 1px 0 #eee;
}
.text-input:focus {
  border-color: #bbb;
  -webkit-box-shadow: 0 0 3px 1px #ddd;
  -moz-box-shadow: 0 0 3px 1px #ddd;
  box-shadow: 0 0 3px 1px #ddd;
}
.btn-submit {
  background-color: #1f232c;
  color: #f5f4f2;
  font-size: 14px;
  border: 0;
  border-radius: 5px;
  padding: 8px 16px;
  text-transform: uppercase;
  cursor: pointer;
}
.btn-submit:hover,
.btn-submit:active {
  background-color: #373e4c;
}
.btn-submit:active {
  position: relative;
  top: 1px;
}
.container {
  background: #f7f9fc;
  padding-bottom: 157px;
}
.header {
  max-width: 1000px;
}
.wrapper {
  width: 952px;
  margin: auto;
}
.wrapper-dua {
  width: 786px;
  margin: auto;
}
.satu {
  width: 470px;
  float: left;
  padding-top: 78px;
} 
.satu h1 {
  font-family: lato;
  font-weight: bold;
  font-size: 42px;
  padding-bottom: 10px;
}
.navigation {
  float: right;
  width: 470px;
}
.dua li  {
  padding-top: 90px;
  padding-bottom: 30px;
  float: left;
  padding-left: 25px;
  font-family: lato;
  font-weight: bold;
  font-size: 16px;
  text-decoration:border none;
  list-style-type:none;
}
.dua li a {
  text-decoration:none;
  cursor: pointer;
}
.dua {
  float: right;
}
.konten-satu {
  background: #fff;
/*  height: 500px;*/
  max-width: 1000px;
  box-shadow: 0px 0px 10px #C0C0C0; 
  -moz-box-shadow: 0px 0px 10px #C0C0C0; 
  -webkit-box-shadow: 0px 0px 10px #C0C0C0;
  padding-bottom: 70px;
}
.konten-dua {
  margin-top: 30px;
  background: #fff;
  padding-bottom: 100px;
  max-width: 1000px;
  box-shadow: 0px 0px 50px #C0C0C0; 
  -moz-box-shadow: 0px 0px 50px #C0C0C0; 
  -webkit-box-shadow: 0px 0px 50px #C0C0C0;
}
.footer {
  width: 100%;
  background: #5c6bc0;
  padding-top: 68px;
}
.text-wahdah {
  font-family: lato;
  font-weight: bold;
  font-size: 42px;
  text-align: center;
  color: #4f5ca6;
  font-weight: italic;
  padding-bottom: 30px;
}
.footer-navigation {
  max-width: 470px;
  margin: auto;
}
.footer-dua li {
  float: left;
  margin: center;
  padding-left: 40px;
  font-weight: bold;
  color: #fff;
  padding-bottom: 30px;
}
.footer-dua li a {
  color: #fff;
}
.garis {
  width: 758px;
  height: 2px;
  background: #4f5ca6;
  margin: auto;
}
.garis-dua {
  width: 700px;
  height: 2px;
  background: #4f5ca6;
  margin: auto;
}
.nunc-placerat p {
  color: #4f5ca6;
  padding-top: 30px;
  text-align:center;
  font-size: 13px;
  width: 711px;
  margin: auto;
  padding-bottom: 32px;
  font-family: lato;
  font-weight: bold;
}
.nunc-placerat-dua p {
  padding-top: 30px;
  text-align:center;
  font-size: 13px;
  width: 711px;
  margin: auto;
  padding-bottom: 32px;
  color: #fff;
  font-family: lato;
  font-weight: bold;
}
.medsos-navigation {
  max-width: 250px;
  margin: auto;
}
.footer-medsos li {
  float: left;
  
  padding-left: 38px;
  font-weight: bold;
  color: #fff;
  padding-bottom: 30px;
}
button {
  margin:20px -20px 0 0;
  float: right;
  width: 91px;
  height: 33px;
  font-family: lato;
  font-weight: bold;
  border: none;
  color: #fff;
  background: #5c6bc0;
}
.wrapper-dua small {
  font-weight: bold;
  font-style: italic;
  font-family: lato;
  color: #d9d9d9;
}
.wrapper-dua h1 {
  padding-top: 27px;
  font-size: 40px;
}
.read-more {
  width: 300px;
  float: left;
}
.read-more p {
  padding-top: 30px;
  padding-bottom: 30px;
  font-weight: bold;
  font-family: lato;
  font-size: 21px;
  color: #5c6bc0;
  cursor: pointer;
}
.text-konten {
  /*padding-bottom: 58px;*/
  font-family: lato;
  font-size: 17px;
}
.pager li {
  padding-top: 30px;
  float: right;
  padding-left: 10px;
  font-family: lato;
  color: #d9d9d9;
}
img {
  width: 100%;
}
.hidden {
  display: none;
}
.cari-artikel {
  display: none;
  width: 100%;
  background:#fff;
  border: none;
 box-shadow: 0px 0px 10px #C0C0C0; 
  -moz-box-shadow: 0px 0px 10px #C0C0C0; 
  -webkit-box-shadow: 0px 0px 10px #C0C0C0;
}
.cari {
  width: 850px;
  height: 50px;
  border: none;
}
.submit-cari {
  border: none;
  background:#5c6bc0; 
  width: 102px;
  float: right;
  height: 50px;
  font-size: 15px;
  color: #fff;
  font-family: lato;
  font-weight: bold;
  cursor: pointer;
}
.cari::placeholder {
  font-size: 20px;padding-left: 10px;
}
.menu-header-cari-satu {
  cursor: pointer;
}
.menu-header-bar {
  display: none;
}
.burger {
  height: 100%;
  width: 100%;
  background:green;
  display: none;
}
.menu-header a:hover {
  color: #5c6bc0;
}
input {
  font-size: 25px;
  padding-left: 20px;
  font-family: lato;
}
#share-buttons img {
width: 35px;
padding: 5px;
border: 0;
box-shadow: 0;
display: inline;

}
#share-buttons {
  text-align:center;
  margin-top: 20px;
}
.pencarian {
  width: 100%;
  background: #fff;
  box-shadow: 0px 0px 50px #C0C0C0; 
  -moz-box-shadow: 0px 0px 50px #C0C0C0; 
  -webkit-box-shadow: 0px 0px 50px #C0C0C0;
  display: none;
}
.pencarian h1 {
  font-family: lato;
  padding-top: 70px;
  
}
.pencarian p {
  font-size: 20px;
  font-family: lato;
  font-weight: bold;
  padding-top: 10px;
/*  padding-top: -20px;*/
  padding-bottom: 50px;
  color: #d9d9d9;
}
@media only screen and (max-width:480px) {
  .header, .konten-dua, .footer {
    width: 100%;
  }
  .pencariuan {
    display: none;
  }
.menu-header-bar-burger {
    float: right;padding-right: 10px;
    padding-bottom: 20px;
    padding-top: 20px;
    width: 100%;
  }
  .menu-burger {
    font-size: 30px;
    color: #fff;
    float: right;
    text-decoration:border none;
  list-style-type:none;
  }
  .burger {
    display: none;
    padding-bottom: 100%;
  }
  .burger li {
    text-decoration:border none;
    list-style-type:none;
    padding-left: 10px;
    font-family: lato;
    font-weight: bold;
    cursor: pointer;
    color: #fff;
  }
  .menu-header-bar {
    display: block;
    cursor: pointer;
  }
  .dua li {
    font-size: 25px;
  }
  .hidden {
    display: block;
    padding-bottom: 50px;
  }
  .dua li {
    font-size: 25px;
  }
  .menu-header, .menu-header-cari-satu {
    display: none;
  }
  .user-komen {
  width: 290px;
  }
  .navigation {
    width: 100px;

  }
  .satu {
    width: 200px;
  }
  .satu i h1 {
    font-size: 35px;
    width: 200px;
  }
  .user {
    width: 70px;
    height: 70px;
  }
  .kolom {
    margin-top: 50px;
    font-size: 20px;
  }
  .wrapper {
    width: 350px;
  }
  .read-more p {
      padding-bottom: 0px;
  }
  .nunc-placerat-dua p {
    width: 300px;
  }
  .nunc-placerat p {
      width: 330px;
      color: #fff;
      font-weight: normal;
  }
  .menu-home {
    width: 70px;
  }
  .wrapper-dua {
    width: 290px;
  }
  .garis {
    width: 350px;
  }
  .garis-dua {
    width: 350px;
  }
  .read-more {
    width: 100%;
  }
  .menu-satu {
    display: none;
  }
  img {
    width: 100%;
  }
  button {
    margin: 0 0 -100px 0;
  }
  .pager li {
    display: none;
   /* padding-left: 0px;
    padding-right: 10px;
    float: left;*/
  }
}
</style>
</head>
<body>
  <div class="container clearfix">
    <div class="wrapper clearfix">
      <div class="header clearfix">
        <div class="satu">
          <i><h1>AL-Wahdah</h1></i>
        </div>
        <div class="navigation" class="clearfix">
          <ul class="dua">
            <li class="menu-header"><a href="#">HOME</a></li>
            <li class="menu-header"><a href="#">ABOUT</a></li>
            <li class="menu-header"><a href="#">ARCHIVE</a></li>
            <li class="menu-header"><a href="#">CONTACT</a></li>
            <li class="menu-header-cari-satu"><i  class="fa fa-search"></i></li>
            <li class="menu-header-bar"><i  class="fa fa-bars"></i></li>
          </ul>
            
        </div>
      </div>
      
    </div>
    <div class="wrapper">
      <div class="cari-artikel">
        <form action="" method="post">
          <input class="cari" type="search" name="cari" placeholder="Masukan Kata Kunci..">
          <input type="submit" name="submit" class="submit-cari">
        </form>
      </div>
      <br>
      <br>
    </div>
    <div class="wrapper">
      <div class="pencarian">
        <div class="wrapper-dua">
          <h1>Search results for  <strong><< Interesting >></strong></h1>
          <p>10 Items Found</p>
        </div>
    </div>
    </div>

    <?php
    //=====koneksi ke database===//      
      include 'proses/koneksi.php';
    ?>

    <?php 
      $cari = $_POST['cari'];
      if ($cari != '') {

        //======queri pencarian artikel berdasarkan judul dan isi =====///
        $sql = mysqli_query($connect,"SELECT * FROM article WHERE judul LIKE '%$cari%'");
      } else {

        //=====queri menampilakn article berdasarkanb id 1 atau status altig===//
         $sql = mysqli_query($connect,"SELECT * from article WHERE status = 1");
      }

      //====pengulangan===//
          while ($row = mysqli_fetch_array($sql)) {
     ?>
    <style type="text/css">
      .konten-satu {
      background: #fff;
    /*  height: 500px;*/
      max-width: 1000px;
      box-shadow: 0px 0px 50px #C0C0C0; 
      -moz-box-shadow: 0px 0px 50px #C0C0C0; 
      -webkit-box-shadow: 0px 0px 50px #C0C0C0;
      padding-bottom: 70px;
    }
    .konten-dua {
      margin-top: 30px;
      background: #fff;
      padding-bottom: 100px;
      max-width: 1000px;
      box-shadow: 0px 0px 50px #C0C0C0; 
      -moz-box-shadow: 0px 0px 50px #C0C0C0; 
      -webkit-box-shadow: 0px 0px 50px #C0C0C0;
    }
    button {
      margin:20px -20px 0 0;
      float: right;
      width: 91px;
      height: 33px;
      font-family: lato;
      font-weight: bold;
      border: none;
      color: #fff;
      background: #5c6bc0;
    }
    .wrapper-dua small {
      font-weight: bold;
      font-style: italic;
      font-family: lato;
      color: #d9d9d9;
    }
    .wrapper-dua h1 {
      padding-top: 27px;
      font-size: 40px;
    }
    .read-more {
      width: 300px;
      float: left;
    }
    .read-more p {
      padding-bottom: 30px;
      font-weight: bold;
      font-family: lato;
      font-size: 21px;
      color: #5c6bc0;
      cursor: pointer;
    }
    .text-konten {
     /* padding-top: 20px;*/
      /*padding-bottom: 58px;*/
      font-family: lato;
      font-size: 17px;
    }
    .pager li {
      float: right;
      padding-left: 10px;
      font-family: lato;
      color: #d9d9d9;
    }
    img {
      width: 100%;
    }
    @media only screen and (max-width:480px) {
      .header, .konten-dua, .footer {
        width: 100%;
      }
      .wrapper {
        width: 350px;
      }
      .read-more p {
         padding-bottom: 0px;
      }
      .wrapper-dua {
        width: 290px;
      }
      .garis {
        width: 350px;
      }
      .garis-dua {
        width: 350px;
      }
      .read-more {
        width: 100%;
      }
      .menu-satu {
        display: none;
      }
      img {
        width: 100%;
      }
      button {
        margin: 0 0 -100px 0;
      }
      .pager li {
        padding-left: 0px;
        padding-right: 10px;
        float: left;
      }
    }
    </style>
    <div class="wrapper clearfix">
       <div class="konten-dua">
        <img src="wp-admin/gambar/<?php echo $row['gambar'] ?>">
          <!-- <p style="width: 100%"><?=$row['gambar'];?></p> -->
            <button>Story</button>
            <br>
            <br>
            <br>
              <div class="wrapper-dua">
                <small><?= date('F d, Y', strtotime($row['tanggal']))?></small>
                <h1><?=$row['judul'];?></h1>
                <hr>
                <p class="text-konten"><?= substr($row['isi'], 0,1000) ?> ....</p>
                <div class="read-more">
                  <a href="<?php echo'post.php?id='.$row['id'];?>"><p>READ MORE</p></a>
                </div>
                <div class="pager">
                  <ul class="footer-pager">
                    <li class="menu-pager"><p>#Yosemite</p></li>
                    <li class="menu-pager"><p>#Peak</p></li>
                    <li class="menu-pager"><p>#Explorer</p></li>
                  </ul>
                </div>
              </div>
        </div>
    </div> 

    <?php 
    //===penutup dari pengualngan==//
      }
     ?>  
     
  <!--    Scrip share ke medsos -->

    <div id="share-buttons" class="wrapper-dua"> 
      <a href="mailto:?Subject=Simple Share Buttons&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://simplesharebuttons.com">
        <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
      </a>
      <a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
      </a>
      <a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
      </a>
    </div>
   </div>  
  <div class="footer">
      <div class="wrapper clearfix">
       <i><h1 class="text-wahdah">AL-Wahdah</h1></i>
        <div class="footer-navigation" class="clearfix">
          <ul class="footer-dua">
            <li class="menu-home clearfix"><a href="#">HOME</a></li>
            <li class="menu-home clearfix"><a href="#">ABOUT</a></li>
            <li class="menu-home clearfix"><a href="#">ARCHIVE</a></li>
            <li class="menu-home clearfix"><a href="#">CONTACT</a></li>
            <li class="menu-header-cari-satu"><i  class="fa fa-search"></i></li>
        </ul>
      </div>
    </div>
    <div class="wrapper clearfix">
    <div class="garis"></div>
    <div class="nunc-placerat">
      <p>Nunc placerat dolor at lectus hendrerit dignissim. Ut tortor sem, consectetur nec hendrerit ut, ullamcorper ac odio. Donec viverra ligula at quam tincidunt imperdiet. Nulla mattis tincidunt auctor.</p>
    </div>
    <div class="garis-dua"></div>
    <div class="wrapper-dua">
      <div class="nunc-placerat-dua">
      <p>© 2018 - Al-Wahdah. All Rights Reserved.</p>
    </div>
    </div>
    <div class="medsos-navigation" class="clearfix">
        <ul class="footer-medsos">
          <li class="menu clearfix"><a href="https://www.facebook.com/bilalnak.soleh"></a><i  class="fa fa-facebook"></i></li>
          <li class="menu clearfix"><a href="https://twitter.com/bilal_mase"></a><i  class="fa fa-twitter"></i></li>
          <li class="menu clearfix"><a href="https://www.instagram.com/pondokinformatika/"></a><i  class="fa fa-instagram"></i></li>
          <li class="menu-home clearfix"><a href="#"></a><i  class="fa fa-pinterest"></i></li>
        </ul>
      </div>
    </div>  
    
  </div>
     <div class="burger">
       <div class="menu-header-bar-burger">
         <li class="menu-burger"><i  class="fa fa-close"></i></li>
       </div>   
         <li class=""><a href="#">HOME</a></li>
         <hr>
         <br>
         <li class=""><a href="#">ABOUT</a></li>
         <hr>
         <br>
         <li class=""><a href="#">ARCHIVE</a></li>
         <hr>
         <br>
         <li class=""><a href="#">CONTACT</a></li>
         <hr>
         <br>
     </div>
</body>
</html>

<?php
//===penutup if di atas ===//
// } else {
//   echo "Please <a href='login.php'>login</a> first.";
// }
?>