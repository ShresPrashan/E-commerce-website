<?php
include 'dbh.php';
include 'Header.php';
?>
<br><br><br><br><br><br><br>
<h1 style="text-align:center;"> Chat Results </h1>
<?php
if (isset($_POST['chat'])){
    $conn = Open_Connection();
    $chat = $_POST['chat'];
    $sql= "SELECT c_ans FROM chat WHERE c_qn LIKE '%$chat%'";
    $result = mysqli_query($conn, $sql);
    $queryResult= mysqli_num_rows($result);
    if($chat==null) {
        echo "<h3>No results found. Error message: No value eneterd in the chat box.</h3>";
    }
    elseif ($queryResult>0) {
        while ($row = mysqli_fetch_assoc($result)){
    echo "Chat result";
        }
    }
    else{
        echo 'No results found.';
        echo ' Error message: No related information found.';
    }
}
?>