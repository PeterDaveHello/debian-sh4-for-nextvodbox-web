<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>
Debian Wheezy sh4 for 網樂通(NextVODBox)
</title>
<meta name="description" content="網樂通用的Debian! Unofficial Debian Wheezy SH4 for Nextvodbox" />
<meta name="keywords" content="網樂通, nextvodbox, wheezy, sh4, OS, Debian, Linux, RISC, Download" />
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
<style>
body {background-color:#4D4D4D;font-size:xx-large;color:#FF0066;}
a, a:hover{color:#000066}
h2{color:#FFFF00;}
</style>
</head>
<body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<div>
這些是給被停止服務的網樂通使用的, 自動刷機檔解壓縮後可以用Win32 Disk Imager或DD等方式寫入隨身碟後對網樂通進行還原區域重建, 再利用還原功能建出Debian wheezy sh4來, 會自己進去掛載分割區的可以直接拿rootfs還原檔去覆蓋原本的還原檔, apt repo預設不用修改, 除非你是使用其他版本的debian刷進去但想用這邊的套件那就可以掛上這一串
<p>
<h2>自動刷機檔(一般刷機都是使用這個即可,已經包含下面兩樣了):</h2>
<a href="download/new-debian-wheezy-sh4.img.7z">new-debian-wheezy-sh4.img.7z</a><br />
MD5:b1dc7c51f92b1c988829bb3c7ce826bc<br />
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
</div>
</body>
</html>
