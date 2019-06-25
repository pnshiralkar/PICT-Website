<?php
require ('../backend/connect.php');

if(isset($_REQUEST['task']))
{
    if($_REQUEST['task'] == "del")
    {
        $sql = "DELETE FROM toppers WHERE ID='" . $_REQUEST['ID'] . "'";
        $conn->query($sql);
        unlink("../upload/toppers/" . $_REQUEST['img']);
        header("Location: toppers.php");
    }
    if($_REQUEST['task'] == "add")
    {
        $sql = "SELECT * FROM toppers WHERE 1 ORDER BY ID DESC ";
        $id=0;
        $res=$conn->query($sql);
        while($row = $res->fetch_assoc())
        {
            $id=$row['ID'];
            break;
        }
        $id++;
        //$conn->close();
        $file = "topper" . $id . ".jpg";

        $target_dir = "../upload/toppers/";
        $target_file = $target_dir . $file;
        $uploadOk = 1;

        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $a = $imageFileType;
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["pic"]["tmp_name"]);
            $a = $check["mime"];
            if($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
            //echo "The file ". basename( $_FILES["pic"]["name"]). " has been uploaded. Mime is" . $a;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }

        $sql = "INSERT INTO toppers (name, ranktxt, img) VALUES  ('" . $_REQUEST['name'] . "', '" . $_REQUEST['ranktxt'] . "', '" . $file . "')";
        $conn->query($sql);
        header("Location: toppers.php");
    }
}
else
    header("Location: toppers.php");