<!DOCTYPE html>
<html>
	<head>
		<title>About page</title>
		<?php include'includes/head.php'; ?>
	</head>
	<body id="about" class="event" data-rel="1">
		<?php include'includes/header.php'; ?>
		<div class="ui breadcrumb small">
			<a href="index.php">Home</a>
			<i class="icon play divider"></i>
			<div class="active section">About</div>
		</div>
		<div class="ui page dimmer">
			<div class="content">
				<div class="center">
					<h2 class="ui header">1997</h2><br/>
					<p>Vivamus urna urna, dapibus id est sit amet, feugiat auctor nulla. Suspendisse ac diam rhoncus</p>
				</div>
			</div>
		</div>
		<div id="dimmer" class="ui circular image dimmable left floated">
			<div class="ui dimmer">
				<div class="content">
					<div class="center">
						<h2 class="ui header">1997</h2>
					</div>
				</div>
			</div>
			<img src="images/about.jpg" alt="about"/>
		</div>
		<p>Vivamus urna urna, dapibus id est sit amet, feugiat auctor nulla. Suspendisse ac diam rhoncus, ultrices mi et, porttitor nisi. Maecenas dui risus, viverra eget augue vel, luctus tincidunt urna. Cras lobortis dictum cursus. Nunc dignissim nisl dapibus massa ultrices, sit amet faucibus libero luctus. Duis accumsan sem nunc, sit amet porttitor magna tincidunt nec. Suspendisse ut augue vulputate, consequat erat et, condimentum mi. Nulla eu blandit quam. Aliquam congue ligula quis urna aliquet, vel suscipit purus ullamcorper. Sed tempor porttitor nulla nec gravida. Curabitur iaculis nibh vitae dictum tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque vitae vulputate nunc, sed condimentum tortor. Nulla vulputate ante ante, sit amet porta mauris vehicula vitae. Aenean ac est eu dui molestie consequat eu eu urna.</p>
		<p>Vivamus urna urna, dapibus id est sit amet, feugiat auctor nulla. Suspendisse ac diam rhoncus, ultrices mi et, porttitor nisi. Maecenas dui risus, viverra eget augue vel, luctus tincidunt urna. Cras lobortis dictum cursus. Nunc dignissim nisl dapibus massa ultrices, sit amet faucibus libero luctus. Duis accumsan sem nunc, sit amet porttitor magna tincidunt nec. Suspendisse ut augue vulputate, consequat erat et, condimentum mi. Nulla eu blandit quam. Aliquam congue ligula quis urna aliquet, vel suscipit purus ullamcorper. Sed tempor porttitor nulla nec gravida. Curabitur iaculis nibh vitae dictum tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque vitae vulputate nunc, sed condimentum tortor. Nulla vulputate ante ante, sit amet porta mauris vehicula vitae. Aenean ac est eu dui molestie consequat eu eu urna.</p>
		

		<table class="ui table segment three padded">
		  
			<thead>
			    <tr>
			    	<th>Name</th>
			    	<th>Status</th>
			    	<th>Notes</th>
			  	</tr>
			</thead>

			<tbody>
			    <tr class="disabled">
			    	<td>John</td>
			    	<td>Approved</td>
			    	<td>None</td>
			    </tr>
			    <tr>
			    	<td>Jamie</td>
			    	<td class="disabled"><i class="icon bell"></i>Approved</td>
			    	<td>Requires call</td>
			    </tr>
			    <tr>
			    	<td>Jill</td>
			    	<td>Denied</td>
			    	<td>None</td>
			    </tr>
			</tbody>

			<tfoot>
			    <tr>
				    <th colspan="3">
				    	<div class="ui black labeled small icon button"><i class="user icon"></i>Add User</div>
				    </th>
			  	</tr>
			</tfoot>

		</table>

		<div class="ui piled segment">


			<div class="ui minimal comments">

				<div class="comment">
					<a href="#" class="avatar">		<img src="images/person.jpg" alt="Person" />	</a>
					<div class="content">
						<a href="#" class="author">Person</a>
						<div class="metadata">	<span class="date">1 hour ago</span>	</div>
						<div class="text">
							feugiat auctor nulla. Suspendisse ac diam rhoncus, ultrices mi et, porttitor nisi. Maecenas dui risus, viverra eget augue vel, luctus tincidunt urna. Cras lobortis dictum cursus.
						</div>
						<div class="actions">
							<a href="#" class="reply"><i class="icon circular edit"></i>Reply</a>
							<a href="#" class="delete"><i class="icon circular delete"></i>Delete</a>
						</div>
						<div class="comment">
							<a href="#" class="avatar">		<img src="images/person.jpg" alt="Person" />	</a>
							<div class="content">
								<a href="#" class="author">Person</a>
								<div class="metadata">	<span class="date">1 hour ago</span>	</div>
								<div class="text">
									feugiat auctor nulla. Suspendisse ac diam rhoncus, ultrices mi et, porttitor nisi. Maecenas dui risus, viverra eget augue vel, luctus tincidunt urna. Cras lobortis dictum cursus.
								</div>
								<div class="actions">
									<a href="#" class="reply"><i class="icon circular edit"></i>Reply</a>
									<a href="#" class="delete"><i class="icon circular delete"></i>Delete</a>
								</div>
							</div>
						</div>
						<div class="comment">
							<a href="#" class="avatar">		<img src="images/person.jpg" alt="Person" />	</a>
							<div class="content">
								<a href="#" class="author">Person</a>
								<div class="metadata">	<span class="date">1 hour ago</span>	</div>
								<div class="text">
									feugiat auctor nulla. Suspendisse ac diam rhoncus, ultrices mi et, porttitor nisi. Maecenas dui risus, viverra eget augue vel, luctus tincidunt urna. Cras lobortis dictum cursus.
								</div>
								<div class="actions">
									<a href="#" class="reply"><i class="icon circular edit"></i>Reply</a>
									<a href="#" class="delete"><i class="icon circular delete"></i>Delete</a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<form class="ui reply form">
				<div class="field">
					<textarea></textarea>
				</div>
				<div class="ui button submit labeled icon black">
					<i class="icon edit"></i>
					Reply
				</div>
			</form>


			


		</div>


		<?php include'includes/footer.php'; ?>
	</body>
</html>