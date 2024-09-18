<?php
    include_once 'seja.php';
    require_once 'database.php';

    if (!isset($_SESSION['log'])) {
        header("Location: login.php");
        exit; 
    }else{
        echo $_SESSION['log'];
    }
    
    if(isset($_POST['delete'])){
        $winning_numbers_id = $_POST['winning_numbers_id'];

        $sql = "DELETE FROM winning_numbers WHERE id = $winning_numbers_id";
        if (mysqli_query($link, $sql)) {
            echo "Delete successful<br><br>";
        } else {
            echo "Delete failed<br><br>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winning numbers</title>
    <link rel="stylesheet" href="../CSS/winning_numbers2.css">
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
    				            <td><a href="" id="num3">Edit winning numbers</a></td>
				                <td><a href="about_admin.php" id="links">About</a></td>
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
            <div id="existing_numbers">
                <h2>Existing Winning Numbers</h2>
                <ul id="d">
                    <?php
                       if ($link) {
                            $sql = "SELECT * FROM winning_numbers";
                            $result = mysqli_query($link, $sql);
    
                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<li id='a'>";
                                    echo "Ticket Numbers: " . ($row['numbers']) . " - Draw Date: " . ($row['draw_date']);
                                    echo "<form action='' method='post'>";
                                    echo "<input type='hidden' name='winning_numbers_id' value='" . ($row['id']) . "'>";
                                    echo "<input type='submit' name='delete' value='Delete'>";
                                    echo "</form>";
                                    echo "</li>";
                                }
                            }
                       }
                    ?>
                </ul>
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
