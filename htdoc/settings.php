<?php 
	include 'header.php';
	include 'functions.php';
?>
	<article class="row">
		<!-- BODY -->
		<!-- FIRST TWO FUCNCTIONS -->
		<div class = "content">
		<div class="row">
		  <div class="col-md-6">
		<div class="panel panel-default calendar">
		      <div class="panel-body">
		      <div id = 'calendar'></div>
		      </div>
		    </div>
		</div>

	<div class="col-md-6">
			<div class="panel panel-default notepad">
			    <div class="panel-heading">
			    <div class = "notepad_title">Fuck</div>
			</div>
		<div class="panel-body notepad_notes">
			<div class="row">
				<table class="table table-hover">
					<tr>
						<td><b>Add Note</b></td>
						<td><p></p></td>
					</tr>
					<tr>
						<td><b>Sales Info</b></td>
						<td>Here we have sales information for the mont...</td>
					</tr>
					<tr>
						<td><b>Notes from 2/11</b></td>
						<td>1) Increase productivity for the developmen...</td>
					</tr>
					<tr>
						<td><b>For Monday</b></td>
						<td>Fix bug within file.js, Test cases</td>
					</tr>
					<tr>
						<td><b>Check Up On Steve</b></td>
						<td>Hasn't been to work in a week, also hasn't resp...</td>
					</tr>
					<tr>
						<td><b>Notes from 2/11</b></td>
						<td>1) Increase productivity for the developmen...</td>
					</tr>
					<tr>
						<td><b>Sales Info</b></td>
						<td>Here we have sales information for the mont...</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	</div>

		<!-- END FIRST TWO FUNCTIONS -->

		<!-- SECOND TWO FUCNCTIONS -->

		<div class="col-md-6">
			<div class="panel panel-default reminder">
		      	<div class="panel-heading">
		      		<div class = "reminder_title">Reminders</div>
		      	</div>
		      	<div class="panel-body reminder_reminders">
		      		<div class="row">
						<table class="table">
							<tr>
								<td><input type="checkbox"></td>
								<td>Complete the backlog and product review
							</tr>
							<tr>
								<td><input type="checkbox"></td>
								<td><b>@A.Quesada :</b> Finish .js, .php files for prog. 1
							</tr>
							<tr>
								<td><input type="checkbox"></td>
								<td><b>@HR @directManager :</b> Contact about vacaction
							</tr>
							<tr>
								<td><input type="checkbox"></td>
								<td>Schedule client meeting
							</tr>
							<tr>
								<td><input type="checkbox"></td>
								<td>Do this and that
							</tr>
							<tr>
								<td><input type="checkbox"></td>
								<td>Document sales for last period
							</tr>
						</table>
					</div>
		      </div>
		    </div>
		  </div>

		<div class="col-md-6">
			<div class="panel panel-default file_manager">
		    	<div class="panel-heading">
		    		<div class = "file_manager_title">
		    			<div class="row">
		    				<div class="col-md-1">
		    				</div>
		    				<div class="col-md-1">
		    					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    				</div>
		    				<div class="col-md-1">
		    					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    				</div>
		    				<div class="col-md-1">
		    				</div>

		    				<div class="col-md-1">
		    				</div>

		    				<div class="col-md-1">
		    				</div>
		    				<div class="col-md-2">
		    					<span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
		    				</div>
		    				<div class="col-md-1">
		    					<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
		    				</div>
		    				<div class="col-md-1">
		    				</div>

		    				<div class="col-md-2">
		    					<!--
		    						<input type="text" class="form-control" id="searchBar" placeholder=" Search">
		    					-->
		    				</div>
		    			</div>
		    		</div>
		    	</div>

		      	<div class="panel-body file_manager_files file_icons">
		      		<div class="row">
						<div class="col-md-3">
							<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
							<p>main.js</p>
						</div>
						<div class="col-md-3">
							<span class="glyphicon glyphicon-file" aria-hidden="true"></span>
							<p>main.js</p>
						</div>
						<div class="col-md-3">
							<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
							<p>Project 5.1.2</p>
						</div>
						<div class="col-md-3">
							<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
							<p>Misc. files</p>
						</div>
		      		</div>
		      		<div class="row">
						<div class="col-md-3">
							<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
							<p>PHP Files - 4</p>
						</div>
						<div class="col-md-3">
							<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
							<p>HR Forms</p>
						</div>
						<div class="col-md-3">
							<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
							<p>Project9</p>
						</div>
						<div class="col-md-3">
							<span class="glyphicon glyphicon-file" aria-hidden="true"></span>
							<p>index.java</p>
						</div>
		      		</div>
		      		<div class="row">
						<div class="col-md-3">
							<span class="glyphicon glyphicon-file" aria-hidden="true"></span>
							<p>temp.cpp</p>
						</div>
						<div class="col-md-3">
							<span class="glyphicon glyphicon-file" aria-hidden="true"></span>
							<p>data structs</p>
						</div>
		      		</div>
		      	</div>
		    </div>
		</div>

		<!-- END SECOND TWO FUNCTIONS -->

		<!-- THIRD TWO FUCNCTIONS -->
		  <div class="col-md-6">
		<div class="panel panel-default two_panels_right">
		      <div class="panel-heading">Panel with panel-primary class</div>
		      <h6>
		      fsd fsad f gs fgdsa fdsa fdsa fdsa fdsa f f g gsa dsadsad
		      fdsf fdsa bfd gh res 
		      </h6>
		      <div class="panel-body">Panel Content</div>
		    </div>
		  </div>

		  <div class="col-md-6">
		<div class="panel panel-default two_panels_right">
		      <div class="panel-heading">Panel with panel-primary class</div>
		      <div class="panel-body">Panel Content</div>
		    </div>
		  </div>

		<!-- END THIRD TWO FUNCTIONS -->
		</div>
		</div>
		<!-- END BODY -->
	</article>

<?php include 'footer.php'; ?>