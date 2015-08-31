<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Gennaro Raiola - Research</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<body>

<!-- CONFIG -->
<?php include("includes/config.php"); ?>
<!-- END CONFIG -->

<div id="wrap">

	<!-- TITLE -->
	<?php include("includes/title.html"); ?>
	<!-- END TITLE -->

	<div class="page">
	
		<!-- MENU -->
		<?php include("includes/menu.php"); ?>
		<!-- END MENU -->
		
		<div class="page-wrap">
			<div class="content">
	
				<!-- CONTENT -->
				<p><h3>My PhD Project</h3></p>
				<p><h4><i>Probabilistic virtual guides for co-manipulation</i></h4></p>
				<p>
				Industrial robots have had a fundamental role in achieving the efficiency and high quality of current production lines. 
				However, due to limitations of robots in terms of flexibility and safety, many assembly lines still require human workers. 
				My PhD project aims at developing methods to facilitate the joint completion of a task by a human and a robot. 
				We focus on <b>virtual guides</b>, which constrain the movement of a robot, to facilitate task completion. 
				</p>
				<p style="margin: 0 0 0 225px"><img src="img/virtual_guides.png" alt="image" style="display: block; text-align: center;" width="200px"/></p>
				<p>
				The innovative aspects of our work are: 
				</p>
				<p><ol>
				<li> realizing <b>active virtual guides</b>, which are able to smoothly change from a guidance mode, where it supports the human, to an autonomous mode, where the robot completes the task by itself. </li> 
				<li>  using one coherent <b>probability framework</b>, based on Gaussian mixture models (GMM),to perform the acquisition and the recognition of the virtual guides. </li>
				</ol></p>
				<p>
				These innovations provide a novel and intuitive interface for joint human-robot completion of tasks, which improves the ergonomy and safety for the human operator, and enhances the manipulation capabilities of the robot.
				</p>
				<!--<br>
				<p>
				My PhD is a collaboration funded by <a href="http://www.digiteo.fr">DIGITEO</a>, and involves different research institute: 
				
				<p style="margin: 0 0 0 225px"><img src="img/logos.png" alt="image" style="display: block; text-align: center;" width="125px"/></p>

				I am supervised by Prof. Freek Stulp (ENSTA-ParisTech), Dr. Xavier Lamy (CEA-List), Prof. Pedro Rodriguez Ayerbe (Supelec) and Prof. Sami Tliba (Supelec) 
				</p>-->
				<!-- END CONTENT -->

			</div>
			
			<!-- SIDEBAR -->
			<?php include("includes/sidebar.html"); ?>
			<!-- END SIDEBAR -->
			
			<div class="clear"></div>
		</div>
	</div>
</div>
</body>
</html>
