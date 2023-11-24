<?php
// Enumerated Array
$colors = array('Red', 'Green', 'Blue');

// Associative Array
$person = array(
    'first_name' => 'John',
    'last_name' => 'Doe',
    'age' => 30
);

// Array Iteration
echo "Enumerated Array Elements:\n";
foreach ($colors as $color) {
    echo $color . "\n";
}
echo "<br>";
echo "\nAssociative Array Elements:\n";
foreach ($person as $key => $value) {
    echo $key . ": " . $value . "\n";
}

// Multi-Dimensional Array
$employees = array(
    array('first_name' => 'Alice', 'last_name' => 'Smith', 'age' => 25),
    array('first_name' => 'Bob', 'last_name' => 'Johnson', 'age' => 32),
    array('first_name' => 'Charlie', 'last_name' => 'Brown', 'age' => 28)
);
echo "<br>";
echo "\nMulti-Dimensional Array Elements:\n";
foreach ($employees as $employee) {
    echo "Name: " . $employee['first_name'] . " " . $employee['last_name'] . ", Age: " . $employee['age'] . "\n";
}

// Array Functions
echo "<br>";
echo "\nArray Functions:\n";
echo "<br>";


// Count
$numbers = array(1, 2, 3, 4, 5);
echo "Count of numbers array: " . count($numbers) . "\n";

// Sorting
$fruits = array('Apple', 'Banana', 'Orange', 'Cherry');
sort($fruits);
echo "<br>";
echo "Sorted Fruits: " . implode(', ', $fruits) . "\n";

// Pushing and Popping
$stack = array();
array_push($stack, 'Item1');
array_push($stack, 'Item2');
array_push($stack, 'Item3');
$lastItem = array_pop($stack);
echo "<br>";
echo "Popped Item: " . $lastItem . "\n";

// Searching
$names = array('Alice', 'Bob', 'Charlie', 'David');
$searchName = 'Bob';
if (in_array($searchName, $names)) {
    echo "<br>";
    echo "Found $searchName in the array.\n";
} else {
    echo "$searchName not found in the array.\n";
}
?>

<!-- Associative arrays -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Associative Arrays with print_r()</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
</head>
<body>
    <h1>Outputting Arrays with print_r()</h1>
    <?php
    $authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");
    $myBook = array(
        "title" => "The Grapes of Wrath",
        "author" => "John Steinbeck",
        "pubYear" => 1939
    );
    echo '<h2>$authors:</h2><pre>';
    print_r($authors);
    echo '</pre><h2>$myBook:</h2><pre>';
    print_r($myBook);
    echo '</pre>';
    ?>
</body>
</html>




Working with multidimensional arrays
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Looping Through a Two-Dimensional Array</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
</head>
<body>
    <h1>Looping Through a Two-Dimensional Array</h1>
    <?php
    $myBooks = array(
        array(
            "title" => "The Grapes of Wrath",
            "author" => "John Steinbeck",
            "pubYear" => 1939
        ),
        array(
            "title" => "The Trial",
            "author" => "Franz Kafka",
            "pubYear" => 1925
        ),
        array(
            "title" => "The Hobbit",
            "author" => "J. R. R. Tolkien",
            "pubYear" => 1937
        ),
        array(
            "title" => "A Tale of Two Cities",
            "author" => "Charles Dickens",
            "pubYear" => 1859
        ),
    );
    
    $bookNum = 0;
    foreach ($myBooks as $book) {
        $bookNum++;
        echo "<h2>Book #$bookNum:</h2>";
        echo "<dl>";
        foreach ($book as $key => $value) {
            echo "<dt>$key</dt><dd>$value</dd>";
        }
        echo "</dl>";
    }
    ?>
</body>
</html>

<?php
// Original array
$fruits = array('Apple', 'Banana', 'Cherry', 'Orange', 'Grapes');

// Using array_splice() to insert and remove elements
array_splice($fruits, 2, 1, array('Mango', 'Pineapple')); // Replace 'Cherry' with 'Mango' and 'Pineapple'

// Using array_unshift() to add elements to the beginning
array_unshift($fruits, 'Strawberry', 'Kiwi');

// Using array_shift() to remove the first element
$firstFruit = array_shift($fruits);

// Using array_push() to add elements to the end
array_push($fruits, 'Peach', 'Lemon');

// Using array_pop() to remove the last element
$lastFruit = array_pop($fruits);

// Display the modified array and removed elements
echo "Modified Array:\n";
print_r($fruits);
echo "<br>";
echo "Removed First Element: $firstFruit\n";
echo "<br>";
echo "Removed Last Element: $lastFruit\n";
?>

<?php
// Enumerated Array
$fruits = array('Apple', 'Banana', 'Cherry', 'Orange', 'Grapes');

// Associative Array
$student = array(
    'first_name' => 'John',
    'last_name' => 'Doe',
    'age' => 20,
    'courses' => array('Math', 'History', 'English')
);

// Array Iteration
echo "<br>";
echo "Enumerated Array Elements:\n";

foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}
echo "<br>";
echo "\nAssociative Array Elements:\n";
foreach ($student as $key => $value) {
    if (is_array($value)) {
        echo $key . ": " . implode(', ', $value) . "\n";
    } else {
        echo $key . ": " . $value . "\n";
    }
}

// Multi-Dimensional Array
$employees = array(
    array('first_name' => 'Alice', 'last_name' => 'Smith', 'age' => 25),
    array('first_name' => 'Bob', 'last_name' => 'Johnson', 'age' => 32),
    array('first_name' => 'Charlie', 'last_name' => 'Brown', 'age' => 28)
);
echo "<br>";
echo "\nMulti-Dimensional Array Elements:\n";
foreach ($employees as $employee) {
    echo "Name: " . $employee['first_name'] . " " . $employee['last_name'] . ", Age: " . $employee['age'] . "\n";
}

// Array Functions
echo "<br>";
echo "\nArray Functions:\n";

// Count
echo "<br>";
echo "Count of fruits array: " . count($fruits) . "\n";

// Sorting
rsort($fruits);
echo "<br>";
echo "Reverse Sorted Fruits: " . implode(', ', $fruits) . "\n";

// Pushing and Popping
$stack = array();
array_push($stack, 'Item1');
array_push($stack, 'Item2');
array_push($stack, 'Item3');
$lastItem = array_pop($stack);
echo "<br>";
echo "Popped Item: " . $lastItem . "\n";

// Searching
$searchName = 'Alice';
if (in_array($searchName, array_column($employees, 'first_name'))) {
    echo "<br>";
    echo "Found $searchName in the employees list.\n";
} else {
    echo "$searchName not found in the employees list.\n";
}

// Merging Arrays
$firstArray = array('a' => 1, 'b' => 2, 'c' => 3);
$secondArray = array('d' => 4, 'e' => 5);
$mergedArray = array_merge($firstArray, $secondArray);
print_r($mergedArray);

?>
