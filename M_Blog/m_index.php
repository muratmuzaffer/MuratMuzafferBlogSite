<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Anasayfa | Murat Muzaffer</title>
    <link rel="shortcut icon" href="img/Mm%20(1).ico" type="image/x-icon">
    <link rel="stylesheet" href="CSS/style.css">
    <script src="https://kit.fontawesome.com/92878b85dd.js" crossorigin="anonymous"></script>
    <!Font Delicious Handrawn>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&display=swap" rel="stylesheet">
    <!Font Gruppo>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">
    <!Font Michroma>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">
    <!Font Redacted Script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Redacted+Script:wght@300&display=swap" rel="stylesheet">
    <!Font Shadows Into Light>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <!Font Source Code Pro>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet">
    <!Font Bebas Neue>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!Font Marck Script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
    <!Font Raleway>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <!Font Orbitron>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
</head>
<body>
    
    <section id="menu">
        <div id="logo">Murat<br>Muzaffer</div>
        <nav>
            <div id="solmenu">
            <div id="solpad1"><a href="#resume"><i class="fa-solid fa-user-graduate ikon"></i>RESUME</a></div>
            <div id="solpad2"><a href="#hakkimda"><i class="fa-solid fa-circle-info ikon"></i>ABOUT</a></div>
            </div>
            <div id="sagmenu">
            <div id="sagpad2"><a href="#contact"><i class="fa-solid fa-address-book ikon"></i>CONTACT</a></div>
            <div id="sagpad1"><a href="#portfolyö"><i class="fa-sharp fa-solid fa-briefcase ikon"></i>PORTFOLYO</a></div>
            
            </div>
        </nav>
    </section>
    <section id="anasayfa">
        
        <div id="icerik">
            <div id="dikey"></div>
            <h2 id="h2bas">Murat Muzaffer</h2>
            <p id="basp">I'm computer programmer.</p>
        </div>
        
        <form action="CV.php" method="post">
		<input type="hidden" name="pdf_id" value="1" class="indir">
		<input type="submit" class="gonderr" value="CV İNDİR">
            
	</form>

    </section>
    <section id="hakkimda">
        <div id="h3about"><h3>About me</h3></div>
    <div class="container">
        <div id="sol">
            <span id="span2">29</span>
            <p id="h5sol">
            Ağustos 2003’te Bursa’da doğdum. İlk ve orta öğrenimimi Bursa'da tamamladım. Ardından 2021 yılında Ertuğrul Gazi Anadolu Lisesinden mezun oldum.
            </p>
        </div>
        <div id="sag">
        <span>L</span>
            <p id="psag">ise yıllarımda başladığım programlama ile 4 senedir ilgileniyorum.Ege üniversitesinde bilgisayar programcılığı eğitimi almaktayım. </p>
        </div>
        
        <?php include("baglanti.php");
            $sql = "SELECT resim FROM vt_resim WHERE id=11";
            $result = mysqli_query($baglan, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $resim = $row["resim"];
                    echo "<img src='data:image/jpg;base64,".base64_encode($resim)."' class='img-fluid mt100'>";}
            } else {
                echo "Veritabanında resim yok.";
            }?>
        
    </div>
    </section>
    <section id="resume">
        <div id="h6bas"><h3>Resume</h3></div>
        <div id="altb"><h6>İyi, Kötü, Harika</h6></div>
        <div class="timeline">
  <div class="year">
    <div class="inner">
      <span class="sf">2003</span>
    </div>
  </div>
  <ul class="days">
    <li class="day">
      <div class="events">
        <p>Adnan Menderes İlköğretim Okulu Yıldırım/BURSA</p>
          <div class="date"><b>2009/09-2014/06</b></div>
      </div>
    </li>
    <li class="day">
      <div class="events">
        <p>Selçuk Hatun Orta Okulu Yıldırım/BURSA</p>
          <div class="date"><b>2014/09-2017/06</b></div>
      </div>
    </li>
    <li class="day">
      <div class="events">
        <p>Ertuğrul Gazi Anadolu Lisesi Yıldırım/BURSA</p>
          <div class="date"><b>2017/09-2021/06</b></div>
      </div>
    </li>
    <li class="day">
      <div class="events">
        <p>Ege Üniversitesi Bornova/İZMİR</p>
        <div class="date"><b>2021/09-202?/06</b></div>
      </div>
    </li>
  </ul>
  <div class="year year--end">
    <div class="inner">
      <span class="sf">2023</span>
    </div>
  </div>
