
<?php include_once "auth/dbbag.php";
require_once "auth\db.php";?>

<?php $imgs=gettovaruser();

?>
 <?php foreach ($imgs as $img) {?>
<div class="item">
            <div class="buttons">
            <form action="#" method="POST">
                <button class="plus-btn like" type="button" name="button" name="<?php echo $img['name bike']?>">
                <img src="like.svg" alt="" />
                </button>
            </form>
            <form action="delete.php" method="POST">
                <button class="plus-btn delete" type="submit" >
                <img src="delete.svg" alt="" />
                </button>
            </form>
                </div>

                <div class="image">
                <img src="<?php echo $img['img']?>" alt="" />
                </div>

                <div class="description">
                <span><?php echo $img['name bike']?></span>
                <span><?php echo $img['size']?></span>
                 </div>

                <div class="quantity">
            <form action="plus.php" method="POST">
            <input class="minus-btn" type="submit" name="minus" value="<?php echo $img['name bike']?>">


            </form>
                <input type="text" name="name" value="<?php echo $img['quantity']?>">
            <form action="minus.php" method="POST">
                <input class="minus-btn" type="submit" name="minus" value="<?php echo $img['name bike']?>">
            </form>
                </div>

            <div class="total-price"><?php  echo floor($img['price'] * $img['quantity'])?>$</div>
        </div>
        <?php }?>