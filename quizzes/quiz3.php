<!-- Quiz 3 -->
<!-- B.A.D Design -->
<!-- Header PHP-->
<?php
	$path = '../';
	$title = 'Quiz 3';
	$heading = 'Quiz';
	include $path.'assets/includes/header.php';
?>
	<!-- Quiz -->
	<div class="quiz">
		<h2>Files Quiz</h2>
		<form>
			<div class='question1'>
				<h3>Question 1: Which choice is the correct way to create a file?</h3>
				<div class="question">
					<input type='radio' name='answer1' value='1'>create file1
					<br>
					<input type='radio' name='answer1' value='2'>mkdir file1
					<br>
					<input type='radio' name='answer1' value='3'>vi file1
					<br> </div>
			</div>
			<div class='question2'>
				<div class="question">
					<h3>Which choice is the correct way to delete a file?</h3>
					<input type='radio' name='answer2' value='1'>rm file1
					<br>
					<input type='radio' name='answer2' value='2'>rmdir file1
					<br>
					<input type='radio' name='answer2' value='3'>delete file1
					<br> </div>
			</div>
			<div class='question3'>
				<h3>Which choice is the correct way to rename a file?</h3>
				<div class="question">
					<input type='radio' name='answer3' value='1'>mv file1 file2
					<br>
					<input type='radio' name='answer3' value='2'>rn file1 file 2
					<br>
					<input type='radio' name='answer3' value='3'>rename file1 file2
					<br> </div>
			</div>
			<div class='question4'>
				<h3>Which choice is the correct way move to a file?</h3>
				<div class="question">
					<input type='radio' name='answer4' value='1'>vi file1 file2 newDestination
					<br>
					<input type='radio' name='answer4' value='2'>mv file1 file2 newDestination
					<br>
					<input type='radio' name='answer4' value='3'>move file1 file2 newDestination
					<br> </div>
			</div>
			<div class='question5'>
				<h3>Which choice is the correct way to copy a file?</h3>
				<div class="question">
					<input type='radio' name='answer5' value='1'>cp file1 file2
					<br>
					<input type='radio' name='answer5' value='2'>copy file1 file2
					<br>
					<input type='radio' name='answer5' value='3'>vi file1 file2
					<br> </div>
			</div>
			<button onclick="checkQuiz(x)">SUBMIT</button>
		</form>
	</div>
	<!-- Footer PHP-->
	<?php
	include $path.'assets/includes/footer.php';
?>