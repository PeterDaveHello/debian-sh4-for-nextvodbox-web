<? require_once("template/header.php");?>

    <p class="text-primary">
      大致概念如下(詳細流程編寫中):
      <ol>
      <li>先下載刷機檔刷入網樂通, 使用方式同sh4twbox, 第一次reset是把還原區刷入網樂通, 第二次reset是利用還原功能把Debian灌進網樂通主要開機分割區</li>
      <li>刷好之後透過ssh連入網樂通, 預設帳號密碼都是root, 網路預設是使用DHCP取得IP, 可以由IP分享器的管理介面查看分配到的IP</li>
      <li>成功登入後輸入命令<strong>lsb_release -a</strong>, 若按下Enter鍵得到結果有看到一行Distributor ID: Debian開頭的字串就表示成功了</li>
      <li>接下來就可以開始做你想做的事情, 包括使用Apache架設網站、使用Transmission下載BT、使用Samba架設檔案伺服器等...只需要透過apt-get這個指令就行了!</li>
      </ol>
    </p>

<? require_once("template/footer.php");?>
