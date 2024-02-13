<!-- Write a PHP program to enter marks of five subjects Physics, Chemistry, 
Biology, Mathematics and Computer, calculate percentage and grade by if else. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
</head>
<body>
    <h2>Grade Calculator</h2>
    <form method="post">
        <label for="physics">Physics:</label>
        <input type="number" name="physics" id="physics" required><br><br>
        
        <label for="chemistry">Chemistry:</label>
        <input type="number" name="chemistry" id="chemistry" required><br><br>
        
        <label for="biology">Biology:</label>
        <input type="number" name="biology" id="biology" required><br><br>
        
        <label for="mathematics">Mathematics:</label>
        <input type="number" name="mathematics" id="mathematics" required><br><br>
        
        <label for="computer">Computer:</label>
        <input type="number" name="computer" id="computer" required><br><br>
        
        <input type="submit" value="Calculate">
    </form>

    <?php
    
    function calculateGrade($physics, $chemistry, $biology, $mathematics, $computer) {
    
        $totalMarks = $physics + $chemistry + $biology + $mathematics + $computer;
    
        $percentage = ($totalMarks / 500) * 100;

        if ($percentage >= 90) {
            $grade = 'A';
        } elseif ($percentage >= 80) {
            $grade = 'B';
        } elseif ($percentage >= 70) {
            $grade = 'C';
        } elseif ($percentage >= 60) {
            $grade = 'D';
        } elseif ($percentage >= 40) {
            $grade = 'E';
        } else {
            $grade = 'F';
        }

        return array('percentage' => $percentage, 'grade' => $grade);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $physics = $_POST["physics"];
        $chemistry = $_POST["chemistry"];
        $biology = $_POST["biology"];
        $mathematics = $_POST["mathematics"];
        $computer = $_POST["computer"];

        $result = calculateGrade($physics, $chemistry, $biology, $mathematics, $computer);

        echo "<h2>Result:</h2>";
        echo "Percentage: " . $result['percentage'] . "%<br>";
        echo "Grade: " . $result['grade'] . "<br>";
    }
    ?>
</body>
</html>
