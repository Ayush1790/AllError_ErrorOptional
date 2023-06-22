<form action="#" method="GET">
    <label for="">Enter Name :</label>
    <input type="text" name="name" placeholder="Enter Name">
    <br>
    <label for="">Enter Company Name :</label>
    <input type="text" name="cname" placeholder="Enter Company Name">
    <br>
    <input type="submit" value="submit" name="submit">
</form>
<?php
if (isset($_GET['submit'])) {
    if (empty($_GET['name'] || $_GET['cname'])) {
        customError();
    }else{
        echo "Success";
        die;
    }
}
set_error_handler("customError");
function customError()
{
    echo "Please fill all the fields";
    die;
}
?>