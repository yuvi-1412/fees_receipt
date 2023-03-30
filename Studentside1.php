<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>'
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>

<body>
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
            <h1>Fee Submisison Details </h1>
        </div>
        <div class="form">
            <div class="element">
                <label for="enrollment_number">Enter your Enrollment number:</label><br>
                <input type="text" name="enrollment_number" id="enrollment">
            </div>
            <div class="element">
                <label for="semester">Choose semester:</label><br>
                <input list="semesters" name="semester" id="semester">
                <datalist id="semesters">
                    <option value="1sem">
                    <option value="2sem">
                    <option value="3sem">
                    <option value="4sem">
                    <option value="5sem">
                    <option value="6sem">
                    <option value="7sem">
                    <option value="8sem">
                </datalist>
            </div>

        </div>
        <div class="input-div">
            <!-- <button href="Studentside.php"  type="submit">Submit</button> -->
            <a href="Studentside.php"> <button>Submit Button</button> </a>

        </div>
    </section>
</body>

</html>