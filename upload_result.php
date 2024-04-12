<?php
require('includes/connection.php');

// Function to prepare database connection
function prepareConnection() {
    // Database connection logic goes here
    return $pdo; // Assuming $pdo is your database connection object
}

// Prepare the database connection
$pdo = prepareConnection();

if(isset($_POST["import"])) {
    $filename = $_FILES["result"]["tmp_name"];

    if($_FILES["result"]["size"] > 0) {
        $file = fopen($filename, "r");
        $success = true; // Flag to check if all inserts were successful
        
        // Prepare the SQL statement outside the loop
        $sql = "INSERT INTO student_result (result_id, name, admin_no, course_code, course_title, unit, ca, exam, total, grade, semester) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        
        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE) {
            // Execute the prepared statement with current data
            $success = $stmt->execute($getData);

            if (!$success) {
                $success = false;
                break; // Exit loop on first failure
            }
        }
        fclose($file);

        if ($success) {
            echo "<script type=\"text/javascript\">
                        alert(\"CSV File has been successfully Imported.\");
                        window.location = \"upload_result.php\"
                    </script>";
        } else {
            echo "<script type=\"text/javascript\">
                        alert(\"Error importing CSV File. Please try again.\");
                        window.location = \"upload_result.php\"
                    </script>";
        }
    }
}
?>

<?php 
include('includes/header.php');
?>
<style>
/* Your CSS styles here */
</style>

<div class="content-container" style="padding-top:20px;">
    <div class="left">
        <!-- Your left sidebar content goes here -->
        <?php include('includes/admin_side_bar.php');?>
    </div>

    <div class="right">
        <div class="form_container" style="border:1px solid; width:80%; padding:10px; height:380px; margin:0 auto;">
            <form action="upload_process.php" method="post" enctype="multipart/form-data">
                <div class="form-group" style="margin-bottom:20px;">
                    <label for="">Select a Result Sheet</label><br>
                    <input type="file" name="result" id="">
                </div>
                <hr color="#17046d">
                <br>
                <div class="form-group">
                    <button type="submit" name="import" style="color:#fff; background:#17046d; width:100px; height:35px;">Upload Result</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
