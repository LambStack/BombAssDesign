<!-- Header PHP -->
 <?php
  	$path = '../';
  	$title = 'Tutorial 4';
 	$heading = 'Tutorial';
  	include $path.'assets/includes/header.php';
  ?>
	<h1>Tutorial 2 - SFTP</h1>
	
	<p>
		SFTP stands for SSH File Transfer Protocol, it can also be called Secure File Transfer Protocol. 
		SFTP is an encrypted command-line transfer of files between two systems. This transfer can be done
		through the command-line on your computer, or an SFTP graphical client software can be used to simplify
		the transferring process. SFTP requires the name of the host you are connecting to, as well as a username and password for the host.
		In this tutorial, you will be learning how to download and use the free SFTP software, FileZilla.
	</p>
	
	<!-- Link to correct computer thing -->
	
	<h2>Downloading FileZilla</h2>
	
	<p>
		To begin downloading, please select your operating system from the list below.
		Clicking the link below will take you directly to the dowload page on FileZilla.
	</p>
	
	<ol>
		<li><a href="https://filezilla-project.org/download.php?type=client">Windows 64bit</a></li>
		<li><a href="https://filezilla-project.org/download.php?platform=win32">Windows 32bit</a></li>
		<li><a href="https://filezilla-project.org/download.php?platform=osx">Mac OS X</a></li>
	</ol>
	
	<p>Alternatively, you can go to FileZilla's homepage <a href="https://filezilla-project.org/">here</a>.</p>
	
	
	<h2>For Windows</h2>
	
		<img src="../assets/imgs/windows_download.png" alt="FileZilla Download for Windows">
	
	<p>
		Click the green "Download FileZilla Client" button. Your download will be a .exe file.
		Run the file when the download is completed, and give it permission to run on your computer.
	</p>
		<img src="../assets/imgs/agreement_windows.png" alt="FileZilla Download Agreement">

	
	<h2>For Mac</h2>
	<p>
		Click the green "Download FileZilla Client" button. Choose where you would like to save the zip
		file. In this example, the zip file will be saved to the "Downloads" file.
	</p>
		<img src="../assets/imgs/mac_download.png" alt="FileZilla Download for Mac">
	<p>
		To unzip your downloaded file, go to the location of you download and double click the zipped file.
		A new application item called "FileZilla-Installer" will appear in the folder. Open this application
		and click "Open" to download.
	</p>
		<img src="../assets/imgs/accept_download.png" alt="FileZilla Download">
	<p>
		The Installer will open, read and agree to the software license terms to continue.
	</p>
		<img src="../assets/imgs/install.png" alt="FileZilla Download">
	<p>
		When the application has finished installing, select the "Done" button to complete your installation and
		FileZilla should run.
	</p>
	
	<h2>Using FileZilla</h2>
	
	<p>
		Congratulations on successfully downloading FileZilla!
	</p>
	<h2>Establishing the File Connection</h2>
	<p>
		In order to send files, you must know the name of the host you want to connect to, the username, and the password.
		The default port number for SFTP is '22'. To establish the connection enter the host name, username, password, 
		and port number in the fields at the top, then press the "Quickconnect" button.
	</p>
		<img src="../assets/imgs/login.png" alt="FileZilla Download">
	
	<!-- image -->
	
	<p>
		If you have successfully connected to the host, you will see
	</p>
		<img src="../assets/imgs/loggedin.png" alt="FileZilla Download">
	<!-- Quiz -->
	
<!-- Footer PHP-->
<?php
	$path = '../';
	$title = 'Tutorial 1';
	include $path.'assets/includes/footer.php';
?>
