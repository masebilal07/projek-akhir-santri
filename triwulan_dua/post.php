<?php

session_start();   //pembuka session 
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
  <script src="lib/jquery.js"></script>
  <script src="dist/jquery.validate.js"></script>
 <!--  <link rel="stylesheet" href="css_val/screen.css">
  <script src="lib/jquery.js"></script>
  <script src="dist/jquery.validate.js"></script> -->
  <script type="text/javascript">
    $(document).ready(function(){
      $(".menu-header-cari-satu").click(function(){
        $(".cari-artikel").toggle("slow");
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

      $("#masukan").validate({
      rules: {
        komentar: {
          required: true,
          minlength: 3,
        },
        username: {
          required: true,
        },
         email: {
          required: true,
          email: true
        },
         number: {
          required: true,
        },
    
      },
      messages: {
        komentar: {
          required: "Masukan Password Anda",
          minlength: "Masukan password Anda Minimal 3"
        },
        username: "Masukan Username Anda",
        email: "Masukan Email Anda",
        number: "Masukan Number Anda",
      }

    });
      
    });

    
    newsletter.click(function() {
      topics[this.checked ? "removeClass" : "addClass"]("gray");
      topicInputs.attr("disabled", !this.checked);
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
  margin-bottom: 1em;
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
}
.dua {
  float: right;
}
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
  padding-bottom: 130px;
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
  image-rendering: 
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
  padding-top: 30px;
  text-align:center;
  font-size: 13px;
  width: 711px;
  margin: auto;
  padding-bottom: 32px;
  font-family: lato;
  color: #fff;
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
}
.text-konten {
  padding-top:15px;
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
.konten-komen {
  padding-top: 15%;
}
.input-komentar {
  width: 100%;
  /*padding-top:100px;*/
  height: 150px; 
}
.input-komen {
  width: 100%;
  height: 40px;
/*  padding-top:20px;*/ 
}
.kolom {
  font-family: lato;
  font-size: 25px;
  font-weight: bold;
  color: #5c6bc0;
}

.user i {
  font-size: 110px;
  margin: auto;
}
.buton {
  margin-top: 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius:5px;
  height: 40px;
}
.hidden {
  display: none;
}
.submit {
  float: left;
  height: 40px;
  width: 150px;
  border-radius: 5px;
  font-size: 15px;
  margin-top: 20px;
  font-family: lato;
  font-weight: bold;
  border: none;
  color: #fff;
  background: #5c6bc0;
  cursor: pointer;
}
.bintang {
  color: red;
}
.label {
  font-size: 15px;
  font-family: lato;
  font-weight: bold;
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
.pet {
  color: #fff;
}
.strong {
  font-size: 20px;
}
.user-komen p {
  font-family: lato;
  font-weight: bold;
  font-size: 20px;
}
@media only screen and (max-width:480px) {
  .header, .konten-dua, .footer {
    width: 100%;
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
  .hidden {
    display: block;
    padding-bottom: 50px;
  }
  .user-komen {
  width: 290px;
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
    width: 330px;
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
    padding-left: 0px;
    padding-right: 10px;
    float: left;
  }
}
</style>
</head>
<body>
  <div class="container clearfix">
    <div class="wrapper clearfix">
      <div class="header clearfix">
        <div class="satu">
          <i><a href="index.php"><h1>AL-Wahdah</h1></a></i>
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
    </div>

   <?php 
   //==koneksi ke database===//
    include 'proses/koneksi.php';
    ?>

    <?php 
      $cari = $_POST['cari'];
      $id = $_GET['id'];

        if ($cari != '') {

          //=====Pencarian ====//

          $sql = mysqli_query($connect,"SELECT * FROM article WHERE judul LIKE '".$cari."'");
        } else {

          //=====tampilkan berdasarkan id==//

            $sql = mysqli_query($connect, "SELECT * FROM article WHERE id = $id");
        }

        $row = mysqli_fetch_array($sql);

    ?>
    <div class="wrapper clearfix">
      <div class="konten-dua">
	      <button>Story</button>
	        <br>
	        <br>
	        <br>
	        <div class="wrapper-dua">
            <img src="wp-admin/gambar/<?php echo $row['gambar'] ?>">
	             <small><?= date('F d, Y', strtotime($row['tanggal']))?></small>
	          <h1><?= $row['judul'];?></h1>
	          <hr>
	          <p class="text-konten"><?= $row['isi'];?></p>
            <br>
            <img class="hidden" src="images/media.png">
	          <div class="pager">
	            <ul class="footer-pager">
	              <li class="menu-pager"><p>#Democraty</p></li>
	              <li class="menu-pager"><p>#Imperection</p></li>
	              <li class="menu-pager"><p>#Explorer</p></li>
	            </ul>
	          </div>

	        </div>
         <div class="wrapper-dua">
           <div class="konten-komen">
          
            <h5 class="kolom">Comment</h5>

            <form action="proses/proses_komentar.php" method="post" id="masukan">
              <label class="label">Komentar <span class="bintang">*</span>
                <textarea for="komentar" class="input-komentar" id="komentar" name="komentar" style="border: 1px solid #d9d9d9;"></textarea>
               </label>
              <br>
                <label for="username" class="label">Username <span class="bintang">*</span>
                  <input class="input-komen" id="username"  type="text" name="username" style="border: 1px solid #d9d9d9";>
                </label>
              <br>
                <label for="email" class="label">Email <span class="bintang">*</span>
                  <input class="input-komen" id="email" type="text" name="email" style="border: 1px solid #d9d9d9;">
                </label>
                <br>
                <label for="number" class="label">No HP <span class="bintang">*</span>
                  <input class="input-komen" id="nomor"  type="number" name="number" style="border: 1px solid #d9d9d9";>
                </label>
                  <input type="hidden" name="art" value="<?= $row['id'] ?>">
              <input class="submit" type="submit">
            </form>

          <div style="border-bottom:1px dashed #d9d9d9;;padding-top: 100px;">
        </div>
        <?php 
            include 'proses/koneksi.php';
         ?>
         <?php 

         //looping komentar dengan query di bawah //

             $sql = mysqli_query($connect,"SELECT * FROM Comment WHERE idartikel = $id");
              while ($row = mysqli_fetch_array($sql)) {
          ?>
        <style type="text/css">
        .user {
           margin-top: 50px;
           width: 100px;

           border-radius: 5px;
           float: left;
         }
         .user-komen {
           float: right;
           margin-top: 50px;
           width: 670px;
           border-radius: 5px;
         }
         .user i {
           font-size: 110px;
           margin: auto;
         }
          @media only screen and (max-width:480px) {
           .header, .konten-dua, .footer {
             width: 100%;
           }
           .hidden {
             display: block;
             padding-bottom: 50px;
           }
           .user-komen {
           width: 290px;
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
             padding-left: 0px;
             padding-right: 10px;
             float: left;
           }
         }
          </style>
              <div class="wrapper-dua">
                <div class="kotak-komen">
                 <p class="pet"> ..............</p>
                  <div>
                    <div class="user clearfix">
                      <img src="gambar/male-sillhoute.png" style="border-radius: 50%;">
                    </div>
                    <div class="user-komen">
                      <p><strong class="strong"><?= $row['nama']?> </strong><small><i><?= date('F d, Y')?></i></small></p>
                    <br>
                     <p><?= $row['komentar'];?></p>
                    <hr>
                    </div>
                  </div> 
                </div>
              </div>


              <?php
              //=======Penutup yang di atas =========//
                }
              ?>
              <input type="submit" class="buton" value="Baca Komentar Selengkapnya">
          </div>
         </div>
	      </div>
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
          <li class="menu-satu"><i  class="fa fa-search"></i></li>
        </ul>
      </div>
    </div>
    <div class="wrapper clearfix">
      <div class="garis">  
     </div>
     <div class="nunc-placerat">
      <p>Nunc placerat dolor at lectus hendrerit dignissim. Ut tortor sem, consectetur nec hendrerit ut, ullamcorper ac odio. Donec viverra ligula at quam tincidunt imperdiet. Nulla mattis tincidunt auctor.</p>
    </div>
    <div class="garis-dua">  
    </div>
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
       <li class=""><a href="index.php">HOME</a></li>
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
     </div>
</body>
</html>

<?php

//=====penutup dari if di atas===//

// } else {
//   echo "Please <a href='login.php'>login</a> first.";
// }
?>