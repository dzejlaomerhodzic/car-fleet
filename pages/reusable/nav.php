<?php include '../../config.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql = "SELECT * FROM user WHERE idUser='$id'";
    $res = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($res);
    $user_id = $row['idUser'];
    $username = $row['Name'];
}

?>
<nav>
  <div class="logo">
    <a href="#">
        <img src="../../assets/icons/OIG.png" alt="Logo">
    </a>
  </div>
  <?php if(isset($_GET['id'])) echo "Hi, ".$username ?>
  <ul>
    <li><a href="#">About us</a></li>
    <?php if(!isset($_GET['id'])){ ?>
    <li><a href="../loginpage.php">Log in</a></li>
    <?php } ?>
  </ul>
</nav>