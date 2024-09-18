<?php
    include_once 'seja.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jackpot Central</title>
    <link rel="stylesheet" href="../CSS/index3.css">
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
				                <td><a href="about_admin.php" id="links">About</a></td>
				            </tr>
				        </table>
				    </td>
				    <td><b><u><a href="odjava.php" id="logout">SIGN OUT</a></u></b></td>
			    </tr>  
		    </table>
	    </div>
    </header>
    <div id="pic1">
        <video autoplay muted loop>
        <source src="../slike/gif.mp4" type="video/mp4">
        </video>
        <div id="box">
            <h1 id="text2">Welcome</h1>
            <h1 id="text1">to</h1>
            <h1 id="text2">Jackpot Central</h1>
            <h1 id="text1">where your dreams come true!</h1>
        </div>
    </div>
	<div id="black_line"></div>
	<div id="middle_footer">
        <div id="jackpot_text">
            <h2>Jackpot Central</h2>
            <p>Your premier online platform for participating in one of <span class="highlight">Europe's biggest lotteries</span>! Here, you can <strong>purchase lottery tickets</strong>, select your numbers, and <strong>check results</strong> all in one convenient location. Every week, you have the chance to <span class="highlight">win massive prizes</span> and transform your life.<br>Come join our community and start your journey towards extraordinary winnings.<a href="login.php" id="links2"> Log in </a>now!</p>
            <br>
            <h3><span class="highlight">Promotions and Special Offers</span></h3>
            <p>Check out our latest promotions and special offers to make your lottery experience even more rewarding!</p>
            <ul id="ul2">
                <li><strong>Get a free ticket with every purchase of 5 tickets or more!</strong></li>
                <li><strong>Exclusive discounts for new members signing up this month!</strong></li>
                <li><strong>Join our loyalty program and earn points for every ticket purchased.</strong></li>
                <li><strong>Stay tuned for seasonal promotions and jackpot boosts!</strong></li>
            </ul>
        </div>
    </div>
    <footer>
		<div id="bottom_footer">
            <p>Contact Us: <a href="mailto:ken.turk@scv.si">ken.turk@scv.si</a>
            Phone: +386 070 737 282
            <a href="rules.php">Rules</a> | <a href="privacy.php">Privacy Policy</a> | <a href="terms_and_servis.php">Terms of Service</a>
            &copy; 2024 JackpotCentral. All rights reserved.</p>
		</div>
    </footer>
</body>
</html>
