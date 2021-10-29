<?php if (!empty($_SESSION['cart'])): ?>
    <div class="body customScroll">
        <ul class="minicart-product-list">
            <?php foreach ($_SESSION['cart'] as $id => $item): ?>
                <li>
                    <a href="product/<?= $item['alias'] ?>" class="image"><img
                                src="public/assets/images/product-image/<?= $item['img'] ?>"
                                alt="<?= $item['title'] ?>"></a>
                    <div class="content">
                        <a href="product/<?= $item['alias'] ?>" class="title"><?= $item['title'] ?></a>
                        <span class="quantity-price"><?= $item['qty'] ?> x <span
                                    class="amount"><?= $_SESSION['cart.currency']['symbol_left'] . $item['price'] . $_SESSION['cart.currency']['symbol_right'] ?></span></span>
                        <span class="remove del-item" data-id="<?= $id ?>">×</span>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <h3>
        <div class="title">Items: <span class="cart-qty"><?= $_SESSION['cart.qty'] ?></span></div>
    </h3>
    <h3>
        <div class="title">Total price:
            <span class="cart-sum">
                <?= $_SESSION['cart.currency']['symbol_left'] ?>
                <?= $_SESSION['cart.sum'] ?>
                <?= $_SESSION['cart.currency']['symbol_right'] ?>
            </span>
        </div>
    </h3>
<?php else: ?>
    <h3> Cart is empty....</h3>
<?php endif; ?>