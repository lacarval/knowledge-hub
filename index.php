<html>

	<head>
	
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

		<title>Knowledge Hub</title>

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

			<div class="section rounded offshadow">

				<div class="section-edit"><a href="#">Edit</a></div>

				<div class="row">

					<div class="span12">

						<div class="padded-sides padded-bottom">

							<h1 id="contents">Contents</h1>

							<div class="accordion" id="contents-accordion">

								<div class="accordion-group">

									<div class="accordion-heading">

										<a class="accordion-toggle" data-toggle="collapse" data-parent="#contents-accordion" href="#basics">

											C Basics

										</a>

									</div>

									<div id="basics" class="accordion-body collapse">

										<div class="accordion-inner">

											<a href="constants.php">Constants</a></br>
											<a href="variables.php">Variables</a></br>
											<a href="arrays.php">Arrays</a></br>

										</div>

									</div>

								</div>
								<div class="accordion-group">

									<div class="accordion-heading">

										<a class="accordion-toggle" data-toggle="collapse" data-parent="#contents-accordion" href="#conditionals">

											Conditions and Boolean Expressions

										</a>

									</div>

									<div id="conditionals" class="accordion-body collapse">

										<div class="accordion-inner">

											<a href="if.php">If</a></br>
											<a href="ternary.php">Ternary</a></br>
											<a href="switch.php">Switch</a></br>

										</div>

									</div>

								</div>
								
								<div class="accordion-group">

									<div class="accordion-heading">

										<a class="accordion-toggle" data-toggle="collapse" data-parent="#contents-accordion" href="#loops">

											Loops

										</a>

									</div>

									<div id="loops" class="accordion-body collapse">

										<div class="accordion-inner">

											<a href="for.php">For Loops</a></br>
											<a href="while.php">While and Do While Loops</a></br>

										</div>

									</div>

								</div>
								
								<div class="accordion-group">

									<div class="accordion-heading">

										<a class="accordion-toggle" data-toggle="collapse" data-parent="#contents-accordion" href="#search-sort">

											Sorting and Searching

										</a>

									</div>

									<div id="search-sort" class="accordion-body collapse">

										<div class="accordion-inner">
											<a href="for.php">Bubble Sort</a></br>
											<a href="while.php">Merge Sort</a></br>
											<a href="while.php">Insertion Sort</a></br>
											<a href="while.php">Quick Sort</a></br>
											<a href="while.php">Binary Search</a></br>
										</div>

									</div>

								</div>
								
								<div class="accordion-group">

									<div class="accordion-heading">

										<a class="accordion-toggle" data-toggle="collapse" data-parent="#contents-accordion" href="#memory">

											Manipulating Memory

										</a>

									</div>

									<div id="memory" class="accordion-body collapse">

										<div class="accordion-inner">

											<a href="malloc.php">Memory Allocation</a></br>
											<a href="pointers.php">Pointers</a></br>
											<a href="switch.php">Switch</a></br>

										</div>

									</div>

								</div>
								
								

								<div class="accordion-group">

									<div class="accordion-heading">

										<a class="accordion-toggle" data-toggle="collapse" data-parent="#practice-problems-accordion" href="#debugging-tools">

											Debugging Tools

										</a>

									</div>

									<div id="debugging-tools" class="accordion-body collapse">

										<div class="accordion-inner">
										
											<li><a href="gdb.php">GDB</a></li>
											<li><a href="valgrind.php">Valgrind</a></li>
											
										</div>

									</div>

								</div>
							
							</div>

						</div>

					</div>

				</div>

			</div>

			<footer>

				<div class="left"><a href="#">CS50</a> &middot; <a href="#">CS50x</a>&middot; <a href="tf-manual.php">TF Manual</a></div>

				<div class="right">Site by CS50.</div>

			</footer>

		</div>		

	</body>

</html>