<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
                // $name = "zoha"; //String
                // echo $name;
                // $age = 25; // Integer
                // $price = 19.99; // Float
                // $is_valid = true; // Boolean
                // $firstName = "Zoha";
                // $_lastName = "Tazmen";
                // $age_1 = 21;
                // $globalVar = 10; // Global variable
                
                // function myFunction()
                // {
                //     global $globalVar; // Declare $globalVar as global within the function
                //     $localVar = 20; // Local variable
                //     echo $globalVar; // Accessing global variable within function
                // }
                
                // myFunction(); // Call the function to see the output
                // $name = "Zoha";
                // echo "Hello, {$name}!"; // Output: Hello, Zoha!
                // $name = "Alice";
                // echo "Hello, " . $name . "!"; // Output: Hello, Alice!
                
                // $age = 30;
                // print "Age: " . $age; // Output: Age: 30
                // // Integer
                // $age = 30;
                
                // // Float
                // $price = 19.99;
                
                // // String
                // $name = "John";
                
                // // Boolean
                // $is_valid = true;
                
                // // Array
                // $colors = array("red", "green", "blue");
                
                // // Object
                // class Person
                // {
                //     public $name;
                //     public $age;
                // }
                
                // $person = new Person();
                // $person->name = "Alice";
                // $person->age = 25;
                
                // // NULL
                // $data = NULL;
                
                // // Resource
                // $file_handle = fopen("example.txt", "r");
                

                // // Define a string
                // $string = "Hello, world!";
                
                // // Modify Strings
                // $uppercase = strtoupper($string); // Convert to uppercase
                // $lowercase = strtolower($string); // Convert to lowercase
                // $trimmed = trim($string); // Remove whitespace from the beginning and end of the string
                
                // // Concatenating Strings
                // $greeting = "Hello";
                // $name = "Alice";
                // $full_greeting = $greeting . ", " . $name . "!"; // Concatenate using the dot operator
                
                // // Slicing Strings
                // $substring = substr($string, 7); // Extract substring from index 7 to the end
                // $substring_length = substr($string, 7, 5); // Extract substring from index 7 with length 5
                
                // // Escape Characters
                // $escaped_string = "This is a \"quoted\" string."; // Include double quotes within the string
                // $escaped_newline = "First line<br>Second line"; // Include a newline character
                // $escaped_tab = "Item\tPrice"; // Include a tab character
                
                // // Output
                // echo "Original String: $string<br>";
                // echo "Uppercase: $uppercase<br>";
                // echo "Lowercase: $lowercase<br>";
                // echo "Trimmed: '$trimmed'<br>";
                // echo "Concatenated String: $full_greeting<br>";
                // echo "Substring: $substring<br>";
                // echo "Substring with Length: $substring_length<br>";
                // echo "Escaped String: $escaped_string<br>";
                // echo "Escaped Newline: $escaped_newline<br>";
                // echo "Escaped Tab: $escaped_tab<br>";
                

                // // Integers
                // $integer = 123;
                
                // // Floating-point Numbers
                // $float = 3.14;
                
                // // Scientific Notation
                // $scientific_notation = 6.02e23; // Avogadro's number (6.02 x 10^23)
                
                // // Numeric Operations
                // $addition_result = 10 + 5; // Addition
                // $subtraction_result = 10 - 5; // Subtraction
                // $multiplication_result = 10 * 5; // Multiplication
                // $division_result = 10 / 5; // Division
                // $modulus_result = 10 % 5; // Modulus (remainder of division)
                
                // // Type Juggling
                // $type_juggling_result = 10 + 3.14; // Result will be a float (13.14)
                
                // // Explicit Type Conversion
                // $converted_integer = intval("123"); // Convert string to integer
                
                // // Output
                // echo "Integer: $integer<br>";
                // echo "Float: $float<br>";
                // echo "Scientific Notation: $scientific_notation<br>";
                // echo "Addition Result: $addition_result<br>";
                // echo "Subtraction Result: $subtraction_result<br>";
                // echo "Multiplication Result: $multiplication_result<br>";
                // echo "Division Result: $division_result<br>";
                // echo "Modulus Result: $modulus_result<br>";
                // echo "Type Juggling Result: $type_juggling_result<br>";
                // echo "Explicit Type Conversion Result: $converted_integer<br>";
                


                // $value = "123"; // String
                
                // // Casting to different data types
                // $string_value = (string) $value; // Cast to string
                // $integer_value = (int) $value;   // Cast to integer
                // $float_value = (float) $value;   // Cast to float
                // $bool_value = (bool) $value;     // Cast to boolean
                // $array_value = (array) $value;   // Cast to array
                // $object_value = (object) $value; // Cast to object
                // $unset_value = NULL;             // Assign NULL to variable
                
                // // Output
                // echo "Original Value: $value<br>";
                // echo "String Value: $string_value<br>";
                // echo "Integer Value: $integer_value<br>";
                // echo "Float Value: $float_value<br>";
                // echo "Boolean Value: " . ($bool_value ? 'true' : 'false') . "<br>";
                // echo "Array Value: ";
                // print_r($array_value); // Print array value
                // echo "<br>";
                // echo "Object Value: ";
                // print_r($object_value); // Print object value
                // echo "<br>";
                // echo "Unset Value: $unset_value<br>";
                


                // // pi() Function
                // $pi_value = pi(); // Value of pi (π)
                // echo "Value of pi: $pi_value<br>";

                // // min() and max() Functions
                // $min_value = min(5, 10, 15); // Returns the minimum value (5)
                // $max_value = max(5, 10, 15); // Returns the maximum value (15)
                // echo "Minimum value: $min_value<br>";
                // echo "Maximum value: $max_value<br>";

                // // abs() Function
                // $absolute_value = abs(-10); // Returns the absolute value (10)
                // echo "Absolute value: $absolute_value<br>";

                // // sqrt() Function
                // $square_root = sqrt(16); // Returns the square root (4)
                // echo "Square root: $square_root<br>";

                // // round() Function
                // $rounded_value = round(3.6); // Rounds to the nearest integer (4)
                // echo "Rounded value: $rounded_value<br>";

                // // Random Numbers
                // $random_number = rand(1, 100); // Generates a random number between 1 and 100
                // echo "Random number: $random_number<br>";


            // // Define constants
            // define("SITE_NAME", "My Website");
            // const DB_HOST = "localhost";
            // const DB_USER = "username";
            // const DB_PASS = "password";

            // // Output constants
            // echo "Site Name: " . SITE_NAME . "<br>";
            // echo "Database Host: " . DB_HOST . "<br>";
            // echo "Database User: " . DB_USER . "<br>";
            // echo "Database Password: " . DB_PASS . "<br>";
            // 1. if Statement
            // $age = 20;
            // if ($age >= 18) {
            //     echo "You are an adult.<br>";
            // }

            // // 2. Shorthand if
            // $age = 20;
            // echo ($age >= 18) ? "You are an adult.<br>" : "You are a minor.<br>";

            // // 3. Nested if
            // $age = 20;
            // $citizen = true;
            // if ($age >= 18) {
            //     if ($citizen) {
            //         echo "You are eligible to vote.<br>";
            //     } else {
            //         echo "You are not a citizen.<br>";
            //     }
            // } else {
            //     echo "You are too young to vote.<br>";
            // }

            // // 4. if-else Statement
            // $age = 20;
            // if ($age >= 18) {
            //     echo "You are an adult.<br>";
            // } else {
            //     echo "You are a minor.<br>";
            // }

            // // 5. if-elseif-else Statement
            // $grade = 80;
            // if ($grade >= 90) {
            //     echo "Excellent!<br>";
            // } elseif ($grade >= 80) {
            //     echo "Good job!<br>";
            // } elseif ($grade >= 70) {
            //     echo "Satisfactory.<br>";
            // } else {
            //     echo "Needs improvement.<br>";
            // }
            // $grade = 'B';

            // switch ($grade) {
            //     case 'A':
            //         echo "Excellent!";
            //         break;
            //     case 'B':
            //         echo "Good job!";
            //         break;
            //     case 'C':
            //         echo "Satisfactory.";
            //         break;
            //     default:
            //         echo "Needs improvement.";
            // }

            // // 1. while Loop
            // $i = 1;
            // while ($i <= 5) {
            //     echo "While loop - The number is: $i<br>";
            //     $i++;
            // }

            // // 2. do-while Loop
            // $i = 1;
            // do {
            //     echo "Do-while loop - The number is: $i<br>";
            //     $i++;
            // } while ($i <= 5);

            // // 3. for Loop
            // for ($i = 1; $i <= 5; $i++) {
            //     echo "For loop - The number is: $i<br>";
            // }

            // // 4. foreach Loop
            // $colors = array("Red", "Green", "Blue");
            // foreach ($colors as $color) {
            //     echo "Foreach loop - Color: $color<br>";
            // }

            // // 5. break Statement
            // for ($i = 0; $i <= 10; $i++) {
            //     if ($i == 5) {
            //         break;
            //     }
            //     echo "Break loop - $i<br>";
            // }

            // // 6. continue Statement
            // for ($i = 1; $i <= 5; $i++) {
            //     if ($i == 3) {
            //         continue;
            //     }
            //     echo "Continue loop - The number is: $i<br>";
            // }
            // User Defined Function
            // function myMessage() {
            //     echo "Hello world!";
            //   }
            
            //   // Calling a Function
            //   myMessage();
            
            //   // Function with Arguments
            //   function familyName($fname, $year) {
            //     echo "$fname Refsnes. Born in $year <br>";
            //   }
            
            //   familyName("Hege", "1975");
            
            //   // Function with Default Argument Value
            //   function setHeight($minheight = 50) {
            //     echo "The height is : $minheight <br>";
            //   }
            
            //   setHeight(350);
            //   setHeight(); // will use the default value of 50
            
            //   // Function Returning Values
            //   function sum($x, $y) {
            //     $z = $x + $y;
            //     return $z;
            //   }
            
            //   echo "5 + 10 = " . sum(5, 10) . "<br>";
            
            //   // Passing Arguments by Reference
            //   function add_five(&$value) {
            //     $value += 5;
            //   }
            
            //   $num = 2;
            //   add_five($num);
            //   echo $num;
            
            //   // Variable Number of Arguments
            //   function sumMyNumbers(...$x) {
            //     $n = 0;
            //     $len = count($x);
            //     for($i = 0; $i < $len; $i++) {
            //       $n += $x[$i];
            //     }
            //     return $n;
            //   }
            
            //   $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
            //   echo $a;
            
            //   // Loosely Typed Language Example
            //   function addNumbers(int $a, int $b) {
            //     return $a + $b;
            //   }
            //   echo addNumbers(5, "5 days");
            
            //   // Strict Types Example
            //   //declare(strict_types=1);
            
            //   function addNumbersStrict(int $a, int $b) {
            //     return $a + $b;
            //   }
            //   //echo addNumbersStrict(5, "5 days"); // Fatal Error due to strict types
            
            //   // Return Type Declarations Example
            //   function addNumbersReturnType(float $a, float $b) : float {
            //     return $a + $b;
            //   }
            //   echo addNumbersReturnType(1.2, 5.2);


            // // Indexed Array
            // $indexedArray = array("apple", "banana", "orange");

            // // Accessing Array Items
            // echo "First item: " . $indexedArray[0]; // Outputs: apple

            // // Updating Array Items
            // $indexedArray[1] = "grape"; // Replaces 'banana' with 'grape'

            // // Adding Array Items
            // $indexedArray[] = "melon"; // Adds 'melon' to the end of the array

            // // Removing Array Items
            // unset($indexedArray[2]); // Removes 'orange' from the array

            // // Associative Array
            // $assocArray = array("name" => "John", "age" => 30, "city" => "New York");

            // // Accessing Associative Array Items
            // echo "Name: " . $assocArray["name"]; // Outputs: John

            // // Updating Associative Array Items
            // $assocArray["age"] = 35; // Updates John's age to 35

            // // Adding Associative Array Items
            // $assocArray["gender"] = "Male"; // Adds 'gender' key with value 'Male'

            // // Removing Associative Array Items
            // unset($assocArray["city"]); // Removes 'city' key from the array

            // // Sorting Arrays
            // sort($indexedArray); // Sorts the indexed array alphabetically
            // ksort($assocArray); // Sorts the associative array by keys

            // // Multidimensional Array
            // $multiArray = array(
            //     array("apple", "banana", "orange"),
            //     array("carrot", "potato", "lettuce"),
            //     array("blue", "red", "green")
            // );

            // // Accessing Multidimensional Array Items
            // echo $multiArray[0][1]; // Outputs: banana

            // // Array Functions
            // $arrayLength = count($indexedArray); // Gets the length of the indexed array
            // $lastItem = end($indexedArray); // Gets the last item of the indexed array

            // // Print Arrays
            // print_r($indexedArray); // Outputs the contents of the indexed array
            // print_r($assocArray); // Outputs the contents of the associative array
            // print_r($multiArray); // Outputs the contents of the multidimensional array



        //    // $GLOBALS
        //     $global_var = 10;

        //     function test_global() {
        //         global $global_var;
        //         echo "Global variable value: " . $global_var . "<br>";
        //     }

        //     test_global();

        //     // $_SERVER
        //     echo "Server name: " . ($_SERVER['SERVER_NAME'] ?? '') . "<br>";
        //     echo "Request method: " . ($_SERVER['REQUEST_METHOD'] ?? '') . "<br>";

        //     // $_REQUEST
        //     if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_REQUEST['username'])) {
        //         echo "POST variable 'username': " . $_REQUEST['username'] . "<br>";
        //     }

        //     // $_POST
        //     if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['password'])) {
        //         echo "POST variable 'password': " . $_POST['password'] . "<br>";
        //     }

        //     // $_GET
        //     echo "GET variable 'id': " . ($_GET['id'] ?? '') . "<br>";

        //     // $_FILES
        //     if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
        //         if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
        //             move_uploaded_file($_FILES['file']['tmp_name'], "/uploads/" . $_FILES['file']['name']);
        //         }
        //     }

        //     // $_ENV
        //     echo "Environment variable 'PATH': " . ($_ENV['PATH'] ?? '') . "<br>";

        //     // $_COOKIE
        //     echo "Cookie 'user': " . ($_COOKIE['user'] ?? '') . "<br>";

        //     // $_SESSION
        //     session_start();
        //     $_SESSION['username'] = "john_doe";
        //     echo "Session variable 'username': " . ($_SESSION['username'] ?? '') . "<br>";
      // Using preg_match()
                // $pattern = '/apple/';
                // $string = 'I like apples';
                // if (preg_match($pattern, $string)) {
                //     echo 'Match found!' . PHP_EOL;
                // } else {
                //     echo 'No match found.' . PHP_EOL;
                // }

                // // Using preg_replace()
                // $pattern = '/apple/';
                // $string = 'I like apples';
                // $replacement = 'oranges';
                // $new_string = preg_replace($pattern, $replacement, $string);
                // echo $new_string . PHP_EOL; // Outputs: I like oranges

                // // Using preg_split()
                // $pattern = '/\s+/'; // Split by whitespace
                // $string = 'apple orange banana';
                // $array = preg_split($pattern, $string);
                // print_r($array); // Outputs: Array ( [0] => apple [1] => orange [2] => banana )

                // // Regular expression pattern
                // $pattern = '/\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Z|a-z]{2,}\b/';
                // $string = 'Emails: john@example.com, jane.doe@example.co.uk';
                // preg_match_all($pattern, $string, $matches);
                // print_r($matches[0]); // Outputs: Array ( [0] => john@example.com [1] => jane.doe@example.co.uk )

                // Current Date and Time
