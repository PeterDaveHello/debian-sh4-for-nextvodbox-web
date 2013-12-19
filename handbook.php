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
    <div id="installOS" class="panel-collapse collapse">
      <div class="panel-body">
        <ol class="breadcrumb" id="handbook">
          <li class="active"><a href="#">製作刷機隨身碟</a></li>
          <li><a href="#">用隨身碟把還原磁區刷進網樂通</a></li>
          <li><a href="#">用還原磁區把安裝系統</a></li>
        </ol>
        <p class="text-primary">
          <ol>
            <li>
              先下載<strong>自動刷機檔刷</strong>(7z壓縮檔)，解壓縮後使用<a href="http://sourceforge.net/projects/win32diskimager/"><strong>Win32DiskImager</strong></a>，或<a href="http://linux.vbird.org/linux_basic/0240tarcompress.php#dd"><strong>dd</strong></a>方式寫入隨身碟，請參考底下說明。<br />
              <ul>
              <li>
                Windows作業系統：<br />請下載Win32DiskImager後解壓縮，執行主程式後點選資料夾的圖示打開刷機檔"new-debian-wheezy-sh4.img"，把Device選擇對應的隨身碟後點選"Write"<small>(寫入)</small>、"Yes"<small>(確定覆蓋隨身碟)</small>，就會開始進行製作刷機隨身碟的工作！
              </li>
              <li>
                Unix-like系統，如Linux, Mac OS X, FreeBSD：<br />在command line環境切到刷機檔所在的目錄，輸入這樣的命令即可：<small>(別忘了把sdx換成你的隨身碟代號！例如sdb)</small><br />
                <code>dd if=new-debian-wheezy-sh4.img of=/dev/sdx bs=1M</code>
              </li>
              </ul>
            </li>
            <li>
             使用方式同sh4twbox 0.7<small>(或更早)</small>版，使用兩次的reset進行安裝, 第一次reset是把還原區刷入網樂通, 第二次reset是利用還原功能把還原區內的Debian映像檔灌進網樂通主要開機分割區，方法如下：<br />
             <small>(請注意都是從斷電狀態開始的，請把網路接上有具備自動發放IP功能的"<a href="http://gordon168.tw/?p=553">IP分享器</a>"上以便觀察)</small>
             <ul>
               <li>插入刷機隨身碟，利用迴紋針或是黑髮夾、退片針等工具垂直插入網樂通前方的reset孔<strong>不放</strong>，將網樂通通電開機並在觀察到前面板的燈號閃爍<strong>三次</strong>後放開reset，此時會開始將還原映像檔刷入網樂通的還原區，此時可以至IP分享器管理界面觀察，如果有觀察到網樂通出現在裝置列表就可以關電源完成第一步reset，沒有接網路的話稍待5分鐘後也可以關電源完成第一步reset。</li>
               <li>第二步reset請不要插入刷機隨身碟，同樣按住reset孔<strong>不放</strong>，將網樂通通電開機並在觀察到前面板的燈號閃爍<strong>三次</strong>後放開reset，進行從還原區還原至開機分割區的動作，第二次的reset完成後不需要斷電即可使用，請至IP分享器管理界面觀察，觀察到網樂通出現在裝置列表就表示完成了！<small>(沒接IP分享器的話reset五分鐘後請自行處置)</small></li>
              </ul>
            </li>
            <li>刷好之後透過<a href="http://zh.wikipedia.org/zh-tw/PuTTY"><strong>PuTTY</strong></a>(<a href="http://the.earth.li/~sgtatham/putty/latest/x86/putty.exe">點此下載</a>)等終端軟體使用ssh的方式連入網樂通, 預設的帳號密碼都是<strong>root</strong>, 網路預設是使用DHCP自動取得IP, 想知道網樂通的IP請由IP分享器的管理界面或是網樂通的console界面查看，PuTTY使用教學可以參考<a href="http://www.cs.nctu.edu.tw/cswebsite/">交大資工</a>的"<a href="http://help.cs.nctu.edu.tw/help/index.php/HOWTO_-_%E4%BD%BF%E7%94%A8PuTTY%E7%99%BB%E5%85%A5%E7%B3%BB%E4%B8%8A%E5%B7%A5%E4%BD%9C%E7%AB%99">HOWTO - 使用PuTTY登入系上工作站</a>"或是<a href="http://ascc.sinica.edu.tw/iascc/">中研院計算中心</a>的"<a href="http://www.ascc.sinica.edu.tw/putty">putty 入門 教學</a>"</li>
            <li>
              登入後看到這個畫面就表示成功了!
              <div class="alert cli">
                The programs included with the Debian GNU/Linux system are free software;<br />
                the exact distribution terms for each program are described in the<br />
                individual files in /usr/share/doc/*/copyright.<br />
                <br />
                Debian GNU/Linux comes with ABSOLUTELY NO WARRANTY, to the extent<br /><br />
                permitted by applicable law.<br />
                root@debian-wheezy-sh4:~#
              </div>
            </li>
            <li>接下來就可以開始做你想做的事情, 包括使用Apache+PHP+Mysql架設網站、使用Transmission下載BT、使用Samba架設檔案伺服器等...只需要透過apt-get這個指令把需要的套件安裝好就行了!</li>
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
        apt是在Debian系統用來安裝/更新/移除套件的工具，常見的用法舉例如下~<small>(後面請接套件名稱)</small><br />
        安裝套件：<code>apt-get install</code>、 移除套件：<code>apt-get remove</code>、升級套件：<code>apt-get upgrade</code>、搜尋套件：<code>apt-cache search</code>、更新套件庫資訊：<code>apt-get update</code><br /><br />
        例如：<br />
        <code>apt-get update</code> 就是把套件的資訊跟套件庫同步<small>(更新)</small><br />
        <code>apt-get install vim</code> 就是安裝vim這套軟體<br />
        <code>apt-get remove vim</code> 就是移除vim這套軟體<br />
        而<code>apt-cache search transmission</code>則可以搜尋套件名稱/說明資訊內含有transmission字眼的套件，搭配grep來使用可以有效找出我們需要的套件，例如<code>apt-cache search <strong>php</strong> | grep <strong>mysql</strong></code>可以幫助我們有效、快速的找出PHP的mysql module！<br /><br />
        關於apt-get的詳細用法可以參考這邊：<a href="http://nathan-inlinux.blogspot.tw/2013/05/apt-get.html">http://ppt.cc/724~</a>
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
          架設網頁伺服器（一般俗稱的架站）
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
            <code>apt-get install <strong>apache2</strong></code>
            <li>PHP 5.x 安裝命令:</li>
            <code>apt-get install <strong>php5</strong></code>
            <li>Mysql 5.x 安裝命令(安裝過程中要設定管理員密碼，需要輸入兩次):</li>
            <code>apt-get install <strong>mysql-server</strong></code>
            <li>安裝php的時候apt-get會自動幫我們把libapache2-mod-php5加入安裝清單，所以不須另外安裝，而php要存取mysql資料庫時所需要的套件apt-get不會自動幫我們加入安裝清單，必須另外安裝，命令如下：</li>
            <code>apt-get install <strong>php5-mysql</strong></code>
          </ul>
          以上安裝順利完成之後就已經完成http網頁伺服器的架設，並且支援PHP動態產生網頁以及能夠存取mysql資料庫了！<br />
          在自己的電腦上面打開瀏覽器，在網址列的地方輸入網樂通的IP並且按下Enter！<br />
          如果你有看到一個大大的<strong>It Works!</strong>字樣，恭喜！你成功了！<hr />
          在Debian GNU/Linux作業系統底下，安裝好Apache網頁伺服器軟體，預設的網站存放路徑為<strong>/var/www/</strong>這個目錄，接下來你就可以開始動手把網站套件或是自己寫好的網站丟進去了！
        </p>

      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#transmission">
          當成BT下載機
        </a>
      </h4>
    </div>
    <div id="transmission" class="panel-collapse collapse">
      <div class="panel-body">
        <ol class="breadcrumb" id="handbook">
          <li class="active"><a href="#">Transmission安裝</a></li>
          <li><a href="#">基本使用</a></li>
          <li><a href="#">進階使用</a></li>
        </ol>
        <p class="text-primary">
          <a href="http://zh.wikipedia.org/wiki/Transmission">Transmision</a>是在Linux作業系統上最多人使用的一套BT客戶端軟體，由於我們不使用網樂通本身的圖形界面(效能不好)，這邊僅須要安裝Transmission的常駐程式以及命令列界面即可，安裝命令如下：
          <code>apt-get install <strong>transmission-daemon</strong></code><br />
          (如果普通在一般電腦上面的安裝通常是直接安裝transmission而不是transmission-daemon)<hr />
          安裝好後我們可以輸入這樣的指令確認是否已經安裝並且成功執行：<code>/etc/init.d/transmission-daemon status</code>，如果看到這樣的訊息就表示成功了：
          <div class="alert cli">[ <span class="cli-g">ok</span> ] transmission-daemon is running.</div>
          確認成功安裝之後，接下來我們要修改設定檔，你可以使用nano、vim、或任何的文字編輯軟體，這邊以vim為例，編輯Transmission的設定檔，命令如下：<code>vim /etc/transmission-daemon/settings.json</code>，然後我們找到這一行設定：
          <div class="alert cli">"rpc-whitelist": "127.0.0.1",</div>
          這邊的設定將會非常重要，如果您只會使用一台電腦連線控制網樂通進行下載的工作的話(通常不會)，就把127.0.0.1改成那台電腦的IP(而且那台電腦拿到的IP要是固定的，否則要會要常改設定)，通常做法是把這邊的IP填入網樂通的IP，並且把最後一段用萬用字元星號取代(*)，讓同網段的IP都能夠存取，例如網樂通得IP如果是192.168.1.7就把這邊的127.0.0.1改成192.168.1.*，這樣應該位於家中的大部分電腦都可以順利連上網樂通了！當然也有*.*.*.*這種不限定任何IP的設定，不過相對安全性較低，不建議使用！這邊改完後就可以存檔離開了，這邊範例的改法為：
          <div class="alert cli">"rpc-whitelist": "192.168.1.*",</div>
          存檔離開後我們使用這樣的命令讓Transmission重新載入我們剛剛修改過的設定檔：<code>/etc/init.d/transmission-daemon reload</code>，成功的話將看到這樣的訊息：
          <div class="alert cli">[ <span class="cli-g">ok</span> ] Reloading bittorrent daemon: transmission-daemon.</div>
          接下來請打開瀏覽器(開瀏覽器的電腦IP要符合剛剛設定的範圍才行！例如192.168.1.99就符合我剛剛設定的192.168.1.*)，並且在網址列打上你的IP，後面加上冒號以及數字9091，這邊輸入的都是半形的字元，例如我的網樂通IP是192.168.1.7，我就打：<code>192.168.1.7:9091</code>，按下Enter後如果看到要輸入帳號密碼的對話框就成功了！預設的帳號密碼皆為<strong>transmission</strong>，到目前為止你已經有一個簡單的網頁介面可以操作BT下載囉！
          <hr />
          修改帳號密碼/中文介面/進階使用...待續!
        </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#samba">
          Samba檔案伺服器
        </a>
      </h4>
    </div>
    <div id="samba" class="panel-collapse collapse">
      <div class="panel-body">
        <ol class="breadcrumb" id="handbook">
          <li class="active"><a href="#">Samba安裝</a></li>
          <li><a href="#">使用</a></li>
        </ol>
        <p class="text-primary">
          <a href="http://zh.wikipedia.org/wiki/Samba">Samba</a>是在各種*nix系統上非常普遍被使用的資源共享軟體，我們經常使用Samba來架設檔案伺服器以及印表機伺服器，使用Samba架設的檔案伺服器可以讓Windows以及各種Unix-like的作業系統輕鬆的存取伺服器上的檔案資源，透過這樣的檔案伺服器我們也可以輕易的作到網路影音串流的功能，這邊會示範檔案伺服器架設的部份，Samba的安裝命令如下：<br />
          <code>apt-get install <strong>samba</strong></code><br />
          安裝好後我們可以輸入這樣的指令確認是否已經安裝並且成功執行：<code>/etc/init.d/samba status</code>，如果看到這樣的訊息就表示成功了：
          <div class="alert cli">
            [ <span class="cli-g">ok</span> ] nmbd is running.<br />
            [ <span class="cli-g">ok</span> ] smbd is running.
          </div>
          確認安裝成功後，接下來要把決定分享哪些目錄以及分享出來的權限等相關設定寫入設定檔，你可以使用nano、vim、或任何的文字編輯軟體來作編輯設定檔的工作，samba server的設定檔位於位於/etc/samba/smb.conf，這邊以vim為例，命令如下：<code>vim /etc/samba/smb.conf</code>開啟後在檔案最下方加入分享設定，每個人會需要使用到的設定不盡相同，這邊僅以在家中基本使用到的功能舉例：
          <div class="alert cli">
            [Samba]<br >
            path = /media/sdb2<br >
            public = yes<br >
            writable = yes<br >
            guest ok = yes
          </div>
          <hr />
          待續...
        </p>
      </div>
    </div>
  </div>


</div>


<? require_once("template/footer.php");?>
