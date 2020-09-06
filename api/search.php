<?php
session_start();
if(!empty($_SESSION['login_user'])==null)
 {
     include(__DIR__ . "/../components/Navbar.php");
 }
 else{
    include(__DIR__ . "/../components/UserNavbar.php");
 }


?>

<h1 style="text-align:center;"> Search Results </h1>
<div class ="search-results"></div>
<div>
<?php
if (isset($_POST['search'])){
    $conn = Open_Connection();
    $search = $_POST['search'];
    $sql= "SELECT * FROM product WHERE product_name LIKE '%$search%' OR product_category LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);
    $queryResult= mysqli_num_rows($result);
   
    if($search==null) {
        echo "<h3>No results found. Error message: No value eneterd in the search box.</h3>";
    }
    elseif ($queryResult>0) {
        while ($row = mysqli_fetch_assoc($result)){
	echo "<div>
	<h3> ".$row['a_title']."</h3>
	<p> ".$row['a_text']."</p>
	</div>";
}
    }
    
    else{
        echo 'No results found.';
        echo ' Error message: No related information found.';
    }

}
?>
</div>