// $current_date_time = date("Y-m-d H:i:s");
// echo "Current date and time: " . $current_date_time . "\n";

// // Creating a DateTime Object
// $date_time = new DateTime("2022-12-31 23:59:59");
// echo "Specified date and time: " . $date_time->format("Y-m-d H:i:s") . "\n";

// // Formatting Dates
// $formatted_date = $date_time->format("l, F j, Y");
// echo "Formatted date: " . $formatted_date . "\n";

// // Date Arithmetic
// $date_time->modify("+1 day");
// echo "Date after adding one day: " . $date_time->format("Y-m-d H:i:s") . "\n";

// // Timezones
// $date_time->setTimezone(new DateTimeZone("America/New_York"));
// echo "Date and time in New York timezone: " . $date_time->format("Y-m-d H:i:s") . "\n";

// // Date Comparison
// $today = new DateTime();
// $future_date = new DateTime("2023-01-01");
// if ($today < $future_date) {
//     echo "Future date is after today." . "\n";
// }

// // Timestamps
// $timestamp = $date_time->getTimestamp();
// echo "Timestamp: " . $timestamp . "\n";

// // Working with Time Intervals
// $interval = new DateInterval("P1W"); // 1 week interval
// $date_time->add($interval);
// echo "Date after adding 1 week: " . $date_time->format("Y-m-d H:i:s") . "\n";

            // Opening a File for Reading
            $file = fopen("example.txt", "r");

            // Reading from a File using fgets()
            echo "Reading from file using fgets():<br>";
            while(!feof($file)) {
                echo fgets($file) . "<br>";
            }
            echo "<br>";

            // Rewinding the File Pointer
            rewind($file);

            // Reading from a File using fread()
            echo "Reading from file using fread():<br>";
            echo fread($file, filesize("example.txt")) . "<br>";
            echo "<br>";

            // Rewinding the File Pointer
            rewind($file);

            // Reading from a File using file_get_contents()
            echo "Reading from file using file_get_contents():<br>";
            $content = file_get_contents("example.txt");
            echo $content . "<br>";
            echo "<br>";

            // Closing the File
            fclose($file);

            // Writing to a File
            $file = fopen("example.txt", "w");
            fwrite($file, "Hello, World!");
            fclose($file);

            // Checking File Existence
            if (file_exists("example.txt")) {
                echo "File exists.<br>";
            } else {
                echo "File does not exist.<br>";
            }

            // Deleting a File
            unlink("example.txt");

            // Checking File Existence after deletion
            if (file_exists("example.txt")) {
                echo "File exists.<br>";
            } else {
                echo "File does not exist.<br>";
            }


    ?> 
</body>

</html>