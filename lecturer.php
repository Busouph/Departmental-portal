<?php
// Handle form submission
if(isset($_POST["allocate"])) {
    // Retrieve course and lecturer IDs from the form
    $courseId = $_POST["course"];
    $lecturerId = $_POST["lecturer"];

    // Insert into database (assuming you have a PDO connection already)
    try {
        $stmt = $pdo->prepare("INSERT INTO course_allocations (course_id, lecturer_id) VALUES (?, ?)");
        $stmt->execute([$courseId, $lecturerId]);
        echo "<script>alert('Course allocated successfully.');</script>";
    } catch (PDOException $e) {
        echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
    }
}
?>
