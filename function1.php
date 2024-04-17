<?php
function calculateOverallGrade($grades) {
    $total = array_sum($grades);
    
    $average = $total / count($grades);

    return $average;
}
function generateReportCard($studentName, $grades) {
    
    $overallGrade = calculateOverallGrade($grades);

    
    echo "<h2>Report Card for $studentName</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Subject</th><th>Grade</th></tr>";
    foreach ($grades as $subject => $grade) {
        echo "<tr><td>$subject</td><td>$grade</td></tr>";
    }
    echo "</table>";
    echo "<p>Overall Grade: $overallGrade</p>";
}


$studentName = "ram";
$subjectGrades = array(
    "Math" => 90,
    "Science" => 85,
    "English" => 80,
    "History" => 95,
);

generateReportCard($studentName, $subjectGrades);

?>
