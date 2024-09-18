<?php
include_once 'seja.php';
require_once 'database.php';
ini_set('display_errors', '1');

if (!isset($_SESSION['log'])) {
    header("Location: login.php");
    exit; 
}

if(isset($_POST['send'])){
    $s = $_POST['stevila'];
    $d = $_POST['datum'];
    $a = $_POST['amount'];

    $sql = "INSERT INTO winning_numbers (numbers, time_created, draw_date, amount) VALUES ('$s', NOW(), '$d', '$a')";
    if (mysqli_query($link, $sql))
    {
        $_SESSION['winning_numbers_id'] = mysqli_insert_id($link);
        echo "Insert successful<br><br>";
    }
    else 
    {
        echo "Insert failed<br><br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play</title>
    <link rel="stylesheet" href="../CSS/play2.css">
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
                                <td><a href="" id="num1">Number selection</a></td>
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
    <div id="div3">
        <div id="div5">
            <div id="text">
                <p id="tt">Click the generate button to get the lottery numbers. Choose the date of the lottery and the amount the person recieves.</p>
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
                        <label>Numbers:</label><br>
                        <input type="text" name="stevila" id="insert" value="<?php echo $randomNumbers; ?>" maxlength="20"><br>
                        <button type="submit" name="generate">Auto generate numbers</button><br>
                        <label>Draw Date:</label><br>
                        <input type="date" name="datum" id="date"><br>
                        <label>Amount:</label><br>
                        <input type="text" name="amount" id="amount"><br><br>
                        <input type="submit" name="send" id="sub">
                    </form>
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
