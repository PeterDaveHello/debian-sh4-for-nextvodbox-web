<? require_once("template/header.php");?>

  <div>
    自動刷機過程請參考<a href="handbook.php">教學</a>，會自行進掛載還原分割區者可直接拿rootfs還原檔去覆蓋原檔<br />apt repo請於安裝完成之後修改，使用其他版本的Debian GNU/Linux也想用這邊所編譯的套件那就可以掛上這個設定。
    <p>
      <h2>自動刷機檔：</h2>(一般刷機都是使用這個即可，已經包含下面兩樣了，不須重複下載、設定)<br />
      <a href="download/new-debian-wheezy-sh4.img.7z">new-debian-wheezy-sh4.img.7z</a>
        -  MD5：b1dc7c51f92b1c988829bb3c7ce826bc
      <br />(解壓縮後MD5：cde3c29d335a634e06fee99d635ffb12)<br />
      <hr />

      <h2>rootfs還原檔：</h2>
      <a href="download/target.tgz">target.tgz</a>
        -  MD5：1671c292c17feda658b2362db41ecc81<br />
      「單還原檔，可以手動掛載sda1後自行置換原先的target.tgz」
      <hr />

      <h2>apt repositry：</h2>
      <font color="#FF4791">deb</font> <font color="#FF8330">http://ftp.yzu.edu.tw/Linux/debian-sh4-for-nextvod/</font> <font color="#9147FF">wheezy</font> <font color="#FF4791">all</font><br />
      「請注意，由於上面的系統包打包時的repositry路徑已經無效，請務必手動更新/etc/apt/sources.list」
    </p>
  </div>

<? require_once("template/footer.php");?>
