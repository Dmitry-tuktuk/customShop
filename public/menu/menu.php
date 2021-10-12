<ul class="d-block">
    <li class="title">
        <a href="category/<?=$category['alias'];?>"><?=$category['title'];?></a>
    </li>
    <?php if(isset($category['childs'])): ?>
        <ul>
            <?= $this->getMenuHtml($category['childs']);?>
        </ul>
    <?php endif; ?>
</ul>