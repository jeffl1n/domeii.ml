<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-width=1.0, maximum=1.0, user-scalable=0">
    <meta name="keywords" content="ideas, share, blog, code, music, jquery">
    <link rel="stylesheet" href="index.css?ver=1.0">
    <link rel="shortcut icon" type="image/x-icon" id="icon">
	<title>jQuery学习笔记（一） - domeii</title>
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
		<img src="https://domeii.ml/images/jquery-logo-blue.png" id="cover" class="picture">
		<p id="title">jQuery学习笔记（一）</p><hr>
		<div id="infoWrap">
			<img src="https://domeii.ml/images/portrait_lw.png" class="portrait">
			<p class="editDate">2020/1/11</p>
		</div><br>
		<h2>什么是jQuery？</h2>
		<p>jQuery是一个JavaScript的库。它能够让HTML元素的操控、事件操控以及动画更加简单。</p>
		<p>在JavaScript中，要实现更换元素的内部HTML，你需要做的是：</p>
		<p class="code">var start = document.getElementById('start');<br>start.innerHTML = 'Go';</p>
		<p>而用jQuery，你只需要：</p>
		<p class="code">$('#start').html('Go');</p>
		<h2>开始使用jQuery</h2>
		<h3>将jQuery添加到文件中</h3>
		<p>在script标签的src中写入：https://code.jquery.com/jquery-3.4.1.js</p>
		<h3>在你写代码之前</h3>
		<p>记得将jQuery代码包围在下面的代码之中</p>
		<p class="code">$(function(){<br>&emsp;//在这里写代码 <br>});</p>
		<h2>元素的选择</h2>
		<p>查看以下表格</p>
		<table class="tbType1">
			<thead>
				<tr>
					<th>格式</th>
					<th>例子</th>
					<th>例子的解释</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>*</td>
					<td>$('*')</td>
					<td>选择全部的元素</td>
				</tr>
				<tr>
					<td>#id</td>
					<td>$('#div')</td>
					<td>id为div的元素</td>
				</tr>
				<tr>
					<td>.class</td>
					<td>$('.div')</td>
					<td>class为div的元素</td>
				</tr>
				<tr>
					<td>元素标签名</td>
					<td>$('p')</td>
					<td>全部的p元素</td>
				</tr>
				<tr>
					<td>a, b, c</td>
					<td>$('h1, h2, h3')</td>
					<td>全部的h1、h2和h3</td>
				</tr>
				<tr>
					<td>:first</td>
					<td>$('h1:first')</td>
					<td>第一个h1</td>
				</tr>
				<tr>
					<td>:last</td>
					<td>$('h1:last')</td>
					<td>最后一个h1</td>
				</tr>
				<tr>
					<td>:first-child</td>
					<td>$('div:first-child')</td>
					<td>所有的是其父元素的第一个子元素的div元素</td>
				</tr>
				<tr>
					<td>:last-child</td>
					<td colspan="2">同上</td>
				</tr>
				<tr>
					<td>:nth-child(n)</td>
					<td>$('div:nth-child(2)')</td>
					<td>所有的是其父元素的第二个子元素的div元素</td>
				</tr>
				<tr>
					<td>父元素 > 子元素</td>
					<td>$('div > p')</td>
					<td>所有的是div元素的直接子元素的p元素</td>
				</tr>
				<tr>
					<td>父元素 下属元素</td>
					<td>$('div p')</td>
					<td>所有的为div元素所包含的p元素</td>
				</tr>
				<tr>
					<td>:eq(index)</td>
					<td>$('ul li:eq(2)')</td>
					<td>ul元素下的第三个li元素</td>
				</tr>
				<tr>
					<td>:contains('text')</td>
					<td>$('div:contains("haha")')</td>
					<td>所有包含“haha”文本的div元素</td>
				</tr>
				<tr>
					<td>[attribute]</td>
					<td>$('[src]')</td>
					<td>所有的有src作为attribute的元素</td>
				</tr>
				<tr>
					<td>:input</td>
					<td>$(':input')</td>
					<td>所有的input元素</td>
				</tr>
				<tr>
					<td>:text</td>
					<td>$(':text')</td>
					<td>所有的type为text的input元素</td>
				</tr>
			</tbody>
		</table>

		<!-- 测试翻页 -->
		<!--
		<div id="pageDirWrap">
			<div class="button" id="prevPage">上一页</div>
			<div class="button" id="nextPage">下一页</div>
			<div class="button" id="noPages">免翻页浏览</div>
		</div>
		<script>
			var currentPage = 1;
			var totalPages = 2;
			var prevPage = document.getElementById('prevPage');
			var nextPage = document.getElementById('nextPage');
			var noPages = document.getElementById('noPages');
			var main = document.getElementById('main');
			var pageDirWrap = document.getElementById('pageDirWrap');

			function turnPage(page) {
				main.innerHTML = `<script src="js/${page}.js"><\/script>`;
			}

			const prevPageOnClick = () => {turnPage(--currentPage)};
			const nextPageOnClick = () => {turnPage(++currentPage)};
			const noPagesOnClick = () => {turnPage(0)};

			prevPage.addEventListener('click', prevPageOnClick);
			nextPage.addEventListener('click', nextPageOnClick);
			noPages.addEventListener('click', noPagesOnClick);

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

</body>
</html>
