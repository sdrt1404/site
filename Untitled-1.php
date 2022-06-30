<?php
$connect=mysqli_connect("localhost","root","qwerty","client") or die ("Error");
$result=mysqli_query($connect, "SELECT*FROM товары")

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>L'italiano</title>
    <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

    <form method="post">
      <input type="text" name="search" class="search"><input type="submit" name="submit" value="поиск">
    </form>
    <hr>
    <?php
      if(isset($_POST['submit'])){
        $search=($_POST['search']);
        $query=mysqli_query($connect, "SELECT*FROM orders WHERE 'id_order' LIKE '%$search%'");
        while($row=mysqli_fetch_assoc($query)) echo "<h1>".$row['date_of_order']."</h1><br>";
      }
    ?>
    <div class="container">
     <?php
     $querio=mysqli_query($connect, "SELECT*FROM  clients WHERE 'id_order' LIKE '%1%'");
    ?>
    
    <figure class="figure">
        <img src="../hello_world/2022-06-30_08-12-02.png" class="figure-img img-fluid rounded" alt="Photo is loading">
     </figure>
     <button type="button" class="btn btn-outline-primary" ><a href="../hello_world/index.php">Главная</a></button>
     <button type="button" class="btn btn-outline-secondary"><a href="../hello_world/index.html">Регистрация</a></button>
     <button type="button" class="btn btn-outline-success"><a href="">Помощь </a></button>
     <div class="row">
        <div class="col-md-12">
            <div class="menu" >
                <ul style="width: 100%; height:auto">

                  <?php
                     while ($consumer=mysqli_fetch_assoc($result))
                     {
                        ?>
                        <li>
                        <button type="button" class="btn btn-primary" ><?php echo $consumer['name']; ?></button>
                        <p><?php echo $consumer['cost']; ?></p>
                        <p style="color: blueviolet"><?php echo $consumer['about']; ?></button></p>
                        </li>
                        <?php
                      
                     }
                  ?>  
                </ul>
            </div>
        </div>
     </div>
     <form class="form-floating">
     <input type="email" class="form-control is-invalid" id="floatingInputInvalid" placeholder="name@example.com" value="test@example.com">
     <label for="floatingInputInvalid">Invalid input</label>
     </form>
     <button class="btn btn-primary"><</button>
    <?php 
       if (isset ($_GET['form-control is-invalid'])) {
        $nameform=$_GET['id'];
        $name= '"' .$connect->cubrid_real_escape_string($nameform).'"';
        $adding ="INSERT INTO clients (`id`, `accaunt_name`, `password`, `last_name`, `first_name`, `mid_name`, `tel_number`, `email_address`) VALUES (NULL, '', '', '', '', '', '', '$name'))";
       }
       ?>
       <button type="button" class="btn btn-primary" > <a href="../hello_world/plus.php">Изменение заказа</a></button>
       <img src="https://mykaleidoscope.ru/uploads/posts/2022-01/1643244193_47-mykaleidoscope-ru-p-ulichnaya-moda-moda-48.jpg" class="rounded mx-auto d-block" alt="Loading" style="width:500px">
       <img src="https://i.pinimg.com/originals/d0/2f/81/d02f81025642a0ae1d3708b2d9aa19b8.jpg" class="rounded mx-auto d-block" alt="Loading" style="width:500px">
      
      </div>
  </body>
</html>