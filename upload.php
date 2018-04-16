<?php
    include "connection.php";

    if ($_FILES) {

        $fileName = $_FILES["image"]["name"]; // The file name
        $fileTmpLoc = $_FILES["image"]["tmp_name"]; // File in the PHP tmp folder

        // Validate File
        if (is_file($fileTmpLoc)) {
            if (is_uploaded_file($fileTmpLoc)) {
                if(move_uploaded_file($fileTmpLoc, 'Images/'. $fileName)){

                    $stmt = $conn->prepare("INSERT INTO images SET imgName = '$fileName' ");
                    $stmt->execute();
                    $count = $stmt->rowCount();
                    if ($count > 0) {
                        ?>
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Finished</h4>
                            <p class="mb-0">Your File "<?= $fileName ?>" is uploaded </p>
                        <?php
                    } else { echo "Your File Doesn't Uploaded to DB"; }

                } else { echo "Your File Doesn't Uploaded"; }
            } else { echo "Your File Doesn't Uploaded"; }

        } else { echo "Please Chose a correct File"; }
    } else { echo "Please Select Your File"; }