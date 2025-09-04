<?php
echo "Hello World<br>";

$StudentId = getenv("STUDENT_ID"); 
if ($StudentId) {
    echo "Student ID: " . htmlspecialchars($StudentId);
} else {
    echo "Student ID not set.";
}
?>
