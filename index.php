<?php
echo "Hello World ";

$StudentId = getenv("STUDENT_ID"); 
if ($StudentId) {
    echo "Student ID: " . htmlspecialchars($StudentId);
} else {
    echo "Student ID not set.";
}
?>
