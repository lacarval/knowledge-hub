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

		<script src="js/while.js"></script>

	</head>

	

	<body>

		<div id="scroll-to-top" title="Scroll to top"></div>

		

		<div id="wrap" class="container">

			<div class="header centered-text">

				Knowledge Hub

			</div>

			<hr>

			<div class="nav">

				<ul class="breadcrumb section offshadow">

				  <li><a href="index.php">Home</a> <span class="divider">&rarr;</span></li>

				  <li><a href="#">Loops</a> <span class="divider">&rarr;</span></li>

				  <li class="active">While and Do While Loops</li>

				</ul>

			</div>

			

			<div class="section rounded offshadow">

				<div class="section-edit"><a href="#">Edit</a></div>

				<div class="row">

					<div class="span12">

						<div class="padded-sides">

							<h1 id="tips-and-tricks">While and Do While Loops</h1>

						</div>

					</div>

					<div class="row">

						<div class="span8">

							<div class="padded-sides"><div class="padded-sides">

								<h2>Slides (<span id="curr-slide"></span> / <span id="total-slides"></span>)</h2>

								<div class="slides shadow">

									<div id="nav-left" class="slide-nav animated">&lsaquo;</div>

									<div id="nav-right" class="slide-nav animated">&rsaquo;</div>

									<div id="1" class="slide" style="display: block">

										<section>

											<p><b>While loops look like this:</b></p>
											</br></br></br>
											<p style = "font-family: Courier; padding-left: 75px; text-align: left; font-size: 20px">
											<span style = "color: 4876FF"> while </span> (<i>condition</i>) </br>
											{ </br>
											&nbsp;&nbsp;&nbsp;&nbsp;<i>execute this code </i></br>
											} </br>
											</p>


										</section>

									</div>

									<div id="2" class="slide">

										<section>
										
											<p><b>Here's how they work:</b></p></br>
										
											<img src="img/while.jpg" width="375px" height="250px"/>
											

										</section>

									</div>

									<div id="3" class="slide">

										<section>
										
										<p><b>Example #1</b></p>
										<p><b>Calculates string length</b></p></br>	
										</br>
										<p style = "font-family: Courier; padding-left: 75px; text-align: left; font-size: 20px">
										<span style = "color: 4876FF">string</span> s = GetString(); </br>
										<span style = "color: 4876FF">int</span> n = <span style = "color: 7AC5CD">0</span>; </br>
										<span style = "color: 4876FF">while </span>(s[n] != <span style = "color: EEA2AD">'\0'</span>)</br>
										&nbsp;&nbsp;&nbsp;&nbsp;n++;</br>
										printf(<span style = "color: EEA2AD">"%d"</span>, n); </br>
									
										
										</p>

										</section>

									</div>

									<div id="4" class="slide">

										<section>

											<p><b>Do while loops look like this:</b></p>
											</br></br>
											<p style = "font-family: Courier; padding-left: 75px; text-align: left; font-size: 20px">
											<span style = "color: 4876FF"> do </span> </br>
											{ </br>
											&nbsp;&nbsp;&nbsp;&nbsp;<i>execute this code </i></br>
											} </br>
											<span style = "color: 4876FF"> while </span> (<i>some condition</i>);
											</p>
											

										</section>

									</div>
									
									<div id="5" class="slide">

										<section>

											<p><b>Here's how they work:</b></p></br></br></br></br>
											
											<img src="img/do-while.jpg" width="500px" height="200px"/>

										</section>

									</div>
									
									<div id="6" class="slide">

										<section>

											<p><b>Example #2</b></p>
											<p><b>Reprompts until user enters a positive number</b></p>
											</br></br>
											<p style = "font-family: Courier; padding-left: 60px; text-align: left; font-size: 20px">
											<span style = "color: 4876FF"> int</span> input; </br>
											<span style = "color: 4876FF"> do </span> </br>
											{ </br>
											&nbsp;&nbsp;&nbsp;&nbsp;printf(<span style = "color: EEA2AD">"Enter a positive number: "</span>);</br>
											&nbsp;&nbsp;&nbsp;&nbsp;input = GetInt(); </br>
											} </br>
											<span style = "color: 4876FF"> while </span> (input < <span style = "color: 7AC5CD">1</span>);
											</p>

										</section>

									</div>



								</div>

							</div></div>

						</div>

						<div class="span4">

							<h2>Tips & Tricks</h2>

							<ul class="square">

								<li>Use a do while loop for collecting user input and reprompting if the input doesn't adhere to certain criteria.</li>
								<li>A common bug is to add a semicolon after a while loop's declaration; this may cause you to wonder why the code in your loop isn't executing or only executes once.  The reason is that the loop is working, but it's performing a no-op (empty statement) each time through the loop, assuming that the semi-colon is the statement you want to perform on each iteration.</li>
								<li>Take advantage of jump statements like <span style = "font-family: Courier; color: 4876FF">break</span>, which breaks out of a loop, and <span style = "font-family: Courier; color: 4876FF">continue</span>, which skips to the next iteration of a loop.</li>
							
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

											<img src="img/while-problem1.jpg"/>

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

											<img src="img/while-problem2.jpg"/>

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

								<h2>User-Contributed Notes</h2>

								<div class="comment">

									<h3>Milo wrote...</h3>

									I just learned that I can call a function within a loop's condition! 
									 
								</div>

								<div class="comment">

									<h3>Kitties wrote...</h3>

									Yeah! In fact, you can really simplify things if you call fread in the condition of the while loop that cycles through 512 byte blocks in recover.c

								</div>

								<div class="comment">

									<h3>Lauren wrote...</h3>

									Hey guys, did you know that <span style = "font-family: Courier; color: 4876FF">while</span><span style = "font-family: Courier;">(1)</span> produces an infinite loop?

								</div>

								<div class="comment new-comment-add">

									<h3>Add a new note:</h3>

									<textarea id="new-comment" class="span4" placeholder="Your thoughts here!"></textarea>

									<br>

									<a class="btn btn-inverse">Submit</a>

								</div>

							</div></div>

						</div>

						<div class="span6">

							<div class="padded-sides padded-bottom"><div class="padded-sides">

								<h2>Discuss Stream</h2>

								<img src="img/while-discuss.jpg"/>
								
							</div></div>

						</div>

					</div>

				</div>

			</div>

			<div class="section rounded offshadow">

				<div class="section-edit"><a href="#">Edit</a></div>

				<div class="row">

					<div class="span12">

						<div class="padded-sides padded-bottom">

							<h1 id="practice-problems">Video References</h1>

							<div class="accordion" id="practice-problems-accordion">

								<div class="accordion-group">

									<div class="accordion-heading">

										<a class="accordion-toggle" data-toggle="collapse" data-parent="#references-accordion" href="#lectures">

											Lectures

										</a>

									</div>

									<div id="lectures" class="accordion-body collapse">

										<div class="accordion-inner">

											<img src="img/while-lecture.jpg"/>

										</div>

									</div>

								</div>

								<div class="accordion-group">

									<div class="accordion-heading">

										<a class="accordion-toggle" data-toggle="collapse" data-parent="#references-accordion" href="#shorts">

											Shorts

										</a>

									</div>

									<div id="shorts" class="accordion-body collapse">

										<div class="accordion-inner">

											<img src="img/loops-short.jpg"/>
											
										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

			<footer>

				<div class="left"><a href="#">CS50</a> &middot; <a href="#">CS50x</a> &middot; <a href="tf-manual.php">TF Manual</a></div>

				<div class="right">Site by CS50.</div>

			</footer>

		</div>		

	</body>

</html>