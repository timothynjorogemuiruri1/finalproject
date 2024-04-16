<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types</title>

    <style>
        .greeting{
            color: blue;
            font-size: 17px;
            text-transform: none;
        }
    </style>
</head>
<body>
    <h1>Data Types</h1>

    <?php
    $birthYear = 2003; //My Birth Year (Integer)
    $currentYear = date("Y"); // Current Year (Integer)
    $name = NULL; 
    $height = 5.2; // My Height (Float)
    $age = $currentYear - $birthYear; // Calculation of My Current Age (Integer)
    $hobbies = [" Reading", " Coding", " Sleeping", " Eating", " Gaming "]; // Array
    $age_above_30 = $age>30; // Setting the Age above 30 to True (Boolean)
    $greeting = "Hello, My name is $name and I am $age  years old. My height is $height meters."; // Statement (String)

    echo "<p class='greeting'>$greeting</p>"; // Output
    echo "<p>My Hobbies are: ";
    echo implode(",", $hobbies); // We use implode function to Display individual item from the Array
    echo"</p>";



    if($age_above_30){
        echo "<p>This person is over 30 years old, thus exempt them</p>"; // If the condition is true
    } else{
        echo "<p>This is person is qualified</p>"; // If the condition is false
    }
    ?>
</body>
</html>