<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Bootstrap, from Twitter</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<!-- Le styles -->
		<link href="http://bootstrap.axxim.net/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
			h1 {
				border-bottom: 1px solid #ededed;
				margin-bottom: 20px;
			}
			.sidebar-nav {
				padding: 9px 0;
			}
			#mode {
				position: absolute;
			}
			#mode .btn {
				padding-left: 15px;
				padding-right: 15px;
			}
			#mode .btn:last-child {
				padding-right: 14px;
			}
		</style>
		<link href="http://bootstrap.axxim.net/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="../assets/ico/favicon.ico" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png" />
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</a>
					<a class="brand" href="#">Learn.</a>
					<div class="nav-collapse">
						<ul class="nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div>
					<!--/.nav-collapse -->
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="span2">
					<div id="mode" class="btn-group" data-toggle="buttons-radio">
						<button type="button" class="btn btn-primary">Simple</button>
						<button type="button" class="btn btn-primary">Advanced</button>
					</div>
					<br>
					<div class="well sidebar-nav">
						<ul class="nav nav-list">
							<li class="nav-header">HTML</li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li class="nav-header">CSS</li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li class="nav-header">PHP</li>
							<li><a href="#">Functions</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li class="nav-header">MongoDB</li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
						</ul>
					</div><!--/.well -->
				</div>
				<div class="well span9">
					<h1><a href="/php">PHP</a>: Functions</h1>
	       
					<p>A function is a stored piece of code that can be executed at will. Functions are the single most important 
						thing you will learn and you'll love how much time they will save you. Here's a basic function: </p>

					<pre><code>&lt;?php
function basicFunction() {

}</code></pre>
					<p>Cool, right? Well, maybe not, but let's say you need to print what YouTube video you're currently watching 
						on different pages of your website? Check this out: </p>

					<pre><code>&lt;?php
function currentlyWatching() {
    echo &quot;http://www.youtube.com/watch?v=ry2DwzG4zfs&quot;;
}</code></pre>
					<p>That sure does look cooler, but it doesn't print anything even though you have an echo tag. That's where 
						the power of functions come in. Now that you've defined a function called <code>currentlyWatching</code>, 
						you can have it execute the code inside it from anywhere on the page! Let's try it.</p>

					<pre><code>&lt;?php
function currentlyWatching() {
    echo &quot;http://www.youtube.com/watch?v=ry2DwzG4zfs&quot;;
}
?&gt;
&lt;!DOCTYPE HTML&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=UTF-8&quot; /&gt;
		&lt;title&gt;Your Website&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;p&gt;Welcome to my website, I'm currently watching &lt;?php currentlyWatching(); ?&gt;.&lt;/p&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

					<h2>Their True Power</h2>
					<p>-- Functions can take args and you can define your own --</p>

					<h3>Important Tips!</h3>
					<ul>
						<li>Function names must start with either a letter or an underscore.</li>
						<li>Aliquam tincidunt mauris eu risus.</li>
					</ul>

					<h1>More Help</h1>
					<p>-- Link to other reputable sites like ircmaxell --</p>

					<h1>Questions? Comments?</h1>
					<p>If you have a question or a comment, don't worry, we're here to help.</p>
				</div>
			</div>
			<hr />
			<footer>
				<p>&copy; Company 2012</p>
			</footer>
		</div>
		<!-- /container -->
		<!-- Le javascript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		<script src="http://bootstrap.axxim.net/bootstrap/js/bootstrap.min.js"></script>
		<script>
		/* Autogenerate from database */
		var simple = {
			'HTML': {
				'/html/': 'The Basics', // What is HTML, history behind it, etc
				'/html/good-vs-bad': 'Good Vs. Bad' // Learn good vs bad HTML
			},
			'CSS': {
				
			}
		};
		</script>
	</body>
</html>
