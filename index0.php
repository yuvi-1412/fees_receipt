
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
    $mode = 0;
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
                <label for="e_no">Enter your Enrollment number:</label><br>
                
                <input type="text" name="e_no" id="e_no">
                
            </div>
            <div class="element">
                <label for="semester">Choose semester:</label>
                
                <select name="sem">
                    <option value="" disabled selected>Choose option</option>
                    <option value="1sem">1sem</option>
                    <option value="2sem">2sem</option>
                    <option value="3sem">3sem</option>
                    <option value="4sem">4sem</option>
                    <option value="5sem">5sem</option>
                    <option value="6sem">6sem</option>
                    <option value="7sem">7sem</option>
                    <option value="8sem">8sem</option>
                </select>
              </div>
            <!-- <div class="element">
                <label for="branch_code">Choose branch:</label><br>
                <input list="branch_code" name="branch_code" id="branch_code">
                <datalist id="branch_code">
                    <option value="CIVIENG_FT">
                    <option value="COMPENG_FT">
                    <option value="ECIENG_FT">
                    <option value="ECTELEG_FT">
                    <option value="ITENG_FT">
                    <option value="MECHENG_FT">
                </datalist>
            </div>  -->
            <div class="element">
                <label for="branch">Choose branch:</label>
                <select name="br">
                    <option value="" disabled selected>Choose branch</option>
                    <option value="COMPENG_FT">CS</option>
                    <option value="ITENG_FT">IT</option>
                    <option value="ECTELEG_FT">ETC</option>
                    <option value="ECIENG_FT">EI</option>
                    <option value="MECHENG_FT">MECH</option>
                    <option value="CIVIENG_FT">CIVIL</option>
                </select>
              </div>
            



        <div><button class="btn btn-primary" type="submit" name="Report" >Run Report</button></div>
        <!-- <div><input class="btn btn-primary" type="button" value="Input"></div> -->
        </form> 
    </section>
    </form>
</body>

</html>
