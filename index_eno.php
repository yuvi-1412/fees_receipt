
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>'
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>

</head>

<body><?php
error_reporting(0);

    session_start(); 
    $mode = 1;
    $_SESSION['mode'] = $mode;
    ?>
    
    
        <!-- include ("phpSearch.php"); -->
    
    <section class="navbar">
        <!-- <div class="first">
            <img src="mponline_logo.png">
        </div> -->
        <div class="second">
            <img src="davv.png">
        </div>
    </section>
    <section class="main">
       
        <div>
            <h1>Fees Admin Panel</h1>
        </div>
        <form action="phpSearch.php" method="post">
            <div class="element">
                <label for="e_no">Enter Enrollment number:</label><br>
                
                <input type="text" name="e_no" id="e_no">
                
            </div>
            
            



        <div><button class="btn btn-primary" type="submit" name="Report" >Run Report</button></div>

    </form> 
    </section>
    </form>
</body>

</html>
