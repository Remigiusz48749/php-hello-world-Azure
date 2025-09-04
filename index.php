<?php
echo "Hello World"

$StudentId = getenv("STUDENT_ID"); 
if ($studentId) {
    echo "Student ID: " . htmlspecialchars($StudentId);
} else {
    echo "Student ID not set.";
}
?>
