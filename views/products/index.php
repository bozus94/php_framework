<div class="product">
    <ul>
        <?php foreach ($products as $product) {?>
            <li>nombre <?= $product['nombre'] ?></li>
            <li>nombre <?= $product['precio'] ?></li>
        <?php }?>
    </ul>
</div>