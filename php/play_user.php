<?php
include_once 'seja.php';
require_once 'database.php';
ini_set('display_errors', '1');
error_reporting(E_ALL);

if (!isset($_SESSION['log'])) {
    header("Location: login.php");
    exit; 
}

if(isset($_POST['send'])){
    $s = $_POST['stevila'];
    $d = $_POST['datum'];
    $user_id = $_SESSION['user_id'];

    $sql = "SELECT id FROM winning_numbers WHERE draw_date >= CURDATE() ORDER BY draw_date ASC LIMIT 1";
    $result = mysqli_query($link, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $winning_numbers_id = $row['id'];

        $sql = "INSERT INTO tickets (numbers, date_purchased, ticket_date, user_id, winning_numbers_id) VALUES ('$s', NOW(), '$d', '$user_id', '$winning_numbers_id')";
        if (mysqli_query($link, $sql)) {
            echo "Insert successful<br><br>";
        } else {
            echo "Insert failed<br><br>";
        }
    } else {
        echo "Error: No upcoming draw dates available.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play</title>
    <link rel="stylesheet" href="../CSS/play.css">
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
                                <td><a href="" id="num1">Play</a></td>
                                <td><a href="statistics_user.php" id="links">Statistics</a></td>
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
    <div id="div3">
        <div id="div5">
            <div id="text">
                <p id="tt">Choose 5 main numbers from 1-50 and 2 extra numbers from 1-12. Once chosen, type them into the box. First type the 5 numbers, then the extra 2.</p>
            </div>
            <br>
            <div id="div6">
                <div id="div7">
                    <form action="" method="post">
                        <?php
                            function generateRandomNumbers() {
                                $numbers = [];
                                for ($i = 0; $i < 5; $i++) {
                                    $numbers[] = rand(1, 50);
                                }
                                for ($i = 0; $i < 2; $i++) {
                                    $numbers[] = rand(1, 12); 
                                }
                                return implode(",", $numbers);
                            }
                            
                            $randomNumbers = ""; 
                            if (isset($_POST['generate'])) {
                                $randomNumbers = generateRandomNumbers();
                            }
                        ?>  
                        <label>When you're ready, click submit!</label><br>
                        <input type="text" name="stevila" id="insert" value="<?php echo $randomNumbers; ?>" maxlength="20"><br>
                        <button type="submit" name="generate">Auto generate numbers</button>
                        <br>
                        <input type="submit" name="send" id="sub" value="Submit">
                    </form>
                </div>
                <br>
                <div>
                    <img src="../slike/numbers.png" alt="numbers">
                    <br><br>
                    <img src="../slike/numbers2.png" alt="numbers2">
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div id="bottom_footer">
            <p>Contact Us: <a href="mailto:ken.turk@scv.si">ken.turk@scv.si</a>
            Phone: +386 070 737 282
            <a href="rules.php">Rules</a> | <a href="privacy.php">Privacy Policy</a> | <a href="terms_and_servis.php">Terms of Service</a>
            &copy; 2024 JackpotCentral. All
        </div>
    </footer>
</body>
</html>