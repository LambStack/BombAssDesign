<!-- Quiz 8 -->
<!-- B.A.D. Design -->
<!-- Header -->

<?php
	$path = '../';
	$title = 'Quiz 8';
	$heading = 'Quiz';
	include $path.'assets/includes/header.php';
?>

<!-- Quiz -->
<div class="quiz">
	<h2>Text Editors</h2>
	<!-- Question 1 -->
	<form>
		<h3>What command would you use to exit the Vi text editor?</h3>
		<div class="question">
			<input type="radio" name="answer1" id="a" value="0">
			<label for="a">:exit!<label>
			</br>
			<input type="radio" name="answer1" id="b" value="1">
			<label for="b">:e!<label>
			</br>
			<input type="radio" name="answer1" id="c" value="2">
			<label for="c">:q!<label> <!-- Correct answer -->
			</br>
			<input type="radio" name="answer1" id="d" value="3">
			<label for="d">:quit!<label>
			</br>
		</div>
		<h3>What command would you use to start editing a file with Vi?</h3>
		<div class="question">
			<input type="radio" name="answer2" id="e" value="0">
			<label for="e">e<label>
			</br>
			<input type="radio" name="answer2" id="f" value="1">
			<label for="f">i<label> <!-- Correct answer -->
			</br>
			<input type="radio" name="answer2" id="g" value="2">
			<label for="g">edit<label>
			</br>
			<input type="radio" name="answer2" id="h" value="3">
			<label for="h">insert<label>
			</br>
		</div>
		<h3>Which of the following do you NOT need to know in order to open a text editor?</h3>
		<div class="question">
			<input type="radio" name="answe3" id="i" value="0">
			<label for="i">transfer port<label> <!-- Correct answer -->
			</br>
			<input type="radio" name="answer3" id="j" value="1">
			<label for="j">filename<label>
			</br>
			<input type="radio" name="answer3" id="k" value="2">
			<label for="k">file path<label>
			</br>
			<input type="radio" name="answer3" id="l" value="3">
			<label for="l">text editor name<label>
			</br>
		</div>
		<h3>Vi and Pico can be used outside of the command line.</h3>
		<div class="question">
			<input type="radio" name="answer4" id="m" value="0">
			<label for="m">true<label>
			</br>
			<input type="radio" name="answer4" id="n" value="1">
			<label for="n">false<label>
			</br>
		</div>
		<h3>QUESTION</h3>
		<div class="question">
			<input type="radio" name="answe5" id="" value="0">
			<label for="">ANSWER<label>
			</br>
			<input type="radio" name="answer5" id="" value="1">
			<label for="">ANSWER<label>
			</br>
			<input type="radio" name="answer5" id="" value="2">
			<label for="">ANSWER<label>
			</br>
		</div>
		
		<div class="button" onclick="checkQuiz(8)" value="Submit"></div>
	</form>
</div>
<?php
	include $path.'assets/includes/footer.php';
?>
