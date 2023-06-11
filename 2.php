<!DOCTYPE HTML>

<html>
	<head>
		<title>WWDC23 重點&一些心得</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link type="image/png" sizes="96x96" rel="icon" href="assets/icons8-hard-working-96.png">
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	</head>

	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Content -->
								<section>
									<header class="main">
										<h1>WWDC23 重點&觀後心得</h1>
									</header>

									<span class="image main"><img src="images/wwdc23.jpg" alt="" /></span>
                                    <p>2023年的蘋果全球開發者大會（WWDC 2023）讓我驚呆了！蘋果在這次的活動中，推出了一系列令人嘆為觀止的產品，讓我覺得蘋果真的是科技界的領導者。在這篇文章中，我要和大家分享我對這些產品的看法和感想，包括Apple Vision Pro、15吋MacBook Air和M2系列晶片Mac Studio與Apple Silicon款Mac Pro。</p>

<p>Apple Vision Pro是一款結合了AR和VR的頭戴式設備，它可以讓您體驗到虛擬和現實的完美融合。它使用了micro‑OLED面板、雙眼達2,300萬畫素，支援Optic ID解鎖，搭配3片式的光學折射鏡片，可支援眼神對位，以及手勢和語音控制，數位顯示器可投射100吋寬大螢幕畫面。無論您想要玩什麼遊戲、看什麼電影、學習什麼知識或做什麼工作，Apple Vision Pro都能讓您感覺像是親臨現場一樣。</p>

<p>15吋MacBook Air是一款超薄的筆記型電腦，它的厚度只有11.5公釐、重量只有3.3磅，但卻擁有強大的性能和續航力。它採用了M2晶片，可以提供18小時的電池續航力，售價NT$42,900起。新款15吋MacBook Air在日後在台上市。它適合各種需要高效能、高速度和高穩定性的創意工作者和專業人士使用。它還配備了全新的Magic Keyboard、Force Touch觸控板、Touch ID指紋辨識和FaceTime HD攝影機，讓您的操作更加流暢和安全。</p>

<p>M2系列晶片Mac Studio與Apple Silicon款Mac Pro是為高階用戶設計的桌上型電腦。它們都使用了自家設計的M2晶片，具有超強的運算能力和圖形處理能力，可以應對各種高負荷的工作場景，如影像編輯、3D建模、音樂製作等。它們還有精美的外觀設計和豐富的連接埠，讓您可以隨意地擴充您的工作站。M2 Max款Mac Studio售價NT$64,999元起，M2 Ultra款Mac Studio售價NT$129,999元起。2023 Mac Pro售價NT$229,900起。</p>

<p>這就是我對2023年的蘋果全球開發者大會（WWDC 2023）的一些心得和評論。我覺得這些產品都非常棒，讓我更加期待未來的科技發展。</p>


