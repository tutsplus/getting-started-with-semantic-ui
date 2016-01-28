<!DOCTYPE html>
<html>
	<head>
		<title>Contact page</title>
		<?php include'includes/head.php'; ?>
	</head>
	<body rel="3">
		<?php include'includes/header.php'; ?>
		<div class="ui modal">
			<i class="icon close"></i>
			<div class="header">
				<h1 class="ui header"> <i class="icon hand right"></i>  Terms </h1>
			</div>
			<div class="content">
				<div class="left"> <img src="images/about.jpg" class="ui image circular" alt="about"/> </div>
				<div class="right"> 
					<p>Integer et commodo arcu. Vestibulum varius felis aliquet, euismod erat id, imperdiet sem. Praesent nec adipiscing felis. Nullam congue ut tellus vitae pellentesque. Mauris aliquam hendrerit leo quis ullamcorper. Pellentesque ornare, lectus sed lacinia aliquam, libero velit dictum libero, sit amet tincidunt dui tortor a quam. Nullam pulvinar cursus eros, ut bibendum neque hendrerit id. Maecenas vitae pellentesque ligula. In ultricies, ligula elementum commodo viverra, nisl urna tincidunt nisi, non imperdiet arcu neque hendrerit erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et eros consequat, dignissim nisi sit amet, adipiscing ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam semper mi ante, sed ultricies odio adipiscing pretium. Praesent libero est, accumsan sed interdum nec, elementum gravida turpis. Vivamus tempus, quam eu pellentesque vestibulum, magna elit eleifend metus, vitae tristique nisi risus eu turpis. Ut vel ipsum sit amet elit laoreet vulputate. <a id="closemod" href="#"> Close </a> </p>
					<div class="ui progress striped active green">
						<div class="bar"></div>
					</div>
				</div>	
			</div>
			<div class="actions">
				<div class="ui button labeled icon negative">
					<i class="icon close"></i>
					Disagree
				</div>
				<div class="ui button labeled icon ok">
					<i class="icon checkmark"></i>
					Agree
				</div>
			</div>
		</div>

		<div class="ui segment orange raised">

			<div id="formdimmer" class="ui inverted dimmer">	<div class="ui text loader small">Loading...</div>	</div>
			<form class="ui form fluid">
				
				<!--<div class="ui error icon message">
					
				</div>-->

				<div id="out">

					<div class="fields">

						<div class="two wide field">
							<div class="ui label pointing below red"> <i class="icon asterisk"></i> Title </div>
							<div class="ui dropdown selection fluid">
								<input type="hidden" name="value" />
								<div class="default text"> Title </div>
								<i class="icon dropdown"></i>
								<div class="menu">
									<div class="item" data-value="0"> <i class="icon user circular inverted teal"></i> Mr </div>
									<div class="item" data-value="1"> <i class="icon user circular inverted teal"></i> Mrs </div>
									<div class="item" data-value="2"> <i class="icon user circular inverted teal"></i> Miss </div>
								</div>
							</div>
						</div>
						
						<div class="seven wide field">
							<div class="ui label pointing below red"> <i class="icon asterisk"></i> First Name </div>
							<input type="text" name="firstname" />
						</div>

						<div class="seven wide field">
							<div class="ui label pointing below red"> <i class="icon asterisk"></i> Last Name </div>
							<input type="text" name="lastname" />
						</div>

					</div>

					<div class="field">
						<div class="ui label pointing below red"> <i class="icon asterisk"></i> Email </div>
						<input type="text" name="email" />
					</div>

					<div class="fields">
						
						<div class="field ten wide">
							<div class="ui label pointing below red"> <i class="icon asterisk"></i> Message </div>
							<textarea name="message"></textarea>
						</div>

						<div class="field six wide">
							<div class="ui label pointing below teal"> Where did you hear about us? </div>
							<div class="grouped fields inline">
								<div class="field">
									<div class="ui checkbox radio">
										<input type="radio" name="Advert" checked="checked" />
										<label> Envato </label>
									</div>
								</div>
								<div class="field">
									<div class="ui checkbox radio">
										<input type="radio" name="Advert"/>
										<label> Youtube </label>
									</div>
								</div>
								<div class="field">
									<div class="ui checkbox radio">
										<input type="radio" name="Advert"/>
										<label> Google </label>
									</div>
								</div>
								<div class="field">
									<div class="ui checkbox radio">
										<input type="radio" name="Advert"/>
										<label> tutsplus </label>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>

				<div class="ui segment">
					<div class="ui shape">
						<div class="sides">
							<div class="active side">
								<div class="field">
									<div id="agree" class="ui checkbox toggle">
										<input type="checkbox" name="tandc" />
										<label> Agree to Terms </label>
									</div>
									<div class="ui label red pointing left prompt hidden"></div>
									<div id="submit" class="ui button submit labeled icon red small">
										<i class="icon edit"></i>
										Submit
									</div>
								</div>
							</div>
							<div class="side">
								<div class="ui segment inverted green center aligned">
									<h1 class="ui header">
										<i class="icon checkmark sign"></i>
										Thank You!
									</h1>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				</form>

		</div>

		<div id="terms" class="ui button labeled icon basic">
			<i class="icon pencil"></i>
			Terms &amp; Conditions
		</div>

		<?php include'includes/footer.php'; ?>
	</body>
</html>