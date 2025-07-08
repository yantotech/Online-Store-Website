<?php
include "Database/database.php";

$query = "SELECT * FROM products";
$result = mysqli_query($koneksi, $query);

$products = [];
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
}

$kategori = [
    "Komponen Mesin",
    "Komponen Transmisi",
    "Komponen Kelistrikan",
    "Komponen Pengereman",
    "Komponen Suspensi"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "Header.php"?>
    <div class="tampilanproduct">
        <div class="category">
            <p class="headcategory">CATEGORY ▼</p>
            <ul class="dropdown2">
                <?php foreach ($kategori as $category): ?>
                    <li>
                        <a href="#"><?php echo $category; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="product">
            <div class="allcard">
                <?php foreach ($products as $product): ?>
                    <div class="card">
                        <img src="Image/<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['alt']) ?>">
                        <div class="cardcontent2">
                            <?php if (!empty($product['discount'])): ?>
                                <span class="diskon"><?= $product['discount']?>%</span>
                                <span class="harganormal">Rp<?= number_format($product['normal_price'], 0, ',', '.') ?></span>
                            <?php endif; ?>
                            <p class="hargadiskon">Rp<?= number_format($product['discounted_price'], 0, ',', '.') ?></p>
                            <p><?= htmlspecialchars($product['description']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php include "Footer.html"?>
</body>
</html>