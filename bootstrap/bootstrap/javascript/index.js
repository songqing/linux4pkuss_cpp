$(function() {

	//初始化最新文章列表板块
	var article = $("#newArticle");
	$
			.post(
					'/controller/article/articleHandler.php?type=newArticle',
					{},
					function(articles, statu) {
						var articles = eval('(' + articles + ')');
						article.children().remove();
						if (articles == null) {
							$(
									"<p>暂时无数据</p>")
									.appendTo(article);

						} else {

							for (var i = 0; i < articles.length; i++) {
								$(
										"<p><a href='/controller/article/articleHandler.php?type=query&num="+articles[i].num+"'>"+articles[i].title+"</a></p>")
										.appendTo(article);
							}
						}
					}

			);
	
	//初始化最新资源列表板块
	var resource=$("#newResource");
	$
	.post(
			'/controller/article/articleHandler.php?type=newArticle',
			{},
			function(articles, statu) {
				var articles = eval('(' + articles + ')');
				resource.children().remove();
				if (articles == null) {
					$(
							"<p>暂时无数据</p>")
							.appendTo(resource);

				} else {

					for (var i = 0; i < articles.length; i++) {
						$(
								"<p><a href='/controller/article/articleHandler.php?type=query&num="+articles[i].num+"'>"+articles[i].title+"</a></p>")
								.appendTo(resource);
					}
				}
			}

	);
	//初始化课程通知板块
	var course=$("#newCourse");
	$
	.post(
			'/controller/article/articleHandler.php?type=newArticle',
			{},
			function(articles, statu) {
				var articles = eval('(' + articles + ')');
				course.children().remove();
				if (articles == null) {
					$(
							"<p>暂时无数据</p>")
							.appendTo(course);

				} else {

					for (var i = 0; i < articles.length; i++) {
						$(
								"<p><a href='/controller/article/articleHandler.php?type=query&num="+articles[i].num+"'>"+articles[i].title+"</a></p>")
								.appendTo(course);
					}
				}
			}

	);
	//初始化热门下载板块
	var downLoad=$("#newDown");
	$
	.post(
			'/controller/article/articleHandler.php?type=newArticle',
			{},
			function(articles, statu) {
				var articles = eval('(' + articles + ')');
				downLoad.children().remove();
				if (articles == null) {
					$(
							"<p>暂时无数据</p>")
							.appendTo(downLoad);

				} else {

					for (var i = 0; i < articles.length; i++) {
						$(
								"<p><a href='/controller/article/articleHandler.php?type=query&num="+articles[i].num+"'>"+articles[i].title+"</a></p>")
								.appendTo(downLoad);
					}
				}
			}

	);
	//初始化友情链接板块
	var link=$("#newLink");
	$
	.post(
			'/controller/article/articleHandler.php?type=newArticle',
			{},
			function(articles, statu) {
				var articles = eval('(' + articles + ')');
				link.children().remove();
				if (articles == null) {
					$(
							"<p>暂时无数据</p>")
							.appendTo(link);

				} else {

					for (var i = 0; i < articles.length; i++) {
						$(
								"<p><a href='/controller/article/articleHandler.php?type=query&num="+articles[i].num+"'>"+articles[i].title+"</a></p>")
								.appendTo(link);
					}
				}
			}

	);
});