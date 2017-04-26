    <h1>
        Каталог товаров
    </h1>
    <?php

    foreach ($goods as $good): ?>
    <div>
    <div class="shopUnit">
        <img src="<?php echo $good['img']?>" />

        <div class="shopUnitName">
            <?php echo $good['name'];?>
        </div>
        <div class="shopUnitShortDesc">
            <?php echo $good["desc"]; ?>
        </div>
        <div class="shopUnitPrice">
            Цена: <?php echo $good['price']?>
        </div>
        <a href="index.php?page=product&id=<? echo $good['id'];?>" class="shopUnitMore">
            Подробнее
        </a>
    </div>
<?php endforeach;?>
    </div>