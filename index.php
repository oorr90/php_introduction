<?php

//Collecting POST data from the HTML form below
$name = $_POST['name'];
$meal = $_POST['meal'];
$state = $_POST['state'];
$harry = $_POST['harry'];

//When opening the page, the form has not been filled out, so the variable holds a value of FALSE
//Once the form is COMPELTELY filled out, the variable becomes TRUE
$confirmationQuery = false;
if (!empty($name) && !empty($meal) && !empty($state) && !empty($harry)) {
	$confirmationQuery = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PHP Basics Project 1</title>
</head>
<body>
    <div class="intro_image"></div>
    
    <header>
        <h1>PHP Basics Project 1</h1>
        <h2>This simple project uses the PHP skills I learned this week.</h2>
    </header>
    
    <main>
        <div class="greeting">
            <?php include('greeting.php'); ?>
        </div>
        <div class="project">
           
<?php

if ($confirmationQuery == true) {

?>
            <div class="survey_response">
                <h4>Thank you for filling out the survey, <?php echo $name; ?>!</h4>
            
<?php
    
	if ($meal == "breakfast") {
		echo "<p>For me, breakfast is second place only to brunch. I respect your answer.</p>";
	} 
    else if ($meal == "brunch") {
		echo "<p>YO. SAME. Brunch rules!</p>";
	} 
    else if ($meal == "lunch") {
		echo "<p>I am judging you a little bit because lunch is the worst.</p>";
	} 
    else {
		echo "<p>Dinner is nothing to write home about, but it's better than lunch, so there's that.</p>";
	}
	
	if ( strtolower($state) == "maine" || strtolower($state) == "me" ) {
		echo "<p>I live in Maine, too! And honestly it's pretty great.</p>";
	} else {
		echo "<p>Your state is aight, but it's not Maine.</p>";
	}

?>
            </div>
                <div class="letter">
                    <p class="letter_intro">And now a letter to JK Rowling, as told by <?php echo $name; ?>:<p>
                    <p>Dear JK Rowling,</p>
                    <p><?php echo $harry; ?><br>And that's how I feel about Harry Potter.</p>
                    <p>Sincerely,<br><?php echo $name; ?></p>
                </div>

<?php

} else {
    
?>
    <div class="survey_intro">
        <h3>Survey of Totally Random Stuff</h3>
        <p>Introduce yourself and I'll tell you if we have anything in common</p>
    </div>   
        
        <form method="POST" action="#">
        <p>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </p>
        <p>
            What is your favorite meal of the day?<br>
            <input type="radio" name="meal" value="breakfast" checked>Breakfast<br>
            <input type="radio" name="meal" value="brunch">Brunch<br>
            <input type="radio" name="meal" value="lunch">Lunch<br>
            <input type="radio" name="meal" value="dinner">Dinner<br>
        </p>
        <p>
            <label for="state">What state do you live in?</label>
            <input type="text" id="state" name="state" required>
        </p>
        <p>
            <label for="harry">What are your thoughts on Harry Potter?</label><br>
            <textarea id="harry" name="harry" rows="5" cols="30" required></textarea>
        </p>
        <input type="submit" name="submit" value="Submit">
        </form>
      
<?php
    
//close the IF/ELSE statement
}

?>

        </div>
        
        <div class="highlights">
            <p>Topics include:</p>
            <ul>
                <li>Variables and $_POST</li>
                <li>Concatenation</li>
                <li>Using HTML and PHP</li>
                <li>Using include()</li>
                <li>Using empty()</li>
                <li>Built-in PHP Functions</li>
                <li>If/Else Statements</li>
            </ul>
        </div>
        
    </main>
    
    <footer>
        <p>&copy; Olivia Orr 2017</p>
        <div class="social">
            <a href="https://github.com/oorr90"><img src="img/github_circle_logo_white.png" alt="Github icon"></a>
            <a href="https://www.linkedin.com/in/olivia-orr-a51bbb50/"><img src="img/linkedin_circle_logo_white.png" alt="LinkedIn icon"></a>
        </div>
    </footer>
    
</body>
</html>