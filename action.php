<?php 
include "db.php";

if($_POST["key"] == "areeb9090"){
  
if (isset($_POST["title"])) {
    $title = $_POST["title"];
    $price = $_POST["price"];
    $imglink = $_POST["imglink"];
    $categor = $_POST["categor"];
    $smalldata = $_POST["smalldata"];
    $Requirements = $_POST["Requirements"];
    $Description = $_POST["Description"];
    $Topics = $_POST["Topics"];
    $download = $_POST["download"];
    $q = "INSERT INTO `courses` ( `title`, `img-url`, `categor`, `small-text`, `price`, `requirements`, `description`, `topic`, `link`) VALUES ('$title', '$imglink', '$categor', '$smalldata', '$price', '$Requirements', '$Description', '$Topics', '$download')";
    $res =  mysqli_query($con, $q);
    echo '<script> alert("product added"); window.location="adddatahide.php"</script>';
    // header("Location: /adddatahide.php");
  } 
}
else{
  echo "<script>
  alert('enter valid key')
</script>";

  echo "<script> window.location='adddatahide.php'</script>";
}

?>
