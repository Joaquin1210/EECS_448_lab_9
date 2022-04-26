<?php
if($_POST['submit']) {
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$score = 0;

if($q1 == 1)
{ // 1st option is correct
	$score++;
	$q1 = 'Oslo';
}

else
{
	if($q1 == 2){$q1 = 'Bergen';}
	if($q1 == 3){$q1 = 'Alesund';}
	if($q1 == 4){$q1 = 'Arendal';}
}

echo '<p>Question 1: What is the capital of Norway?</p>'; 
echo '<p>You answered: ' . $q1.'</p>';
echo '<p>Correct Answer: Oslo</p>';
if($q2 == 3)
{ // 3rd option is correct
	$score++;
	$q2 = "Elizabeth II";
}
else
{
	if($q2 == 2){$q2 = "Rebecca I";}
	if($q2 == 1){$q2 = "Mary III";}
 	if($q2 == 4){$q2 = "Charlotte";}
}

echo '<p>Question 2: Who is the current Queen of England</p>'; 
echo '<p>You answered: ' . $q2.'</p>';
echo '<p>Correct Answer: Elizabeth II</p>';
if($q3 == 2)
{ // 2nd option is correct
	$score++;
  	$q3 = 'Arsenal';
}
else
{
	if($q3 == 3){$q3 = 'Chelsea';}
	if($q3 == 1){$q3 = 'Liverpool';}
	if($q3 == 4){$q3 = 'Everton';}
}

echo '<p>Question 3: Biggest football(soccer) team in England?'; 
echo '<p>You answered: ' . $q3.'</p>';
echo '<p>Correct Answer: Arsenal</p>';
if($q4 == 4)
{ // 4th option is correct
	$score++;
  	$q4 = 'Paraguay';
}
else
{
	if($q4 == 1){$q4 = 'Uruguay';}
	if($q4 == 2){$q4 = 'Argentina';}
	if($q4 == 3){$q4 = 'Brazil';}
}

echo '<p>Question 4: Which one is a landlocked country in South America?'; 
echo '<p>You answered: ' . $q4.'</p>';
echo '<p>Correct Answer: Paraguay</p>';
if($q5 == 1)
{ // 1st option is correct
	$score++;
	$q5 = 'Thumper';
}
else
{
	if($q5 == 2){$q5 = 'Bumper';}
	if($q5 == 3){$q5 = 'Bad Bunny';}
	if($q5 == 4){$q5 = 'Peter Rabbit';}
}

echo '<p>Question 5: What is the name of the rabbit in Bambi?'; 
echo '<p>You answered: ' . $q5.'</p>';
echo '<p>Correct Answer: Thumper</p>';

  
echo '<h2>You have answered '.$score.' correctly.</h2>';
$score = $score	/ 5 *100;
echo '<h2>You have scored '.$score.'%.</h2>';

}
?>
