<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
		 <a class="navbar-brand" id="<?php if ($heading == 'Home'){echo 'active';}?>" href="<?php echo $path;?>index.php"><Span id="you">You</Span><Span id="nix">Nix</Span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
			<li class="dropdown" id="<?php if ($heading == 'Tutorial'){echo 'active';}?>">
        		<a class="dropdown-toggle" href="<?php echo $path;?>tutorials.php" >TUTORIALS<span class="caret" id="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo $path;?>tutorials/tutorial1.php">SSH</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial2.php">Navigation</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial3.php">Creating and deleting files</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial4.php">SFTP</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial5.php">File Permissions</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial6.php">How the internet works</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial7.php">Apache</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial8.php">Unix text editors</a></li>
				</ul>
      	</li>
        <li class="dropdown" id="<?php if ($heading == 'Quiz'){echo 'active';}?>">
			  	<a class="dropdown-toggle" href="<?php echo $path;?>quizzes.php">QUIZZES<span class="caret" id="caret1"></span></a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo $path;?>tutorials/tutorial1.php">SSH</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial2.php">Navigation</a></li>
					<li><a href="#">Creating and deleting files</a></li>
					<li><a href="#">SFTP</a></li>
					<li><a href="#">File Permissions</a></li>
					<li><a href="#">How the internet works</a></li>
					<li><a href="#">Apache</a></li>
					<li><a href="#">Unix text editors</a></li>
				</ul>
			</li>
        <li><a href="<?php echo $path;?>glossary.php" id="<?php if ($heading == 'Glossary'){echo 'active';}?>">GLOSSARY</a></li>
      </ul>
    </div>
  </div>
</nav>

<script src="<?php echo $path;?>assets/js/dropdown.js"></script>