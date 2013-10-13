<? require_once("template/header.php");?>

  <div>
    自動刷機檔解壓縮後可以用Win32 Disk Imager或DD等方式寫入隨身碟後對網樂通進行還原區域重建, 再利用還原功能把Debian wheezy sh4灌起來, 會自己進去掛載分割區的話可以直接拿rootfs還原檔去覆蓋原本的還原檔, apt repo預設不用修改, 除非你是使用其他版本的debian刷進去但想用這邊所編譯的套件那就可以掛上這一串
    <p>
      <h2>自動刷機檔:</h2>(一般刷機都是使用這個即可，已經包含下面兩樣了，不須重複下載、設定)<br />
      <a href="download/new-debian-wheezy-sh4.img.7z">new-debian-wheezy-sh4.img.7z</a><br />
      MD5:b1dc7c51f92b1c988829bb3c7ce826bc
      (解壓縮後MD5:cde3c29d335a634e06fee99d635ffb12)<br />
      「使用方式請參考sh4twbox的刷機流程, 總共要用reset還原兩次, 一次寫入還原檔一次還原」
      <hr />

      <h2>rootfs還原檔:</h2>
      <a href="download/target.tgz">target.tgz</a></br>
      MD5:1671c292c17feda658b2362db41ecc81<br />
      「單還原檔, 可以手動掛載sda1後自行置換原先的target.tgz」
      <hr />

      <h2>apt repositry:</h2>
      <font color="#FF4791">deb</font> <font color="#FF8330">http://forum.cse.yzu.edu.tw/debian-sh4/</font> <font color="#9147FF">wheezy</font> <font color="#FF4791">all</font><br />
      「使用以上兩個版本灌出來的debian不須特別調整此設定, 這是讓其他版的debian也能使用到我們套件的套件庫」
    </p>
  </div>

<? require_once("template/footer.php");?>
