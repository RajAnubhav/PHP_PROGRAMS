<!-- Write a short of whether a driver is able to drive or not -->
<?php


    
    echo $_SERVER['REQUEST_METHOD'];
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $dob = $_POST['dob'];
        $reset = $_POST['reset'];
        echo $reset;
        echo "Welcome ".($name);
        echo "<br> Your age is ".($age);
        echo "<br> Your address is: ".($address);
        echo "<br> Congo! Your dob is ".($dob);

        // header('Location:/tutorial_php/tut6.php ');
        // if(isset($_POST['reset'])){
        //     header('Location:/tutorial_php/tut6.php ')
        // }
    }
    // if(isset($_POST['reset'])){
    //     $reset = $_POST['reset'];
    //     // $reset=true;
    //     echo $reset;
    // }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sundari.com</title>
    <style>
        body{
            background-color: rgba(216, 0, 0, 0.438);
        }
        .details{
            text-align: center ;
        }
    </style>
</head>
<body>
    <div class="details">
        <h1>Welcome to the sundari.com</h1>
        <form action="/tutorial_php/tut6.php" method="post">
            <h3>Enter your name : </h3>
            <input type="text" placeholder="Enter your name" name="name">
            <br>
            <h3>Enter the age : </h3>
            <input type="text" placeholder="Enter your age" name="age">
            <br>
            <h3>Enter your address : </h3>
            <input type="text" placeholder="Enter your address" name="address">
            <br>
            <h3>Enter your D.O.B : </h3>
            <input type="date" name="dob" id="dob">
            <button onclick="func1()" type="submit">submit</button>
            <button onclick="funct2()" id="func2" type="reset" name="reset">reset</button>
        </form>
    </div>
    <script>
        func1(){
            var x = document.getElementById("func2");
            if(x.innerHTML === "Hello"){
                x.innerHTML = "Swapped text!";
            }else {
                x.innerHTML = "Hello";
            }
        }
    </script>
</body>
</html>