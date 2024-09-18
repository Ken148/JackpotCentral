<?php
    include_once 'seja.php';

    if (!isset($_SESSION['log'])) {
        header("Location: login.php");
        exit; 
    }else{
        echo $_SESSION['log'];
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="../CSS/about2.css">
</head>
<body>
    <header>
	    <div id="header_1">
            <table>
			    <tr>
				    <td id="main_td2"><a href="index3.php"><img src="../slike/logo.png" alt="jackpot" id="logo"></a></td>
				    <td id="main_td">
				        <table id="table2">
				            <tr>
				                <td><a href="play_admin.php" id="links">Number selection</a></td>
    				            <td><a href="statistics_admin.php" id="links">Statistics</a></td>
    				            <td><a href="winning_numbers_admin.php" id="links">Edit winning numbers</a></td>
				                <td><a href="" id="num5">About</a></td>
				            </tr>
				        </table>
				    </td>
				    <td><b><u><a href="odjava.php" id="logout">SIGN OUT</a></u></b></td>
			    </tr>  
		    </table>
	    </div>
    </header>
	<div id="div3">
	    <p id="jackpot_text">
            Welcome to <strong>Jackpot Central</strong>! Every Wednesday and Saturday, our platform transforms mundane evenings into <span class="highlight">exhilarating opportunities</span>. Jackpot Central isn't just a lottery; it's your gateway to <strong>life-changing prizes</strong>.
            <br><br>
            With a diverse global community, an intuitive website, and transparent results, Jackpot Central brings the <span class="highlight">excitement of winning</span> right to your screen. Join us and become part of the thrill as dreams come true with each draw. Whether you're tracking <strong>statistics</strong>, selecting your lucky numbers, or checking out who the latest <span class="highlight">winners</span> are, Jackpot Central offers everything you need for an unforgettable gaming experience. So why wait? Dive into the <span class="highlight">excitement</span> and discover the magic of <strong>Jackpot Central</strong> today!
        </p>
        <div id="img1">
            <img src="../slike/sleek.png" alt="place">
        </div>
	</div>
    <footer>
        <div id="top_footer"></div>	
		<div id="middle_footer">
            <div id="jackpot_text">
                <h2>Key Features</h2>
                <p><strong>Global Reach:</strong> Play alongside millions of players from over 19 countries.</p>
                <p><strong>Life-Changing Prizes:</strong> Stand a chance to win jackpots of up to €120 million.</p>
                <p><strong>Charitable Contributions:</strong> We give back to society by supporting various charitable organizations through our proceeds.</p>
                <p><strong>Easy Accessibility:</strong> Our user-friendly website makes it simple to play, check results, and engage with our community.</p>
            </div>
		</div>	
		<div id="bottom_footer">
            <p>Contact Us: <a href="mailto:ken.turk@scv.si">ken.turk@scv.si</a>
            Phone: +386 070 737 282
            <a href="rules.php">Rules</a> | <a href="privacy.php">Privacy Policy</a> | <a href="terms_and_servis.php">Terms of Service</a>
            &copy; 2024 JackpotCentral. All rights reserved.</p>
		</div>
    </footer>
</body>
</html>
