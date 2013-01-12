<html>

	<head>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<title>CS50 Manual</title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
		<!--<link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />-->
		<link href="css/custom.css" rel="stylesheet" type="text/css" />
		<link href="css/nav.css" rel="stylesheet" type="text/css" />
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/custom.js"></script>
	</head>
	
	<body>
		<div id="scroll-to-top" title="Scroll to top"></div>
		
		<div id="wrap" class="container">
			<div class="header centered-text">
				CS50 Manual
			</div>
			<hr>
			<div class="nav">
				<ul class="breadcrumb section offshadow">
				  <li><a href="#">Home</a> <span class="divider">&rarr;</span></li>
				  <li><a href="#">Programming constructs</a> <span class="divider">&rarr;</span></li>
				  <li><a href="#">Loops</a> <span class="divider">&rarr;</span></li>
				  <li class="active">While-loops</li>
				</ul>
			</div>
			
			<div class="section rounded offshadow">
				<div class="section-edit"><a href="#">Edit</a></div>
				<div class="row">
					<div class="span12">
						<div class="padded-sides">
							<h1 id="tips-and-tricks">Explanation</h1>
						</div>
					</div>
					<div class="row">
						<div class="span8">
							<div class="padded-sides"><div class="padded-sides">
								<h2>Slides (<span id="curr-slide"></span> / <span id="total-slides"></span>)</h2>
								<div class="slides shadow">
									<div id="nav-left" class="slide-nav animated">‹</div>
									<div id="nav-right" class="slide-nav animated">›</div>
									<div id="1" class="slide" style="display: block;">
										<section>
											<p>A while loop looks like this:</p>
											<code>while (<i>some condition</i>) { ... }</code>
										</section>
									</div>
									<div id="2" class="slide">
										<section>
											<p>David Malan is awesome!</p>
											<img src="img/malan.jpg" />
										</section>
									</div>
									<div id="3" class="slide">
										<section>
											<p>So are Rob and Tommy!</p>
											<img src="img/rob_and_tommy.jpg" width="315" height="209" />
										</section>
									</div>
									<div id="4" class="slide">
										<section>
											<p>So is Alex!</p>
											<img src="img/alex.jpg" width="134" height="180" />
										</section>
									</div>
								</div>
							</div></div>
						</div>
						<div class="span4">
							<h2>Tips & Tricks</h2>
							<ul class="square">
								<li>A common bug is to add a semicolon after the loop's declaration; this may cause you to wonder why the code in your loop doesn't seem to be executing, or only seems to execute once.  The reason, of course, is that the loop is working, but it's performing a no-op (empty statement) each time through the loop, assuming that the semi-colon is the statement you want to perform on each iteration!</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<div class="section rounded offshadow">
				<div class="section-edit"><a href="#">Edit</a></div>
				<div class="row">
					<div class="span12">
						<div class="padded-sides padded-bottom">
							<h1 id="practice-problems">Practice Problems</h1>
							<div class="accordion" id="practice-problems-accordion">
								<div class="accordion-group">
									<div class="accordion-heading">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#practice-problems-accordion" href="#problem1">
											Problem #1
										</a>
									</div>
									<div id="problem1" class="accordion-body collapse">
										<div class="accordion-inner">
											<p>Explain how the following code, with its rarely-seen "loop until" operator (<code>--></code>), works:</p>
											<code>
												while(x --> 0) { printf("x is %d\n", x); }
											</code>
										</div>
									</div>
								</div>
								<div class="accordion-group">
									<div class="accordion-heading">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#practice-problems-accordion" href="#problem2">
											Problem #2
										</a>
									</div>
									<div id="problem2" class="accordion-body collapse">
										<div class="accordion-inner">
											<p>Given the following, complete the while loop that will continue to read bytes from the file until the end of the file has been reached:</p>
											<code>
												FILE* file = fopen("file.txt", "r");<br>
												FILE* copy = fopen("copy.txt", "w");<br>
												char buffer[] = new char[512];<br><br>
												
												while(<i><b>&mdash; your code here &mdash;</b></i>)<br>
												{<br>
													fread(buffer, 512, 1, file);<br>
													fwrite(buffer, 512, 1, copy);<br>
												}<br>
											</code>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="section rounded offshadow">
				<div class="section-edit"><a href="#">Edit</a></div>
				<div class="row">
					<div class="span12">
						<div class="padded-sides">
							<h1 id="comments">Discussion</h1>
						</div>
					</div>
					<div class="row">
						<div class="span6">
							<div class="padded-sides padded-bottom"><div class="padded-sides">
								<h2>Comments</h2>
								<div class="comment">
									<h3>Alex wrote...</h3>
									Wow the CS50 manual is so pretty, whoever designed this must be some kind of god
								</div>
								<div class="comment">
									<h3>Jason wrote...</h3>
									Yeah Alex is basically the coolest person of all time.
								</div>
								<div class="comment">
									<h3>djm wrote...</h3>
									Agreed.
								</div>
								<div class="comment new-comment-add">
									<h3>Add a new comment:</h3>
									<textarea id="new-comment" class="span4" placeholder="Your thoughts here!"></textarea>
									<br>
									<a class="btn btn-inverse">Submit</a>
								</div>
							</div></div>
						</div>
						<div class="span6">
							<div class="padded-sides padded-bottom"><div class="padded-sides">
								<h2>Related posts from CS50 Discuss</h2>
								<div class="discuss-post offshadow">
									<strong>Alex: </strong>
									Wow the CS50 manual is so pretty, whoever designed this must be some kind of god
								</div>
								<div class="discuss-post offshadow">
									<strong>Jason: </strong>
									Yeah Alex is basically the coolest person of all time.
								</div>
								<div class="discuss-post offshadow">
									<strong>djm: </strong>
									Agreed.
								</div>
							</div></div>
						</div>
					</div>
				</div>
			</div>
			
			<footer>
				<div class="left"><a href="#">CS50</a> &middot; <a href="#">Manual Home</a> &middot; <a href="#">CS50x</a></div>
				<div class="right">Site by CS50. Design by <a href="http://www.alexhugon.me">Alex Hugon</a>.</div>
			</footer>
		</div>		
	</body>
</html>
