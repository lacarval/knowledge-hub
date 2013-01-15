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

				Knowledge Hub

			</div>

			<hr>

			<div class="nav">

				<ul class="breadcrumb section offshadow">

				  <li><a href="index.php">Home</a> <span class="divider">&rarr;</span></li>

				  <li><a href="#">Loops</a> <span class="divider">&rarr;</span></li>

				  <li class="active">For</li>

				</ul>

			</div>

			

			<div class="section rounded offshadow">

				<div class="section-edit"><a href="#">Edit</a></div>

				<div class="row">

					<div class="span12">

						<div class="padded-sides">

							<h1 id="tips-and-tricks">For Loops</h1>

						</div>

					</div>

					<div class="row">

						<div class="span8">

							<div class="padded-sides"><div class="padded-sides">

								<h2>Slides (<span id="curr-slide"></span> / <span id="total-slides"></span>)</h2>

								<div class="slides shadow">

									<div id="nav-left" class="slide-nav animated">&lsaquo;</div>

									<div id="nav-right" class="slide-nav animated">&rsaquo;</div>

									<div id="1" class="slide" style="display: block;">

										<section>

											<p><b>For loops look like this:</b></p>
											</br></br></br>
											<p style = "font-family: Courier; padding-left: 50px; text-align: left; font-size: 20px">
											<span style = "color: 4876FF"> for </span> (<i>initialize</i>; <i>condition</i>; <i>update</i>)</br>
											{ </br>
											&nbsp;&nbsp;&nbsp;&nbsp;<i>execute this code </i></br>
											} </br>
											</p>


										</section>

									</div>

									<div id="2" class="slide">

										<section>

											<p><b>Here's how they work:</b></p></br>

											<img src="img/for.jpg" width="450px" height="300px"/>

										</section>

									</div>

									<div id="3" class="slide">

										<section>
											
											<p><b>Example #1</b></p>
											<p><b>Prints "This is CS50!" ten times</b></p>
											</br></br></br>
											<p style = "font-family: Courier; padding-left: 50px; text-align: left; font-size: 20px">
											<span style = "color: 4876FF">for</span> (<span style = "color: 4876FF">int</span> i = <span style = "color: 7AC5CD">0</span>; i < <span style = "color: 7AC5CD">10</span>; i++)</br>
											{ </br>
											&nbsp;&nbsp;&nbsp;&nbsp;printf(<span style = "color: EEA2AD">"This is CS50!"</span>);</br>
											} </br>
											</p>

										</section>

									</div>

									<div id="4" class="slide">

										<section>

											<p><b>Example #2</b></p>
											<p><b>Converts a lowercase string to uppercase</b></p>
											</br></br>
											<p style = "font-family: Courier; padding-left: 30px; text-align: left; font-size: 20px">
											<span style = "color: 4876FF">char</span> name[] = <span style = "color: EEA2AD">"milo"</span>; </br>
											<span style = "color: 4876FF">for</span> (<span style = "color: 4876FF">int</span> i = <span style = "color: 7AC5CD">0</span>, j = strlen(name); i < j; i++)</br>
											{ </br>
											&nbsp;&nbsp;&nbsp;&nbsp;name[i] = toupper(name[i]); </br>
											} 
											</p>

										</section>

									</div>

								</div>

							</div></div>

						</div>

						<div class="span4">

							<h2>Tips & Tricks</h2>

							<ul class="square">

								<li>Use a for loop when you know exactly how many times you want your code to repeat.</li>
								
								<li>Keep computationally-intensive processes like strlen in the for loop's initialization. That way, they are only executed once rather than at every iteration.</li></font>
								
								<li>Note that the for loop's initialization, condition, and update are separated by semicolons -- not commas!</li>
					
								<li>A common bug is to add a semicolon after for the loop's declaration; this may cause you to wonder why the code in your loop isn't executing or only executes once.  The reason is that the loop is working, but it's performing a no-op (empty statement) each time through the loop, assuming that the semi-colon is the statement you want to perform on each iteration.</li>

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

											<img src="img/for-problem1.jpg"/>

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

											<img src="img/for-problem2.jpg"/>

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

									<h3>MiloBanana wrote...</h3>

									Did you know that this creates an infinite loop? </br>
									
									<span style = "font-family: Courier; color: 4876FF">for </span>( ; ; )
									

								</div>

								<div class="comment">

									<h3>Kitties wrote...</h3>

									It's weird that you can leave out the initialization, condition, update, or all three... 
									
								</div>

								<div class="comment">

									<h3>Lauren wrote...</h3>

									Hey guys, nested for loops are really useful for iterating through a multidimensional array!

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

								<img src="img/for-discuss.jpg"/>

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

							<div class="accordion" id="references-accordion">

								<div class="accordion-group">

									<div class="accordion-heading">

										<a class="accordion-toggle" data-toggle="collapse" data-parent="#references-accordion" href="#lectures">

											Lectures

										</a>

									</div>

									<div id="lectures" class="accordion-body collapse">

										<div class="accordion-inner">

											<img src="img/for-lecture.jpg"/>

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

				<div class="left"><a href="https://www.cs50.net">CS50</a> &middot; <a href="https://www.edx.org/courses/HarvardX/CS50x/2012/about">CS50x</a>&middot; <a href="tf-manual.php">TF Manual</a></div>

				<div class="right">Site by CS50.</div>

			</footer>

		</div>		

	</body>

</html>