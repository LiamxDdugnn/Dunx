<?php
include('main/anti-ddos/anti-ddos.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">	
<title>Phạm Tiến Dũng - Trang Thanh Toán</title>
<link rel="icon" type="image/png" href="https://i.imgur.com/JpnVLpS.png" />
<meta property="og:title" content="Phạm Tiến Dũng - Trang Thanh Toán" />
<meta name="description" content="Designer And Developer By ChanHungDev!" />
<meta name="keywords" content="tiện ích, chanhungcoder, chanhungdev, dchanhung, code profile">
<meta name="copyright" content="ChanHungDev" />
<meta name="author" content="ChanHungDev" />
<meta property="og:image" width="100px" content="https://i.imgur.com/PnTx1v6.jpeg" />
<meta property="og:image:secure" width="100px" content="https://i.imgur.com/PnTx1v6.jpeg" />		
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="/main/web/css/style.css" type="text/css">
<link rel="stylesheet" href="/font-awesome/css/all.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--Font Chữ-->
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
<!--Kết Thúc Font Chữ-->
</head>
<body>
<div id='root'>
<div id='main'>
<div class='container'>
<header>
<div id='cover-image' style='background-image: url(&#39;https://i.imgur.com/Aj0Nz4s.png&#39;);'></div>
<div id='profile-header'>
<div id='avatar-image' style='background-image: url(&#39;https://i.imgur.com/lA53b5v.jpeg&#39;);'></div>
<div id='name'>
<p class='names' id='first-name'>Chấn Hưng <i class='fa-duotone fa-solid fa-badge-check fa-beat fa-2xs' style='color:rgb(17, 143, 249)' title='Đã Xác Minh'></i></p>
<p class='nicknames' id='nickname'>(Dev)</p>
<div id='skills'>
<div class='skill-item' style='color:#ff758f;' onclick='window.open(&#39;https://chanhung.dev/&#39;, &#39;_blank&#39;)'>Trang Thông Tin</div>
<div class='skill-item' style='color:#85D18A;' onclick='window.open(&#39;https://chanhung.dev/trang-tien-ich&#39;, &#39;_blank&#39;)'>Trang Tiện Ích</div>
</div>
</div>
</div>
<div class='bio-story'>
<div class='bio-story-thumb' style='background-image: url(&#39;https://i.imgur.com/JpnVLpS.png&#39;);'></div>
<div class='bio-story-content' style='margin-top: 6px;'>
<p>Welcome To My Checkout Page</p>
<span onclick='window.open(&#39;https://chanhung.dev/&#39;, &#39;_blank&#39;)'>ChanHung.Dev</span>
</div>
</div>
</header>
<div id='content-body'>
<!-- Mã QrBank -->
<p class='drop-title'>Thông Tin Thanh Toán</p>
<div id='link-box'>
<!-- Ngân Hàng 1-->
<div class='link-item'>
<div class='bio-story-thumb' style='background-image: url(&#39;https://i.imgur.com/JqbbrSo.png&#39;);'></div>
<div class='link-content'>
<p>Techcombank</p></p>
<div id='skills-qr'>
<div class='skill-item' style='color:#008080' id="showQrSpanBtn1"><center><i class="fa-light fa-qrcode fa-sm"></i> QR-Code</center></div>
</div>
</div>
<div class='link-btn'>       
<div class='link-btn-chill light-green' id='showQrDivBtn1'>VIEW</div>
</div>
</div>
<div id="qrModal1" class="modal">
<div class="modal-content">
<span class="close">&times;</span>
<center><h2>Qr-Code MBBank</h2></center>
<img id="qrImage1" class="qr-image" src="" alt="ChanHungDev">
<center><p>Chọn Hình Thức Chuyển Khoản</p></center>
<div class="modal-buttons">
<center>
<button id="downloadQrBtn1" class="button download-btn"><i class="fa-duotone fa-solid fa-download"></i></button> 
<button id="copyAccountBtn1" class="button copy-btn"><i class="fa-duotone fa-solid fa-copy"></i></button>
</center>
</div>
</div>
</div>
<!-- Ngân Hàng 2-->
<div class='link-item'>
<div class='bio-story-thumb' style='background-image: url(&#39;https://i.imgur.com/JqbbrSo.png&#39;);'></div>
<div class='link-content'>
<p>TP Bank</p>
<div id='skills-qr'>
<div class='skill-item' style='color:#008080' id="showQrSpanBtn2"><center><i class="fa-light fa-qrcode fa-sm"></i> QR-Code</center></div>
</div>
</div>
<div class='link-btn'>       
<div class='link-btn-chill light-green' id='showQrDivBtn2'>VIEW</div>
</div>
</div>
<div id="qrModal2" class="modal">
<div class="modal-content">
<span class="close">&times;</span>
<center><h2>Qr-Code MBBank</h2></center>
<img id="qrImage2" class="qr-image" src="" alt="ChanHungDev">
<center><p>Chọn Hình Thức Chuyển Khoản</p></center>
<div class="modal-buttons">
<center>
<button id="downloadQrBtn2" class="button download-btn"><i class="fa-duotone fa-solid fa-download"></i></button> 
<button id="copyAccountBtn2" class="button copy-btn"><i class="fa-duotone fa-solid fa-copy"></i></button>
</center>
</div>
</div>
</div>
<!-- Ngân Hàng 3-->
<div class='link-item'>
<div class='bio-story-thumb' style='background-image: url(&#39;https://i.imgur.com/O3WOC4s.jpeg&#39;);'></div>
<div class='link-content'>
<p>MOMO</p>
<div id='skills-qr'>
<div class='skill-item' style='color:#008080' id="showQrSpanBtn3"><center><i class="fa-light fa-qrcode fa-sm"></i> QR-Code</center></div>
</div>
</div>
<div class='link-btn'>       
<div class='link-btn-chill light-green' id="showQrDivBtn3">VIEW</div>
</div>
</div>
<div id="qrModal3" class="modal">
<div class="modal-content">
<span class="close">&times;</span>
<center><h2>Qr-Code MoMo</h2></center>
<img id="qrImage3" class="qr-image" src="" alt="ChanHungDev">
<center><p>Chọn Hình Thức Chuyển Khoản</p></center>
<div class="modal-buttons">
<center>
<button id="downloadQrBtn3" class="button download-btn"><i class="fa-duotone fa-solid fa-download"></i></button> 
<button id="copyAccountBtn3" class="button copy-btn"><i class="fa-duotone fa-solid fa-copy"></i></button>
</center>
</div>
</div>
</div>
<!-- Kết Thúc Mã QrBank -->
<footer>
<center><p>Copyright By <a href="https://www.facebook.com/profile.php?id=33302182">ChanHungDev</a></p></center>
</footer>
</div>
</div>
</div>
</div>
</div>
<script src="/main/web/script/copy.js"></script>
<script src="/main/web/script/script.js"></script>
<script crossorigin='anonymous' src='https://code.jquery.com/jquery-3.6.0.slim.min.js'></script>
<div class='no-items section' id='chanhung.dev'></div>
<!--<head>
<meta name='google-adsense-platform-account' content='ca-host-pub-1556223355139109'/>
<meta name='google-adsense-platform-domain' content='chanhung.dev'/>
</head>-->
<!--<body>
</body>-->
</body>
<!-- Kết thúc phần hiển thị -->
</html>
