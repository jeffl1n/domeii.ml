<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-width=1.0, maximum=1.0, user-scalable=0">
    <meta name="keywords" content="ideas, share, blog, code, music">
    <link rel="stylesheet" href="index.css?ver=2.4">
    <link rel="shortcut icon" type="image/x-icon" id="icon">
	<title>domeii - 爱生活</title>
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
	<script src="https://domeii.ml/js/standard_header.js?ver=1.1"></script>

	<!-- 正文部分 -->
	<div id="main">

		<!-- 生成封面的测试 -->
		<script>
			function spawnArticle(type, coverPath, titleInput, portraitPath, dateInput, url) {
				let main = document.getElementById('main');

				var content = document.createElement('div');
				switch (type) {
					case 1:
						content.setAttribute('class', 'contentType1');
						break;
					case 2:
						content.setAttribute('class', 'contentType2');
						break;
					default:
						break;
				}
					var cover = document.createElement('img');
					switch (type) {
						case 1:
							cover.setAttribute('class', 'cover1');
							cover.setAttribute('src', _hostname + coverPath);
							break;
						case 2:
							cover.setAttribute('class', 'cover2');
							break;
						default:
							break;
					}
					content.appendChild(cover);

					var title = document.createElement('p');
					switch (type) {
						case 1:
							title.setAttribute('class', 'title1');
							break;
						case 2:
							title.setAttribute('class', 'title2');
							break;
						default:
							break;
					}
					title.innerHTML = titleInput;
					content.appendChild(title);

				var info = document.createElement('div');
				info.setAttribute('class', 'infoWrap');

					var portrait = document.createElement('img');
					portrait.setAttribute('class', 'portrait');
					portrait.setAttribute('src', _hostname + portraitPath);
					info.appendChild(portrait);

					var dt = document.createElement('p');
					dt.setAttribute('class', 'date');
					dt.innerHTML = dateInput;
					info.appendChild(dt);

				main.prepend(info);
				main.prepend(content);

				const contentOnClick = () => {window.open(url, '_self')};
				content.addEventListener('click', contentOnClick);
			}
			spawnArticle(1, 'images/black-action-camera-690806.jpg', '我的2019', 'images/portrait_txm.png', '2020/1/1', 'https://domeii.ml/archives/1');
			spawnArticle(1, 'images/business-computer-connection-contemporary-270640.jpg', '平面设计工具网站收藏', 'images/portrait_lw.png', '2020/1/4', 'https://domeii.ml/archives/4');
			spawnArticle(2, '', 'JavaScript如何实现动态加载页面内容', 'images/portrait_lw.png', '2020/1/10', 'https://domeii.ml/archives/3');
			spawnArticle(1, 'images/jquery-logo-blue.png', 'jQuery学习笔记（一）', 'images/portrait_lw.png', '2020/1/11', 'https://domeii.ml/archives/5')

		</script>

		<!-- 封面动画 -->
		<script>
			function getAbsTop(e) {
				var offset = e.offsetTop;
				if (e.offsetParent != null) {
					offset += getAbsTop(e.offsetParent);
				}
				return offset;
			}
		</script>
		<!--
		<script>
			function getAbsTop(e) {
				var offset = e.offsetTop;
				if (e.offsetParent != null) {
					offset += getAbsTop(e.offsetParent);
				}
				return offset;
			}


			var contentMoveRate = 150;
			var contentMoove;

			function contentMove() {
				if (contentMoveRate >= 0) {
					contentMoveRate -= 5;
					document.getElementsByClassName('contentType1')[0].style.transform = `translate(${contentMoveRate}%, 0)`;
				} else {
					clearInterval(contentMoove);
				}
			}

			window.onscroll = function() {
				var top = document.documentElement.scrollTop;

				if (top + window.screen.height >= getAbsTop(document.getElementsByClassName('contentType1')[0])) {
					contentMoove =  setInterval(contentMove, 50);
				}
			}

		</script>
		-->
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

	<!-- 点击菜单出现菜单 -->

</body>
</html>
