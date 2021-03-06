<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-width=1.0, maximum=1.0, user-scalable=0">
    <meta name="keywords" content="ideas, share, blog, code, music">
    <link rel="stylesheet" href="index.css?ver=1.0">
    <link rel="shortcut icon" type="image/x-icon" id="icon">
	<title>JavaScript如何实现动态加载页面内容 - domeii</title>
	<script  src="https://domeii.ml/js/jQuery/jquery-3.4.1.js?ver=1.0"></script>
	<script src="https://domeii.ml/js/default_config.js?ver=1.0"></script>
	<script>
		$(function(){
			$('#icon').attr('href', _iconpath);
		});
	</script>
</head>
<body>
	<!-- 最上面的条条 -->
	<script src="https://domeii.ml/js/standard_header.js?ver=1.0"></script>

	<!-- 正文 -->
	<div id="main">
		<p id="title">JavaScript如何实现动态加载页面内容</p><hr>
		<div id="infoWrap">
			<img src="https://domeii.ml/images/portrait_lw.png" class="portrait">
			<p class="editDate">2020/1/10</p>
		</div><br>
		<h2>文档高度、可视窗口高度和滚动高度</h2>
		<p>首先检测document.compatMode，如果值为“CSS1Compat”，则用document.documentElement.scrollHeight获取文档高度，用document.documentElement.clientHeight获取可视窗口高度，用document.documentElement.scrollTop获取滚动高度。如果不是，则将“documentElement”替换为“body”。</p>
		<h2>监测是否滑倒了底部</h2>
		<p class="code">
			window.onscroll = function() {<br>
			&emsp;var scrollT = document.documentElement.scrollTop;<br>
			&emsp;var scrollH = document.documentElement.scrollHeight;<br>
			&emsp;var clientH = document.documentElement.clientHeight;<br>
			&emsp;if (scrollT == scrollH - clientH) {<br>
			&emsp;&emsp;console.log('到底啦！');<br>
			&emsp;}<br>
			}
		</p>
		<h2>加载内容</h2>
		<p>这个比较简单，只要把触发写在上面那个地方就行啦。</p>
	</div>

	<!-- 测试回到顶部 -->
	<img id="goToTop" src="https://domeii.ml/images/top.svg">
		<script>

			var goToTop = document.getElementById('goToTop');
			var goToTopItv;

			window.onscroll = () => {
				if (document.documentElement.scrollTop > 600) {
					goToTop.style.zIndex = '4';
				} else {
					goToTop.style.zIndex = '-99';
				}
			};


			function goToTopMove() {
				let scrollH = document.documentElement.scrollHeight;
				document.documentElement.scrollTop -= scrollH / 10;
				if (document.documentElement.scrollTop == 0) {
					clearInterval(goToTopItv);
				}
			}

			const goToTopOnClick = () => {goToTopItv = setInterval(goToTopMove, 20)};

			goToTop.addEventListener('click', goToTopOnClick);
		</script>
	</img>

	<!-- 脚注 -->
	<script src="https://domeii.ml/javascript/standard_footer.js?ver=1.0"></script>

</body>
</html>
