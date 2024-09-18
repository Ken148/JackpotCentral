<?php
include_once 'seja.php';
require_once 'database.php';
ini_set('display_errors', '1');
error_reporting(E_ALL);

if (!isset($_SESSION['log'])) {
    header("Location: login.php");
    exit; 
}

$am = "SELECT amount FROM winning_numbers 
                        ORDER BY draw_date 
                        DESC LIMIT 1;";

$result = mysqli_query($link, $am);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $amount = $row['amount'];
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winning numbers</title>
    <link rel="stylesheet" href="../CSS/winning_numbers.css">
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
    				            <td><a href="statistics_user.php" id="links">Statistics</a></td>
    				            <td><a href="" id="num4">Winning numbers</a></td>
				                <td><a href="about_user.php" id="links">About</a></td>
				            </tr>
				        </table>
				    </td>
				    <td><b><u><a href="odjava.php" id="logout">SIGN OUT</a></u></b></td>
			    </tr>  
		    </table>
	    </div>
    </header>
	<div id="div3">
        <div id="div5">
            <br>
            <div id="div6">
                <div id="div7">
                <?php
                    $sql_winning = "SELECT * 
                                    FROM winning_numbers 
                                    ORDER BY draw_date 
                                    DESC LIMIT 1";
                    $result_winning = mysqli_query($link, $sql_winning);
                    $currentDateTime = new DateTime();
                    
                    if ($result_winning && mysqli_num_rows($result_winning) > 0) {
                        $winning_row = mysqli_fetch_assoc($result_winning);
                        $winning_numbers = $winning_row['numbers'];
                        $winning_id = $winning_row['id']; 
                        $draw_date = new DateTime($winning_row['draw_date']);         
                        $timeTillDraw = $currentDateTime->diff($draw_date);
                
                        $sql_tickets = "SELECT t.numbers 
                                        FROM tickets t 
                                        INNER JOIN users u ON t.user_id = u.id 
                                        WHERE t.winning_numbers_id = $winning_id";
                        $result_tickets = mysqli_query($link, $sql_tickets);
                
                        if ($result_tickets && mysqli_num_rows($result_tickets) > 0) {
                            $match_found = false;
                            while ($ticket = mysqli_fetch_assoc($result_tickets)) {
                                if ($ticket['numbers'] === $winning_numbers) {
                                    $match_found = true;
                                    break; 
                                }
                            }
                            if ($match_found && $currentDateTime <= $draw_date) {
                                echo "<h3>Time until draw: " . $timeTillDraw->format('%a days %h hours %i minutes') . "</h3><br>";
                                echo "<img src='../slike/noLottery.png' alt='nolottery'>";
                            } else {
                                echo "<h2>Congratulations! You have won!</h2>";
                                echo "Winning Numbers: " . $winning_numbers . "<br>";
                                echo "Amount won : $amount $ <br>";
                                echo "The prize money will be sent to you bank account in one month time.<br><br>"; 
                                echo "<img src='../slike/coins.jpg' alt='coins'>";
                            }
                        } else {
                            echo "<p>User didn't buy any tickets yet!</p>";
                        }
                    } else {
                        echo "<h2>There is no lottery at this time!</h2>";
                        echo "<img src='../slike/noLottery.png' alt='nolottery'>";
                    }
                    ?>
		        </div>
                <br>
            </div>
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
