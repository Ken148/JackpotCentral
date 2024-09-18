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
    <title>Statistics</title>
    <link rel="stylesheet" href="../CSS/statistics.css">
</head>
<body>
    <header>
	    <div id="header_1">
            <table>
			    <tr>
				    <td id="main_td2"><a href="index2.php"><img src="../slike/logo.png" alt="jackpot" id="logo"></a></td>
				    <td id="main_td">
				        <table id="table2">
				            <tr>
				                <td><a href="play_user.php" id="links">Play</a></td>
    				            <td><a href="" id="num3">Statistics</a></td>
    				            <td><a href="winning_numbers_user.php" id="links">Winning numbers</a></td>
				                <td><a href="about_user.php" id="links">About</a></td>
				            </tr>
				        </table>
				    </td>
				    <td><b><u><a href="odjava.php" id="logout">SIGN OUT</a></u></b></td>
			    </tr>  
		    </table>
	    </div>
    </header>
	<div id="div3"><div>
	    <p id="tt">Understanding the odds and probabilities of winning can greatly enhance your lottery experience. Below, we break down the various prize tiers and their respective odds to help you better understand your chances of winning.</p>
	    <br><img src="../slike/stat.jpg" alt="stats" id="pic">
	</div>
	<br>
	<br>
	<div id="stat">
	   <table>
        <tr>
            <td id="td0">1st Prize (Jackpot)</td>
            <td id="td0">5 numbers + 2 EuroNumbers</td>
            <td id="td0">1 in 139,838,160</td>
            <td id="td0">0.000000715%</td>
        </tr>
        <tr>
            <td id="td0">2nd Prize</td>
            <td id="td0">5 numbers + 1 EuroNumber</td>
            <td id="td0">1 in 6,991,908</td>
            <td id="td0">0.0000143%</td>
        </tr>
        <tr>
            <td id="td0">3rd Prize</td>
            <td id="td0">5 numbers</td>
            <td id="td0">1 in 3,107,515</td>
            <td id="td0">0.0000322%</td>
        </tr>
        <tr>
            <td id="td0">4th Prize</td>
            <td id="td0">4 numbers + 2 EuroNumbers</td>
            <td id="td0">1 in 621,503</td>
            <td id="td0">0.000161%</td>
        </tr>
        <tr>
            <td id="td0">5th Prize</td>
            <td id="td0">4 numbers + 1 EuroNumber</td>
            <td id="td0">1 in 31,075</td>
            <td id="td0">0.00322%</td>
        </tr>
        <tr>
            <td id="td0">6th Prize</td>
            <td id="td0">4 numbers</td>
            <td id="td0">1 in 13,811</td>
            <td id="td0">0.00724%</td>
        </tr>
        <tr>
            <td id="td0">7th Prize</td>
            <td id="td0">3 numbers + 2 EuroNumbers</td>
            <td id="td0">1 in 14,125</td>
            <td id="td0">0.00708%</td>
        </tr>
        <tr>
            <td id="td0">8th Prize</td>
            <td id="td0">3 numbers + 1 EuroNumber</td>
            <td id="td0">1 in 706</td>
            <td id="td0">0.1416%</td>
        </tr>
        <tr>
            <td id="td0">9th Prize</td>
            <td id="td0">3 numbers</td>
            <td id="td0">1 in 314</td>
            <td id="td0">0.318%</td>
        </tr>
        <tr>
            <td id="td0">10th Prize</td>
            <td id="td0">2 numbers + 2 EuroNumbers</td>
            <td id="td0">1 in 985</td>
            <td id="td0">0.1015%</td>
        </tr>
        <tr>
            <td id="td0">11th Prize</td>
            <td id="td0">2 numbers + 1 EuroNumber</td>
            <td id="td0">1 in 49</td>
            <td id="td0">2.04%</td>
        </tr>
        <tr>
            <td id="td0">12th Prize</td>
            <td id="td0">1 number + 2 EuroNumbers</td>
            <td id="td0">1 in 188</td>
            <td id="td0">0.532%</td>
        </tr>
        <tr>
            <td id="td0">13th Prize</td>
            <td id="td0">2 numbers</td>
            <td id="td0">1 in 35</td>
            <td id="td0">2.857%</td>
        </tr>
        <tr>
            <td id="td00" colspan="2"><strong>Overall Odds</strong></td>
            <td id="td00"><strong>1 in 26</strong></td>
            <td id="td00"><strong>3.85%</strong></td>
        </tr>
    </table>
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
