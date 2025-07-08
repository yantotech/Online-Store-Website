<?php
$vehicleBrands = ['Honda', 'Yamaha', 'Suzuki', 'Kawasaki', 'Vespa'];
?>

<nav>
    <div class="brand">
        <img src="Image/Logo F.png" alt="Logo">
        <h2>Fen Jaya<br>Motor</h2>
    </div>
    <ul>
        <form class="search" method="post">
            <input type="text" name="search" placeholder="Search Product...">
            <input type="submit" value="Search">
        </form>
        <li>
            <a href="" class="shorcutbottom">HOME</a>
        </li>
        <li>
            <a href="index.php" class="shorcutbottom">PRODUCT</a>
        </li>
        <li>
            <a class="shorcutbottom">VEHICLE BRAND ▼</a>
            <ul class="dropdown">
                <?php foreach ($vehicleBrands as $brand): ?>
                    <li>
                        <a href="index.php?brand=<?php echo strtolower($brand); ?>"><?php echo $brand; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>
        <li>
            <a class="keranjang"><img src="Image/Keranjang.png" alt="Keranjang Belanja"></a>
        </li>
        <li>
            <a href="Login.php" class="login">LOGIN</a>
        </li>
    </ul>
</nav>