<div class="video-container">
<iframe width="1010" height="500" src="https://www.youtube.com/embed/GYkq9Rgoj8E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
									

								</section>
								<header class="main">
                                    <h3>👋 留言板</h3>
                                </header>	
                                    <form method="post" action="db/comment2.php" onsubmit="return validateForm()">
                                        <div class="row gtr-uniform">
                                            <div class="col-6 col-12-xsmall">
                                                <input type="text" name="name" id="name" value="" placeholder="姓名" />
                                            </div>
                                            <div class="col-6 col-12-xsmall">
                                                <input type="email" name="email" id="email" value="" placeholder="電子郵件" />
                                            </div>
                                            
                                            
                                            <!-- Break -->
                                            <div class="col-12">
                                                <textarea name="message" id="message" placeholder="請在這裡輸入內容..." rows="6"></textarea>
                                            </div>
                                            
                                            <div class="g-recaptcha" data-sitekey="6LfCDxQmAAAAAAHt2kCgrA15iixN4ob3_HjMsWYq"></div>
                                            
                                            <!-- Break -->
                                            <div class="col-12">
                                                <ul class="actions">
                                                    <li><input type="submit" value="傳送" class="primary" /></li>
                                                </ul>
                                            </div>
                                        
                                        </div>
                                    </form>
                                    <section>
                                        <header><h3>📋 留言內容</h3></header>
    <?php
    include('db/conn.php');
    $sql = "SELECT * FROM comment2";
    $result = $connect->query($sql);
    
    if ($result->rowCount() > 0) {
      while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $name = $row['name'];
        $message = $row['message'];
        ?>
    
        <section class="comment">
          <div class="avatar">
          <img src="assets/user.png" alt="User Avatar">
          </div>
          <div class="comment-content">
            <h3 class="username"><?php echo $name; ?></h3>
            <p class="message"><?php echo $message; ?></p>
          </div>
        </section>
    
        <?php
      }
    }
    ?>
    
    
                                    </section>
    
    
                                    </section>
                                    
                            </div>
                        </div>
                        
                        <head>
                            
                          </head>
                                
                          <body>
                            
                            <!-- 浮動按鈕 -->
                            
    
                            <body>
                                <div id="floating-button" onclick="scrollToTop()">
                                    <img src="assets/arrow-up.png" alt="Arrow" width="50" height="50">
                                  </div>
                                  <script>
                                    function scrollToTop() {
                                      $('html, body').animate({
                                        scrollTop: 0
                                      }, 'slow');
                                    }
                                  </script>
                              </body>	
                    <!-- Sidebar -->
                        <div id="sidebar">
                            <div class="inner">
    
                                <!-- Search -->
                                <section>
                                    <form action="
                                    https://cse.google.com/cse?cx=a6281ea9750794650" id="a6281ea9750794650">
                                        <input type="hidden" name="cx" value="a6281ea9750794650">
                                        <input type="hidden" name="ie" value="UTF-8">
                                        
                                        <input type="text" name="q" placeholder="站内搜尋">
                                        
                                        <button class="button primary icon solid fa-search" type="submit">搜尋</button>
                                      </form>
                                      
                                </section>
                                <!-- Menu -->
                                <nav id="menu">
                                    <header class="major">
                                        <h2>Menu</h2>
                                    </header>
                                    <ul>
                                        <li><a href="index.php">🏠 首頁</a></li>
                                        <li><a href="photo_post/about.html">📂 關於作者 </a></li>
                                        
                                            
                                        <li><a href="photo_post/photo_index.html">📸 相簿</a></li>
                                        </li>
                                        <li><a href="feedback.php">💬 意見回饋</a></li>
                                        
    
                                            
                                        
                                    </ul>
                                </nav>
    
                                <section>
                                    <header class="major">
                                        <h2>📌 釘選文章</h2>
                                    </header>
                                    <div class="mini-posts">
                                        
                                        <article>
                                            
                                            <a href="1.php" class="image"><img src="images/pic01.jpg" alt="" /><br><br>
                                            <h3>如何賺錢</h3></a>
    
                                        </article>
                                        <article>
                                            
                                            <a href="photo_post/about.html" class="image"><img src="photo_post\assets\img\about\hi.PNG" alt="" /><br><br>
                                            <h3>自我介紹</h3></a>											
                                        </article>
                                    </div>
                                    
                                </section>
                            <!-- Section -->
                                <section>
                                    <header class="major">
                                        <h2>☎️ 聯絡我</h2>
                                    </header>
                                    <p>This is fake</p>									
                                    <ul class="contact">
                                        <li class="icon solid fa-envelope"><a href="mailto:information@untitled.tld">information@untitled.tld</a></li>
                                        <li class="icon solid fa-phone">(000) 000-0000</li>
                                        <li class="icon solid fa-map">Somewhere Road<br /></li>
                                    </ul>
                                </section>
    
                            
                                
    
                        </div>
                    </div>
    
            </div>
    
    
    
        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/browser.min.js"></script>
            <script src="assets/js/breakpoints.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>
            <script src="assets/js/validateForm.js"></script>
    <!--
        
░░░░░░░░▄░░░░░░░░░░░░░░▄
░░░░░░░░▌▒█░░░░░░░░░░░▄▀▒▌
░░░░░░░░▌▒▒█░░░░░░░░▄▀▒▒▒▐
░░░░░░░▐▄▀▒▒▀▀▀▀▄▄▄▀▒▒▒▒▒▐
░░░░░▄▄▀▒░▒▒▒▒▒▒▒▒▒█▒▒▄█▒▐
░░░▄▀▒▒▒░░░▒▒▒░░░▒▒▒▀██▀▒▌
░░▐▒▒▒▄▄▒▒▒▒░░░▒▒▒▒▒▒▒▀▄▒▒▌
░░▌░░▌█▀▒▒▒▒▒▄▀█▄▒▒▒▒▒▒▒█▒▐
░▐░░░▒▒▒▒▒▒▒▒▌██▀▒▒░░░▒▒▒▀▄▌
░▌░▒▄██▄▒▒▒▒▒▒▒▒▒░░░░░░▒▒▒▒▌
▀▒▀▐▄█▄█▌▄░▀▒▒░░░░░░░░░░▒▒▒    
                                
-->        
    </body>
    
    </html>