<h2> 这是一个有益于学生的一个开放平台  </h2>

	<div style='text-align:right;width:40%'>
		<{if  $isLogin}>

			<{***  如果isLogin为ture时，进入logout ***}>
			<a href='/login.php?logout=4'>logout</a>
		<{else}>
			<a href='/login.php'>login</a>
		<{/if}>
	</div>

	<ul>
	<li><a href='/index.php'>首页</a></li>
	<li><a href='/idear.php'>展示idear</a></li>
	<li><a href='/blog.php'>学生博客（简历）职位推荐</a></li>
	<li><a href='/realize.php'>帮助学生实现</a></li>
	<li><a href='/recruit.php'>学校招聘</a></li>
	</ul>
