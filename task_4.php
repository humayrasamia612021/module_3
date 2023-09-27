<?php

$studentGrades = array(
    array("Math" => 85, "English" => 90, "Science" => 78),
    array("Math" => 92, "English" => 88, "Science" => 95),
    array("Math" => 78, "English" => 85, "Science" => 89)
);

function averageGrades($grades) {
    foreach ($grades as $student) {
        $total = 0;
        $subjectCount = count($student);

        foreach ($student as $subject => $grade) {
            $total += $grade;
        }

        $average = $total / $subjectCount;
        echo "Average grade: " . $average . "<br>";
    }
}

averageGrades($studentGrades);
?>
