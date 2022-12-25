<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Inbox :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">

	<?phP
	include './theme/sidebar.php';
	?>


	</div>
		<!--left-fixed -navigation-->
		
	<?php
	include './theme/header.php';
	?>


		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<h2 class="title1">Mail Page</h2>
				<div class="col-md-4 compose-left">
					<div class="folder widget-shadow">
						<ul>
							<li class="head"><i class="fa fa-folder" aria-hidden="true"></i>Folders</li>
							<li><a href="inbox.html"><i class="fa fa-inbox"></i>Inbox <span>52</span></a></li>
							<li><a href="#"><i class="fa fa fa-envelope-o"></i>Sent </a></li>
							<li><a href="#"><i class="fa fa-file-text-o"></i>Drafts <span>03</span></a> </li>
							<li><a href="#"><i class="fa fa-flag-o"></i>Spam </a></li>
							<li><a href="#"><i class="fa fa-trash-o"></i>Trash</a></li>
						</ul>
					</div>
					<div class="chat-grid widget-shadow">
						<ul>
							<li class="head"><i class="fa fa-user" aria-hidden="true"></i>Friends (Online) </li>
							<li><a href="#">
									<div class="chat-left">
										<img class="img-circle" src="images/i1.png" alt="">
										<label class="small-badge"></label>
									</div>
									<div class="chat-right">
										<p>Alexander</p>
										<h6>Nullam quis risus eget </h6>
									</div>
									<div class="clearfix"> </div>	
								</a>
							</li>
							<li><a href="#">
									<div class="chat-left">
										<img class="img-circle" src="images/i2.png" alt="">
										<label class="small-badge bg-green"></label>
									</div>
									<div class="chat-right">
										<p>Jackson jacob</p>
										<h6>Urna mollis ornare vel</h6>
									</div>
									<div class="clearfix"> </div>	
								</a>
							</li>
							<li><a href="#">
									<div class="chat-left">
										<img class="img-circle" src="images/i3.png" alt="">
										<label class="small-badge bg-green"></label>
									</div>
									<div class="chat-right">
										<p>Elisa liden </p>
										<h6>Quis risus ullam neget </h6>
									</div>
									<div class="clearfix"> </div>	
								</a>
							</li>
							<li><a href="#">
									<div class="chat-left">
										<img class="img-circle" src="images/i4.png" alt="">
										<label class="small-badge"></label>
									</div>
									<div class="chat-right">
										<p>Michael John</p>
										<h6>Mollis ornare Urna vel</h6>
									</div>
									<div class="clearfix"> </div>	
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-8 compose-right widget-shadow">
					<div class="panel-default">
						<div class="panel-heading">
							Inbox 
						</div>
						<div class="inbox-page">
					<h4>Today</h4>
					<div class="inbox-row widget-shadow" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i1.png" alt=""/></div>
						<div class="mail mail-name"> <h6>Alexander</h6> </div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							<div class="mail"><p>Nullam quis risus eget urna mollis ornare accusamus terry </p></div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#"  data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div> 
						</div>
						<div class="mail-right"><p>30th Nov</p></div>
						<div class="clearfix"> </div>
						<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="mail-body">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					<div class="inbox-row widget-shadow" id="accordion1" role="tablist" aria-multiselectable="true">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i2.png" alt=""/></div>
						<div class="mail mail-name"><h6>Michael</h6></div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
							<div class="mail"><p>Mollis nullam quis risus eget ornare accusamus terry </p></div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#"  data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div> 
						</div>
						<div class="mail-right"><p>30th Nov</p></div>
						<div class="clearfix"> </div>	
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="mail-body">
								<p>Quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i3.png" alt=""/></div>
						<div class="mail mail-name"><h6>Davidson</h6></div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapsethree">
							<div class="mail"><p>Ornare vel eu leo nullam quis urna mollis accusamus terry </p></div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#"  data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div> 
						</div>
						<div class="mail-right"><p>30th Nov</p></div>
						<div class="clearfix"> </div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="mail-body">
								<p>Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i4.png" alt=""/></div>
						<div class="mail mail-name"><h6>Charley</h6></div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
							<div class="mail"><p>Vely Ornare  leo nullam quis risus mollis lorem ipsum</p></div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#"  data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapsefour">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div> 
						</div>
						<div class="mail-right"><p>30th Nov</p></div>
						<div class="clearfix"> </div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="mail-body">
								<p> Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="inbox-page row">
					<h4>Yesterday Messages</h4>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i2.png" alt=""/></div>
						<div class="mail mail-name"><h6> Michael </h6></div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
							<div class="mail"><p>Mollis nullam quis risus eget urna  ornare dolor sit amet</p></div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#"  data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div> 
						</div>
						<div class="mail-right"><p>29th Nov</p></div>
						<div class="clearfix"> </div>
						<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
							<div class="mail-body">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch Nihil.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i1.png" alt=""/></div>
						<div class="mail mail-name"><h6>Janiya</h6></div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapsesix">
							<div class="mail"><p>Nullam quis risus eget urna mollis ornare eiusmod accusamus</p></div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#"  data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div> 
						</div>
						<div class="mail-right"><p>29th Nov</p></div>
						<div class="clearfix"> </div>
						<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
							<div class="mail-body">
								<p>Officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i3.png" alt=""/></div>
						<div class="mail mail-name"><h6>Skolski</h6></div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSev" aria-expanded="true" aria-controls="collapsesev">
							<div class="mail"><p>Ornare vel eu leo nullam quis urna mollis eiusmod high life</p></div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#"  data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSev" aria-expanded="true" aria-controls="collapseSev">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div> 
						</div>
						<div class="mail-right"><p>29th Nov</p></div>
						<div class="clearfix"> </div>	
						<div id="collapseSev" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsev">
							<div class="mail-body">
								<p>wolf moon officia aute, non cupidatat skateboard dolor brunch aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i4.png" alt=""/></div>
						<div class="mail mail-name"><h6>Emoori</h6></div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
							<div class="mail"><p>Vely Ornare  leo nullam eget urna mollis lorem ipsum</p></div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#"  data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div> 
						</div>
						<div class="mail-right"><p>29th Nov</p></div>
						<div class="clearfix"> </div>
						<div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeight">
							<div class="mail-body">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="inbox-page row">
					<h4>Older Messages</h4>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i2.png" alt=""/></div>
						<div class="mail mail-name"><h6> Michael</h6></div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapsenine">
							<div class="mail"><p>Mollis nullam quis risus ornare vel leo dolor sit amet</p></div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#"  data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div> 
						</div>
						<div class="mail-right"><p>29th Nov</p></div>
						<div class="clearfix"> </div>
						<div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingnine">
							<div class="mail-body">
								<p>Skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i1.png" alt=""/></div>
						<div class="mail mail-name"><h6>Janiya</h6></div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
							<div class="mail"><p>Nullam quis risus mollis ornare leo ollis nullam quis</p></div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#"  data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div> 
						</div>
						<div class="mail-right"><p>28th Nov</p></div>
						<div class="clearfix"> </div>
						<div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingten">
							<div class="mail-body">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i3.png" alt=""/></div>
						<div class="mail mail-name"><h6>Skolski</h6></div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="true" aria-controls="collapse11">
							<div class="mail"><p>Ornare vel quis risus ollis nullam quis eget urna mollis </p></div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#"  data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="true" aria-controls="collapse11">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div> 
						</div>
						<div class="mail-right"><p>28th Nov</p></div>
						<div class="clearfix"> </div>
						<div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
							<div class="mail-body">
								<p>Nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i4.png" alt=""/></div>
						<div class="mail mail-name"><h6>Emoori</h6></div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="true" aria-controls="collapse12">
							<div class="mail"><p>Vely Ornare  leo nullam quis risus eget ollis nullam quis</p></div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#"  data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="true" aria-controls="collapse12">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div> 
						</div>
						<div class="mail-right"><p>27th Nov</p></div>
						<div class="clearfix"> </div>
						<div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
							<div class="mail-body">
								<p>Anim pariatur cliche repreh enderit brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i1.png" alt=""/></div>
						<div class="mail mail-name"><h6>Janiya</h6></div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="true" aria-controls="collapse13">
							<div class="mail"><p>Vely Ornare quis risus ollis nullam quis eget urna mollis </p></div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#"  data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="true" aria-controls="collapse13">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div> 
						</div>
						<div class="mail-right"><p>26th Nov</p></div>
						<div class="clearfix"> </div>
						<div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
							<div class="mail-body">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon temsunt </p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i3.png" alt=""/></div>
						<div class="mail mail-name"><h6>Skolski</h6></div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="true" aria-controls="collapse14">
							<div class="mail"><p>Vely Ornare  leo nullam quis ollis nullam quis risus eget </p></div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#"  data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="true" aria-controls="collapse15">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div> 
						</div>
						<div class="mail-right"><p>26th Nov</p></div>
						<div class="clearfix"> </div>
						<div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14">
							<div class="mail-body">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i1.png" alt=""/></div>
						<div class="mail mail-name"><h6>Janiya</h6></div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="true" aria-controls="collapse15">
							<div class="mail"><p>Nullam quis risus mollis ornare vel eu leo ollis nullam quis</p></div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#"  data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="true" aria-controls="collapse15">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div> 
						</div>
						<div class="mail-right"><p>26th Nov</p></div>
						<div class="clearfix"> </div>
						<div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading15">
							<div class="mail-body">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i2.png" alt=""/></div>
						<div class="mail mail-name"><h6> Michael</h6></div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="true" aria-controls="collapse16">
							<div class="mail"><p>Mollis nullam quis risus eget ollis nullam quis urna</p></div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#"  data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="true" aria-controls="collapse16">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div> 
						</div>
						<div class="mail-right"><p>25th Nov</p></div>
						<div class="clearfix"> </div>
						<div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16">
							<div class="mail-body">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua putica sapiente ea proident.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i3.png" alt=""/></div>
						<div class="mail mail-name"><h6>Skolski</h6></div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse17" aria-expanded="true" aria-controls="collapse17">
							<div class="mail"><p>Ornare vel eu leo nullam quis urna mollis ollis nullam quis</p></div>
						</a>
						<div class="mail-right  dots_drop">
							<div class="dropdown">
								<a href="#"  data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse17" aria-expanded="true" aria-controls="collapse17">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div> 
						</div>
						<div class="mail-right"><p>25th Nov</p></div>
						<div class="clearfix"> </div>
						<div id="collapse17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading17">
							<div class="mail-body">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i4.png" alt=""/></div>
						<div class="mail mail-name"><h6>Emoori</h6></div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse18" aria-expanded="true" aria-controls="collapse18">
							<div class="mail"><p>Vely Ornare  leo nullam quis ollis nullam quis risus mollis </p></div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#"  data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse18" aria-expanded="true" aria-controls="collapse18">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div> 
						</div>
						<div class="mail-right"><p>10th Nov</p></div>
						<div class="clearfix"> </div>
						<div id="collapse18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading18">
							<div class="mail-body">
								<p>Laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
				</div>
						
			</div>
				</div>
				<div class="clearfix"> </div>	
			</div>
				
			</div>
		</div>
		<!--footer-->
		<?php
	include './theme/footer.php';
	?>
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
		
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
   
</body>
</html>