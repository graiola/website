<html>



<div id="navbg">
		<div id="nav">
			<ul>	

			<li <?=echoSelectedClassIfRequestMatches("index")?>
			<?=echoSelectedRoot()?>> <!-- Check if we are in the root, if yes, select index in the menu bar -->
			<a href="index.php">Home</a></li>
			
			<li <?=echoSelectedClassIfRequestMatches("research")?>><a href="research.php">Research</a></li>
			<li <?=echoSelectedClassIfRequestMatches("publications")?>><a href="publications.php">Publications</a></li>
			<li <?=echoSelectedClassIfRequestMatches("videos")?>><a href="videos.php">Videos</a></li>
			<li <?=echoSelectedClassIfRequestMatches("code")?>><a href="code.php">Code</a></li>
			
			</ul>
		</div>
</div>


</html>
