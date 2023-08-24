<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <!-- <?php 
        //how to use variable and display it on the screen
            // $name = "Tom";
            // $age = 70;
            // echo "There once was a man named $name. <br>";
            // echo "He was $age years old.<br>";
            // $name = "John";
            // echo "He really liked the name $name.<br>";
            // echo "But didn't like being $age.<br>";


        // various type of data type:
            // $phrase = "To be or not to be";
            // $age = 30/9;
            // $gpa = 30.987;
            // $isRich = false;
            // echo "Hello $phrase $age $gpa $isRich";


        // working with string
            // $phrase = "Hello World!!";
            // echo strtoupper($phrase); //HELLO WORLD!!
            // echo strlen($phrase); //13
            // echo strtolower($phrase); //hello world!!
            // $phrase[0] = "h";
            // echo $phrase; // return the index element in $phrase string
            // echo str_replace("Hello",  "Hey", $phrase);
            // echo substr($phrase, 4);


        // working with numbers
            // echo abs(-10); // 10
            // echo pow(2,4); // 16
            // echo sqrt(144); // 12
            // echo min(10,13); // 10
            // echo max(10,13); // 13
            // echo ceil(3.2); // 4
            // echo floor(3.4); // 3
            // echo round(3.5) // 4

        ?> -->

        <!-- <form action="site.php" method="get">
            Name: <input type="text" name="username"><br>
            Age: <input type="number" name="age"><br>
            <input type="submit">
        </form>
        <br>
        Your name is <?php echo $_GET["username"] ?>
        <br>
        Your age is <?php echo $_GET["age"] ?> -->


        <!-- BASIC CALCULATOR -->
        <!-- <form action="site.php" method="get">
            <input type="number" name="num1">
            <br>
            <input type="number" name="num2">
            <br>
            <input type="submit">
        </form>

        Answer: <?php echo $_GET['num1'] + $_GET['num2'] ?> -->

        <!-- <form action="site.php" method="get">
            Color: <input type="text" name="color"> <br>
            Plural noun: <input type="text" name="pluralNoun"> <br>
            Celebrity: <input type="text" name="celebrity"> <br>
            <input type="submit">
        </form>
        <br><br>
        <?php 
            $color = $_GET["color"];
            $pluralNoun = $_GET["pluralNoun"];
            $celebrity = $_GET["celebrity"];
            echo "Roses are $color <br>";
            echo "$pluralNoun are blue <br>";
            echo "I love $celebrity <br>";
        ?> -->
        

        <!-- POST METHOD -->
        <!-- <form action="site.php" method="post">
            Password: <input type="password" name="password">
            <input type="submit">
        </form>
        <?php
            echo $_POST["password"];
        ?> -->
        

        <!--Arrays-->
        <!-- <?php 
            $friends = array("Pulkit","Manish","Anshul","Pankaj");
            $friends[7] = "Mike";
            echo count($friends);
        ?> -->


        <!-- How to use check boxes -->
        <!-- <form action="site.php" method="post">
            Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
            Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
            Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
            <input type="submit">
        </form>
        <?php 
            $fruits = $_POST["fruits"];
            echo $fruits[1];
        ?> -->
        <!-- <form action="site.php" method="post">
            <input type="text" name="student">
            <input type="submit">
        </form>

        <!-- ASSOCIATIVE ARRAY -->
        <!--<?php 
            $grade = array("Jim"=>"A+","Pam"=>"B-","Oscar"=>"C+");
            // $grade["Jim"] = "A";
            // echo cpunt($grade["Jim"]);
            echo $grade[$_POST["student"]];
        ?> -->


        <!--function -->
        <!-- <?php 
            // function sayHi($name, $age) {
            //     echo "Hello $name, you are $age <br>";
            // }

            // sayHi("Pulkit",12);
            // sayHi("Tom",34);
            // sayHi("Dave",76);
        ?> -->

        <!--return statement -->
        <!-- <?php 
            function cube($num) {
                return $num * $num * $num;
            }
            $cubeResult = cube(4);
            echo $cubeResult
        ?> -->

        <!-- if statement -->
        <!-- <?php 
            $isMale = true;
            $isTall = true;
            if($isMale  && $isTall) {
                echo "You are tall male";
            } else {
                echo "You are not male";
            }
        ?> -->

        <!-- <?php 
            function getMax($num1, $num2) {
                if($num1 > $num2) {
                    return $num1;
                } else {
                    return $num2;
                }
            }

            echo getMax(12,13);
        ?> -->

        <!--better calculater -->
        <!-- <form action="site.php" method="post">
            first num: <input type="number" step="0.1" name="num1"><br>
            operater: <input type="text" name="op"><br>
            second num: <input type="number" name="num2"><br>
            <input type="submit">
        </form>

        <?php 
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $op = $_POST["op"];

            if($op == "+") {
                echo $num1 + $num2;
            } elseif($op == "-") {
                echo $num1 - $num2;
            } elseif($op == "*") {
                echo $num1 * $num2;
            } elseif($op == "/") {
                echo $num1 / $num2;
            } else {
                echo "Invalid Operater $op";
            }
        ?> -->

        <!-- <form action="site.php" method="post">
            What was your grade? <br>
            <input type="text" name="grade"><br>
            <input type="submit">
        </form>
        

        <?php 
            $grade = $_POST["grade"];
            switch($grade) {
                case "A":
                    echo "You did amazing!";
                    break;
                case "B":
                    echo "You did pretty good!";
                    break;
                case "C":
                    echo "You did poorly";
                    break;
                case "D":
                    echo "You did very Bad";
                    break;
                case "F":
                    echo "You failed";
                    break;
                default:
                    echo "Invalid grade";
                    break;
            }
        ?> -->

        <!-- while Loop -->
        <!-- <?php 
            $index = 1;
            while($index <= 5) {
                echo "$index <br>";
                $index++;
            }
        ?> -->

        <!--Do while loop -->
        <!-- <?php 
            $index = 6;
            do {
                echo "$index <br>";
                $index++;
            }while($index <= 5) 
        ?> -->

        <!-- For Loop -->
        <!-- <?php 
            $luckyNumbers = array(4,8,14,16,23,42);
            for($i = 0; $i < count($luckyNumbers); $i++) {
                echo "$luckyNumbers[$i]<br>";
            }
        ?> -->
    	
        <!-- include Html page -->
        <!-- <?php include "header.html";?>
        <h1>Hello World</h1>
        <?php include "footer.html";?> -->
        


        <!-- Include php page -->
        <!-- <?php 
            // $title = "My First Post";
            // $author = "Pulkit";
            // $wordCount = 400;
            // include "article-header.php";
        ?> -->

        <!-- <?php 
            // include "usefulTool.php";
            // echo $feetInMile;
            // sayHi("Pulkit");
        ?> -->

        <!-- Classes and Objects -->
        <!-- <?php 
            // class Student{
            //     var $name;
            //     var $major;
            //     var $gpa;
                   // constructor
            //     function __construct($name, $major, $gpa) {
            //         $this->name = $name;
            //         $this->major = $major;
            //         $this->gpa = $gpa;
            //     }

            //     function hasHonors() {
            //         if($this->gpa >= 3.5) {
            //             return "true";
            //         }
            //         return "false";
            //     }
            // }

            // $student1 = new Student("Pulkit","CSE",9.2);
            // $student2 = new Student("Tushar","pharma",2.8);
            // echo  $student1->hasHonors();
            // echo  $student2->hasHonors();
        ?> -->

        <!-- object function-->

        <!-- <?php
            // class Movie {
            //     public $title;
            //     private $rating;

            //     function __construct($title,$rating) {
            //         $this->title = $title;
            //         $this->setRating($rating);
            //     }
            //     function getRating() {
            //         return $this->rating;
            //     }

            //     function setRating($rating) {
            //         if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
            //             $this->rating = $rating;
            //         } else {
            //             $this->rating = "NR";
            //         }
            //     }
            // }

            

            // $avengers = new Movie("Avengers", "DOG");
            // echo $avengers->getRating();
        ?> -->

        <?php 
            class Chef {
                function makeChicken() {
                    echo "The chef makes chicken <br>";
                }
                function makeSalad() {
                    echo "The chef makes salad <br>";
                }
                function makeSpecialDish() {
                    echo "The chef makes bbq ribs <br>";
                }
            }

            class ItalianChef extends Chef{
                function makepasta() {
                   echo "The chef makes pasta";
                }
                function makeSpecialDish() {
                    echo "The chef makes Chicken Parm <br>";
                }
            }

            $chef = new Chef;
            $chef->makeSpecialDish();
            $italianChef = new italianChef;
            $italianChef->makeSpecialDish();
        ?>

    </body>
</html>