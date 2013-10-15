<? require_once("template/header.php");?>
<div class="panel-group" id="accordion">

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#installOS">
          系統安裝（改機主要部份）
        </a>
      </h4>
    </div>
    <div id="installOS" class="panel-collapse collapse in">
      <div class="panel-body">
        <ol class="breadcrumb" id="handbook">
          <li class="active"><a href="#">概念</a></li>
          <li><a href="#">製作刷機隨身碟</a></li>
          <li><a href="#">用隨身碟把還原磁區刷進網樂通</a></li>
          <li><a href="#">用還原磁區把安裝系統</a></li>
        </ol>
        <p class="text-primary">
          大致概念如下(詳細流程編寫中):
          <ol>
            <li>先下載<strong>自動刷機檔刷</strong>，解壓縮後使用<a href="http://sourceforge.net/projects/win32diskimager/"><strong>Win32DiskImager</strong></a>，(在windows系統)或<a href="http://linux.vbird.org/linux_basic/0240tarcompress.php#dd"><strong>dd</strong></a>(在linux,Mac,FreeBSD等*nix系統)等方式寫入隨身碟</li>
            <li>使用方式<a href="https://docs.google.com/document/d/1UWJxV8N8fbvjcvePgrruRmZuJwPseCyHZvebNddeYWc/pub#h.6ar6yevzgwzi">同sh4twbox</a>使用兩次reset進行安裝, 第一次reset是把還原區刷入網樂通, 第二次reset是利用還原功能把Debian灌進網樂通主要開機分割區</li>
            <li>刷好之後透過<a href="http://zh.wikipedia.org/zh-tw/PuTTY"><strong>putty</strong></a>(<a href="http://the.earth.li/~sgtatham/putty/latest/x86/putty.exe">點此下載</a>)等終端軟體使用ssh的方式連入網樂通, 預設的帳號密碼都是<strong>root</strong>, 網路預設是使用DHCP自動取得IP, 想知道網樂通被分配到的IP可以由IP分享器的管理介面查看分配到的IP</li>
            <li>成功登入後輸入命令<strong>lsb_release -a</strong>, 按下Enter得到結果有看到一行Distributor ID: Debian開頭的字串就表示成功了</li>
            <li>接下來就可以開始做你想做的事情, 包括使用Apache架設網站、使用Transmission下載BT、使用Samba架設檔案伺服器等...只需要透過apt-get這個指令就行了!</li>
          </ol>
        </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#command">
          常用命令
        </a>
      </h4>
    </div>
    <div id="command" class="panel-collapse collapse">
      <div class="panel-body">
        <ol class="breadcrumb" id="handbook">
          <li class="active"><a href="#">只有在Debian系列會用到的</a></li>
          <li><a href="#">大部分Linux都會用到的</a></li>
        </ol>
          安裝套件：apt-get install  /  移除套件：apt-get remove / 搜尋套件：apt-cache search<br />
          例如：apt-get install vim，就是安裝vim這套軟體，關於apt-get的詳細用法可以參考這邊：<a href="http://nathan-inlinux.blogspot.tw/2013/05/apt-get.html">http://nathan-inlinux.blogspot.tw/2013/05/apt-get.html</a>
          <hr />
          另外這邊提供一些常用linux命令的資料參考：
          <ul>
            <li><a href="http://ms.ntcb.edu.tw/~steven/tips/command.htm">Linux 常用指令 - Steven's Linux Note</a></li>
            <li><a href="http://wiki.ubuntu-tw.org/index.php?title=%E6%8C%87%E4%BB%A4">GNU/Linux 常用指令 - Ubuntu 正體中文 Wiki</a></li>
          </ul>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#webServer">
          網頁伺服器安裝（泛指架站）
        </a>
      </h4>
    </div>
    <div id="webServer" class="panel-collapse collapse">
      <div class="panel-body">
        <ol class="breadcrumb" id="handbook">
          <li class="active"><a href="#">概念</a></li>
          <li><a href="#">Apache</a></li>
          <li><a href="#">Mysql</a></li>
          <li><a href="#">PHP</a></li>
        </ol>
        <p class="text-primary">
          <a href="http://zh.wikipedia.org/wiki/LAMP">L.A.M.P</a>一般泛指<a href="http://zh.wikipedia.org/wiki/Linux"><strong>L</strong>inux</a> + <a href="http://zh.wikipedia.org/wiki/Apache_HTTP_Server"><strong>A</strong>pache</a> + <a href="http://zh.wikipedia.org/wiki/MySQL"><strong>M</strong>ysql</a> + <a href="http://zh.wikipedia.org/wiki/PHP"><strong>P</strong>HP</a>，因為屬於自由軟體、完全免費、有著不錯的穩定性，是近年來非常熱門的架站組合，本篇將帶領新手在網樂通上使用這樣優秀的套件組合架設出一個基本的網頁伺服器。
        </p>

        <p class="text-primary">
          以下為主要幾個會使用到的套件，安裝過程中可能需要按下鍵盤上的Y以及Enter鍵做安裝前的確認做安裝前的確認:<br />
          (若不需要到動態網頁以及資料庫的部份則可以只安裝apache2！)
          <ul>
            <li>Apache 2.x 安裝命令:</li>
            <div class="panel panel-default panel-body">
              apt-get install <strong>apache2</strong>
            </div>
            <li>PHP 5.x 安裝命令:</li>
            <div class="panel panel-default panel-body">
              apt-get install <strong>php5</strong>
            </div>
            <li>Mysql 5.x 安裝命令(安裝過程中要設定管理員密碼，需要輸入兩次):</li>
            <div class="panel panel-default panel-body">
              apt-get install <strong>mysql-server</strong>
            </div>
            <li>安裝php的時候apt-get會自動幫我們把libapache2-mod-php5加入安裝清單，所以不須另外安裝，而php要存取mysql資料庫時所需要的套件apt-get不會自動幫我們加入安裝清單，必須另外安裝，命令如下：</li>
            <div class="panel panel-default panel-body">
              apt-get install <strong>php5-mysql</strong>
            </div>
          </ul>
          以上安裝順利完成之後就已經完成http網頁伺服器的架設，並且支援PHP動態產生網頁以及能夠存取mysql資料庫了！<br />
          在自己的電腦上面打開瀏覽器，在網址列的地方輸入網樂通的IP並且按下Enter！<br />
          如果你有看到一個大大的<strong>It Works!</strong>字樣，恭喜！你成功了！<hr />
          在Debian GNU/Linux作業系統底下，安裝好Apache網頁伺服器軟體，預設的網站存放路徑為<strong>/var/www/</strong>這個目錄，接下來你就可以開始動手把網站套件或是自己寫好的網站丟進去了！
        </p>

      </div>
    </div>
  </div>
</div>

<? require_once("template/footer.php");?>
