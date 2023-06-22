<form action="#" method="GET">
    <label for="">Upload Image</label>
    <input type="file" name="name" placeholder=" Select Image">
    <br>
    <input type="submit" value="submit" name="submit">
</form>
<?php
if (isset($_GET['submit'])) {
    if (empty($_GET['name'])) {
        customError();
    } else {
        echo "Image Uploaded Successfully....";
    }
}
set_error_handler("customError");
function customError()
{
    echo "Error............ ! Image not found";
    die;
}
?>