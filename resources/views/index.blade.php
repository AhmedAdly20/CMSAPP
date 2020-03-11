<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>{{ $blog->blog_name }}</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	@include('include.header')

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div id="hot-post" class="row hot-post">
				<div class="col-md-8 hot-post-left">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="{{ route('singlePost',['id'=>$first_post->id]) }}"><img src="{{ $first_post->featured }}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{ $first_post->category->name }}</a>
							</div>
							<h3 class="post-title title-lg"><a href="{{ route('singlePost',['id'=>$first_post->id]) }}">{{ $first_post->title }}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
								<li>{{ $first_post->created_at->diffForHumans() }}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="{{ route('singlePost',['id'=>$second_post->id]) }}"><img src="{{ $second_post->featured }}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{ $second_post->category->name }}</a>
							</div>
							<h3 class="post-title"><a href="{{ route('singlePost',['id'=>$second_post->id]) }}">{{ $second_post->title }}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
								<li>{{ $second_post->created_at->diffForHumans() }}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="{{ route('singlePost',['id'=>$third_post->id]) }}"><img src="{{ $third_post->featured }}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{  $third_post->category->name }}</a>
							</div>
							<h3 class="post-title"><a href="{{ route('singlePost',['id'=>$third_post->id]) }}">{{ $third_post->title }}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
								<li>{{ $third_post->created_at->diffForHumans() }}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Recent posts</h2>
							</div>
						</div>
						<!-- post -->
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{ route('singlePost',['id'=>$first_post->id]) }}"><img src="{{ $first_post->featured }}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">{{ $first_post->category->name }}</a>
									</div>
									<h3 class="post-title"><a href="{{ route('singlePost',['id'=>$first_post->id]) }}">{{ $first_post->title }}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">John Doe</a></li>
										<li>{{ $first_post->created_at->diffForHumans() }}</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{ route('singlePost',['id'=>$second_post->id]) }}"><img src="{{ $second_post->featured }}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">{{ $second_post->category->name }}</a>
									</div>
									<h3 class="post-title"><a href="{{ route('singlePost',['id'=>$second_post->id]) }}">{{ $second_post->title }}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">John Doe</a></li>
										<li> {{ $second_post->created_at->diffForHumans() }} </li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->

						<div class="clearfix visible-md visible-lg"></div>

						<!-- post -->
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{ route('singlePost',['id'=>$third_post->id]) }}"><img src="{{ $third_post->featured }}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">{{ $third_post->category->name }}</a>
									</div>
									<h3 class="post-title"><a href="{{ route('singlePost',['id'=>$third_post->id]) }}">{{ $third_post->title }}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">John Doe</a></li>
										<li>{{ $third_post->created_at->diffForHumans() }}</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{ route('singlePost',['id'=>$fourth_post->id]) }}"><img src="{{ $fourth_post->featured }}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">{{ $fourth_post->category->name }}</a>
									</div>
									<h3 class="post-title"><a href="{{ route('singlePost',['id'=>$fourth_post->id]) }}">{{ $fourth_post->title }}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">John Doe</a></li>
										<li>{{ $fourth_post->created_at->diffForHumans() }}</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->
					</div>
					<!-- /row -->

                    <!-- row -->
        @foreach ($categories as $category)
            @if ($category->posts->count()>0)
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="title">{{  $category->name  }}</h2>
                        </div>
                    </div>
                @foreach ($category->posts()->orderBy('created_at','desc')->take(3)->get() as $catPost)
						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="{{ route('singlePost',['id'=>$catPost->id]) }}"><img src="{{ $catPost->featured }}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">{{ $catPost->category->name }}</a>
									</div>
									<h3 class="post-title title-sm"><a href="{{ route('singlePost',['id'=>$catPost->id]) }}">{{ $catPost->title }}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">John Doe</a></li>
										<li>{{ $catPost->created_at->diffForHumans() }}</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->
                @endforeach
                </div>
            @endif
        @endforeach
				</div>
				<div class="col-md-4">
					<!-- ad widget-->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="https://d.top4top.io/p_1477lnw4g2.jpg" alt="">
						</a>
					</div>
					<!-- /ad widget -->

					<!-- social widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Social Media</h2>
						</div>
						<div class="social-widget">
							<ul>
								<li>
									<a href="#" class="social-facebook">
										<i class="fa fa-facebook"></i>
										<span>21.2K<br>Followers</span>
									</a>
								</li>
								<li>
									<a href="#" class="social-twitter">
										<i class="fa fa-twitter"></i>
										<span>10.2K<br>Followers</span>
									</a>
								</li>
								<li>
									<a href="#" class="social-google-plus">
										<i class="fa fa-google-plus"></i>
										<span>5K<br>Followers</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /social widget -->

					<!-- category widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Categories</h2>
						</div>
						<div class="category-widget">
							<ul>
								@foreach ($categories as $category)
									<li><a href="#">{{ $category->name }} <span>{{ $category->posts->count() }}</span></a></li>
								@endforeach
							</ul>
						</div>
					</div>
					<!-- /category widget -->

					<!-- newsletter widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Newsletter</h2>
						</div>
						<div class="newsletter-widget">
							<form>
								<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
								<input class="input" name="newsletter" placeholder="Enter Your Email">
								<button class="primary-button">Subscribe</button>
							</form>
						</div>
					</div>
					<!-- /newsletter widget -->

					<!-- post widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Popular Posts</h2>
						</div>
						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="./img/widget-3.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="category.html">Lifestyle</a>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="./img/widget-2.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="category.html">Technology</a>
									<a href="category.html">Lifestyle</a>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="./img/widget-4.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="category.html">Health</a>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="./img/widget-5.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="category.html">Health</a>
									<a href="category.html">Lifestyle</a>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
							</div>
						</div>
						<!-- /post -->
					</div>
					<!-- /post widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- ad -->
				<div class="col-md-12 section-row text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="https://j.top4top.io/p_14773pyw31.jpg" alt="">
					</a>
				</div>
				<!-- /ad -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
            <!-- row -->
            <div class="row">
                @foreach ($categories as $category)
                    @if ($category->posts->count()>0)
                        @foreach ($category->posts()->orderBy('created_at','desc')->take(1)->get() as $catPost)
                            <div class="col-md-4">
                                <div class="section-title">
                                    <h2 class="title">{{ $catPost->category->name }}</h2>
                                </div>
                                <!-- post -->
                                <div class="post">
                                    <a class="post-img" href="{{ route('singlePost',['id'=>$catPost->id]) }}"><img src=" {{ $catPost->featured }} " alt=""></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="category.html">{{ $catPost->category->name }}</a>
                                        </div>
                                        <h3 class="post-title"><a href="{{ route('singlePost',['id'=>$catPost->id]) }}">{{ $catPost->title }}</a></h3>
                                        <ul class="post-meta">
                                            <li><a href="author.html">John Doe</a></li>
                                            <li>{{ $catPost->created_at->diffForHumans() }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /post -->
                            </div>
                        @endforeach
                    @endif
                @endforeach
            </div>
			<!-- /row -->

			<!-- row -->
			<div class="row">
                <div class="col-md-4">
                    @foreach ($firstthreePosts as $post)
                            <!-- post -->
                            <div class="post post-widget">
                                <a class="post-img" href="{{ route('singlePost',['id'=>$post->id]) }}"><img src="{{ $post->featured }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="category.html">{{ $post->category->name }}</a>
                                    </div>
                                    <h3 class="post-title"><a href="{{ route('singlePost',['id'=>$post->id]) }}">{{ $post->title }}</a></h3>
                                </div>
                            </div>
                            <!-- /post -->
                    @endforeach
                </div>
                <div class="col-md-4">
                    @foreach ($secondthreePosts as $post)
                            <!-- post -->
                            <div class="post post-widget">
                                <a class="post-img" href="{{ route('singlePost',['id'=>$post->id]) }}"><img src="{{ $post->featured }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="category.html">{{ $post->category->name }}</a>
                                    </div>
                                    <h3 class="post-title"><a href="{{ route('singlePost',['id'=>$post->id]) }}">{{ $post->title }}</a></h3>
                                </div>
                            </div>
                            <!-- /post -->
                    @endforeach
                </div>
                <div class="col-md-4">
                    @foreach ($thirdthreePosts as $post)
                            <!-- post -->
                            <div class="post post-widget">
                                <a class="post-img" href="{{ route('singlePost',['id'=>$post->id]) }}"><img src="{{ $post->featured }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="category.html">{{ $post->category->name }}</a>
                                    </div>
                                    <h3 class="post-title"><a href="{{ route('singlePost',['id'=>$post->id]) }}">{{ $post->title }}</a></h3>
                                </div>
                            </div>
                            <!-- /post -->
                    @endforeach
                </div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
                    <!-- post -->
                    @foreach ($lastfivePosts as $post)
                        <div class="post post-row">
                            <a class="post-img" href="{{ route('singlePost',['id'=>$post->id]) }}"><img src="{{ $post->featured }}" alt=""></a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="category.html">{{ $post->category->name }}</a>
                                </div>
                                <h3 class="post-title"><a href="{{ route('singlePost',['id'=>$post->id]) }}"> {{ $post->title }} </a></h3>
                                <ul class="post-meta">
                                    <li><a href="author.html">John Doe</a></li>
                                    <li>{{ $post->created_at->diffForHumans() }}</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                            </div>
                        </div>
                    @endforeach
					<!-- /post -->

					<div class="section-row loadmore text-center">
						<a href="#" class="primary-button">Load More</a>
					</div>
				</div>
				<div class="col-md-4">
					<!-- galery widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Instagram</h2>
						</div>
						<div class="galery-widget">
							<ul>
								<li><a href="#"><img src="./img/galery-1.jpg" alt=""></a></li>
								<li><a href="#"><img src="./img/galery-2.jpg" alt=""></a></li>
								<li><a href="#"><img src="./img/galery-3.jpg" alt=""></a></li>
								<li><a href="#"><img src="./img/galery-4.jpg" alt=""></a></li>
								<li><a href="#"><img src="./img/galery-5.jpg" alt=""></a></li>
								<li><a href="#"><img src="./img/galery-6.jpg" alt=""></a></li>
							</ul>
						</div>
					</div>
					<!-- /galery widget -->

					<!-- Ad widget -->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="https://c.top4top.io/p_1477u3o0y1.jpg" alt="">
						</a>
					</div>
					<!-- /Ad widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	@include('include.footer')

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
