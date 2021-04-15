<div class="product">
    <ul>
        <?php foreach ($products as $product) { ?>
            <li>Nombre: <?= $product->nombre ?> - Precio: <?= $product->precio ?></li>
        <?php } ?>
    </ul>
</div>