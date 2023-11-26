<?php  
include "db_conn.php";
$response = "<table border = '1'> ";

foreach($_POST["data"] as $ownership) {
    // echo;
    // system.out.println( $ownership['CID']);
    $sql = "SELECT * FROM course WHERE CourseID LIKE " . $ownership['CID'];
    // echo $sql;
    

    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $response .= "<tr><th></th><td>" .$row["CourseID"]."</td><td>" .$row["CourseName"]."</td><td>" .$row["CoverImage"]."</td><td>" .$ownership["State"]."</td></tr>";
        }
}
$response .= "</table> ";
echo $response;

?>