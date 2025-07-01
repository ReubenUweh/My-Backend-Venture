<pre>
<?php
//steps for creating and understanding how to manipulate files

$files = $_FILES;

print_r($files);

//step 1: Check if user selected a file 
if ($_FILES['files']['name'] == "") {
    echo "No file selected";
} else {
    //step 2: Check if file is of the correct type (e.g., image, document, etc.)
    $filesFormat = ['image/jpeg', 'image/png', 'image/jpg'];
    $fileType = $_FILES['files']['type'];
    //step 3: Check if file size is within limits (e.g., less than 2MB)
    if (in_array($fileType, $filesFormat)) {
        $fileSize = $_FILES['files']['size'];
        $allocatedSize = 2097152;
        if ($fileSize <= $allocatedSize) {
            //step 4: Check if file has an error (e.g., file not uploaded, etc.)
            if ($_FILES['files']['error']) {
                echo "error occur when uploading";
            } else {
                //step 5: Rename the file to avoid conflicts
                $fileName = time();

                $fileLocation = "uploads/$fileName.$fileType";
                $fileType = explode("/", $_FILES['files']['type']);
                //step 6: Specify the upload directory/location
                $fileLocation = "uploads/$fileName.$fileType[1]";
            }
            //step 7: Move the file to a safe location on the server
            if (move_uploaded_file($_FILES['files']['tmp_name'], $fileLocation)) {
                echo "upload successful";
            } else {
                echo "upload not successful";
            }
            
            
        } else {
           echo "file too large";
        }
        
     } else {
        echo "file not supported";
    }
}







?>