</div>
    </section>
    <section id="portfolyö">
     <div id="hbasp"><h3>Portfolio</h3></div>
        <table width="1340px" height="800px">
    <tr >
        <td align="center"><div class="resim-alani">
            <?php include("baglanti.php");
            $sql = "SELECT resim FROM vt_resim WHERE id=1";
            $result = mysqli_query($baglan, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $resim = $row["resim"];
                    echo "<img src='data:image/jpg;base64,".base64_encode($resim)."' height='400' width='265'>";}
            } else {
                echo "Veritabanında resim yok.";
            }?>
        <div class="renkli-filtre1"></div><div class="yazi-alani"><h2>Murat Muzaffer</h2><p>Bu bir örnek cümle.</p></div></div></td>
        <td align="center"><div class="resim-alani">
            <?php include("baglanti.php");
                $sql = "SELECT resim FROM vt_resim WHERE id=2";
                $result = mysqli_query($baglan, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $resim = $row["resim"];
                    echo "<img src='data:image/jpg;base64,".base64_encode($resim)."' height='400' width='265'>";}
                } else {
                    echo "Veritabanında resim yok.";
                }?>
        <div class="renkli-filtre2"></div><div class="yazi-alani"><h2>Murat Muzaffer</h2><p>Bu bir örnek cümle.</p></div></div></td>
        
        <td align="center"><div class="resim-alani">
            <?php include("baglanti.php");
            $sql = "SELECT resim FROM vt_resim WHERE id=3";
            $result = mysqli_query($baglan, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $resim = $row["resim"];
                    echo "<img src='data:image/jpg;base64,".base64_encode($resim)."' height='400' width='265'>";}
            } else {
                echo "Veritabanında resim yok.";
            }?>
        <div class="renkli-filtre3"></div><div class="yazi-alani"><h2>Murat Muzaffer</h2><p>Bu bir örnek cümle.</p></div></div></td>
        <td align="center"><div class="resim-alani"><?php include("baglanti.php");
            $sql = "SELECT resim FROM vt_resim WHERE id=4";
            $result = mysqli_query($baglan, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $resim = $row["resim"];
                    echo "<img src='data:image/jpg;base64,".base64_encode($resim)."' height='400' width='265'>";}
            } else {
                echo "Veritabanında resim yok.";
            }?>
        <div class="renkli-filtre4"></div><div class="yazi-alani"><h2>Murat Muzaffer</h2><p>Bu bir örnek cümle.</p></div></div></td>
        <td align="center"><div class="resim-alani"><?php include("baglanti.php");
            $sql = "SELECT resim FROM vt_resim WHERE id=5";
            $result = mysqli_query($baglan, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $resim = $row["resim"];
                    echo "<img src='data:image/jpg;base64,".base64_encode($resim)."' height='400' width='265'>";}
            } else {
                echo "Veritabanında resim yok.";
            }?>
        <div class="renkli-filtre5"></div><div class="yazi-alani"><h2>Murat Muzaffer</h2><p>Bu bir örnek cümle.</p></div></div></td>
    </tr>
    <tr>
        <td align="center"><div class="resim-alani"><?php include("baglanti.php");
            $sql = "SELECT resim FROM vt_resim WHERE id=6";
            $result = mysqli_query($baglan, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $resim = $row["resim"];
                    echo "<img src='data:image/jpg;base64,".base64_encode($resim)."' height='400' width='265'>";}
            } else {
                echo "Veritabanında resim yok.";
            }?>
        <div class="renkli-filtre6"></div><div class="yazi-alani"><h2>Murat Muzaffer</h2><p>Bu bir örnek cümle.</p></div></div></td>
        <td align="center"><div class="resim-alani"><?php include("baglanti.php");
            $sql = "SELECT resim FROM vt_resim WHERE id=7";
            $result = mysqli_query($baglan, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $resim = $row["resim"];
                    echo "<img src='data:image/jpg;base64,".base64_encode($resim)."' height='400' width='265'>";}
            } else {
                echo "Veritabanında resim yok.";
            }?>
        <div class="renkli-filtre7"></div><div class="yazi-alani"><h2>Murat Muzaffer</h2><p>Bu bir örnek cümle.</p></div></div></td>
        <td align="center"><div class="resim-alani"><?php include("baglanti.php");
            $sql = "SELECT resim FROM vt_resim WHERE id=8";
            $result = mysqli_query($baglan, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $resim = $row["resim"];
                    echo "<img src='data:image/jpg;base64,".base64_encode($resim)."' height='400' width='265'>";}
            } else {
                echo "Veritabanında resim yok.";
            }?>
        <div class="renkli-filtre8"></div><div class="yazi-alani"><h2>Murat Muzaffer</h2><p>Bu bir örnek cümle.</p></div></div></td>
        <td align="center"><div class="resim-alani"><?php include("baglanti.php");
            $sql = "SELECT resim FROM vt_resim WHERE id=9";
            $result = mysqli_query($baglan, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $resim = $row["resim"];
                    echo "<img src='data:image/jpg;base64,".base64_encode($resim)."' height='400' width='265'>";}
            } else {
                echo "Veritabanında resim yok.";
            }?>
        <div class="renkli-filtre9"></div><div class="yazi-alani"><h2>Murat Muzaffer</h2><p>Bu bir örnek cümle.</p></div></div></td>
        <td align="center"><div class="resim-alani"><?php include("baglanti.php");
            $sql = "SELECT resim FROM vt_resim WHERE id=10";
            $result = mysqli_query($baglan, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $resim = $row["resim"];
                    echo "<img src='data:image/jpg;base64,".base64_encode($resim)."' height='400' width='265'>";}
            } else {
                echo "Veritabanında resim yok.";
            }?>
        <div class="renkli-filtre10"></div><div class="yazi-alani"><h2>Murat Muzaffer</h2><p>Bu bir örnek cümle.</p></div></div></td>
    </tr>
    </table>
    </section>
    <section id="contact">
           <div id="hbaspp"><h3>Contact</h3></div>
        <table width="1340px" height="400px">
        <tr>
            <td  width="670px" height="400px" id="tbl1id">
                <h4 id="ilkbas">İletişim</h4>
                <div id="bursaust">
                <h5 id="ilbas"><u>BURSA</u></h5>
                <p id="adres">Değirmenlikızık Mah. 4.Şahin Sok. Değirmenpark Evleri No:8/C Daire:35 Yıldırım/BURSA</p>
                </div>
                <div id="izmirust">
                <h5 id="ilbas"><u>İZMİR</u></h5>
                <p id="adres">Mevlana Mah. 1739.Sok No:11 Daire:16 Bornova/İZMİR</p>
                </div>
            </td>
            <td>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3124.5785272404446!2d27.227575715372783!3d38.4512031807258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2str!4v1680537533755!5m2!1str!2str" width="600" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="map"></iframe>
            </td>
        </tr>
        </table> 
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div id="iletisimopak">
                <div id="formgroup">
                    <div id="solform">
                        <input type="text" name="isim" placeholder="Ad Soyad" required class="formcontrol">
                        
                        <input type="text" name="konu" placeholder="Konu Başlığı" required class="formcontrol">
                        
                        
                    </div>
                    <div id="sagform">
                        <input type="email" name="mail" placeholder="Email adresiniz" required class="formcontrol">
                        <input type="number" name="tel" placeholder="Telefon Numarası" required class="formcontrol">
                        
                    </div>
                    <div id="altson">
                        <i class="fa-solid fa-phone pikon"></i>Phone : 0 537 828 41 47<br><br>
                        <i class="fa-solid fa-envelope pikon"></i>Email : muratmuzaffer@icloud.com
                        
                    </div>
                </div>    
                <div id="textbuton"><textarea name="mesaj" id="" cols="40" placeholder="Mesaj Giriniz." rows="10" required class="formcontrol"></textarea>
                    </div>
            <input type="submit" class="gonder" value="Gönder">
            </div>
        </form>

    </section>
    <section id="footer"> <footer>
            
                <div id="copyright">2023 | Tüm Hakları Saklıdır.</div>
       <div id="up"><a href="#menu"><i class="fa-sharp fa-solid fa-angle-up" ></i></a></div><br><br>
                <div id="socialfooter">
                    <a href="#"><i class="fa-brands fa-instagram social"></i></a>
                    <a href="#"><i class="fa-brands fa-square-twitter social"></i></a>
                    <a href="#"><i class="fa-brands fa-square-facebook social"></i></a>
                </div>
                
            </footer>
    </section>
    
</body>    
</html>

<?php
include("baglanti.php");
function kontrol($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
    if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"],$_POST["konu"],$_POST["mesaj"])){
        $adsoyad=kontrol($_POST["isim"]);
        $telefon=kontrol($_POST["tel"]);
        $email=kontrol($_POST["mail"]);
        $konu=kontrol($_POST["konu"]);
        $mesaj=kontrol($_POST["mesaj"]);
        
        
        $ekle="INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj)
        VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";
        
        if($baglan->query($ekle)===TRUE){
            echo"<script>alert('Mesajınız gönderidi.')</script>";
        }
    }
?>