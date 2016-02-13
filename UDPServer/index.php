<!doctype html>
<html>
<head>
    <?php include "lib/config.php"; ?>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#f66885">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cssDefaultStyle.css">
    <link rel="stylesheet" href="css/animate.css">
    <title><?php echo $conf['web']['title']; ?></title>
    <script src="js/notify.js"></script>
</head>
<body onload="cooldown(5)" class="animated fadeIn">
    <div id="udp_header" class="default">
        <h1 class="title_head">Chào mừng đến với Advanced Craft Network. Để tiếp tục, hãy kéo xuống</h1>
    </div>
    <div class="default" id="navHeaderList">
        <a href="index.php">trang chủ</a>
        <a href="index.php">tải trò chơi</a>
        <a href="index.php">danh sách</a>
        <a href="index.php">hướng dẫn</a>
        <a href="index.php">nạp tiền</a>
    </div>
    <div class="center-path">
        <a href="index.php"><img style="transform: translate(0, -210px)" src="img/icon.png"></a>
    </div>
    <div class="div-panel" id="firsts">
        <h1>Lời nói đầu</h1>
        <span>Về Minecraft:</span>
        <p>
            Minecraft là một trò chơi thể loại sinh tồn,
            khám phá với thể loại góc nhìn thứ nhất(FPS) và thứ ba(TPS).
            Trò chơi rất đa dạng với những khối hình hộp và đồ họa 3D rất tốt.
            Minecraft giúp bạn có một thời gian nghỉ ngơi hoặc khi rảnh.
        </p>
        <span>Về Advanced Craft Network:</span>
        <p>Advanced Craft Network.............................................................................................</p>
    </div>
    <div class="div-panel" id="gamedownload">
        <h1>Tải về</h1>
        <p>Bạn đã có trò choi chưa? Nếu chưa, hãy chọn liên kết tải ở dưới. Nếu bạn nào có tài khoản đã mua của Minecraft thì bạn có thể tải trực tiếp ở <a href="https://minecraft.net/download">https://minecraft.net/download</a> còn nếu chưa thì bạn có thể bấm vào đây để tải về</p>
    </div>
    <div class="div-panel" id="ipserver">
        <h1>Bạn đã có trò chơi?</h1>
        <p>Nếu bạn đã có trò chơi. Bạn hãy vào phần <span>Chơi mạng</span> > <span>Thêm máy chủ</span> và dán dòng màu đen sau vào Địa chỉ máy chủ và nhấn <span>Đã xong</span></p>
        <div id="ip-content"><?php echo $conf['ip'] . ":" . $conf['port']; ?></div>
        <p><a href="page/huong-dan-ket-noi-den-server.html">Nếu bạn không rõ, hãy nhấn vào đây. </a></p>
        <p>Nếu bạn đã vào được máy chủ thì bấm vào nút dưới đây để tiếp tục. </p>
        <a class="button"></a>
    </div>


    <!--Notify-->
    <?php if ($conf['notify'] == true){ ?>
        <div class="notify animated slideInUp" id="notify" onclick="hideNotify()">
            <p><?php echo $conf['notifyTitle']; ?></p>
            <p class="padding-20x"><?php echo $conf['notifyContent']; ?></p>
        </div>
    <?php } ?>



</body>
</html>