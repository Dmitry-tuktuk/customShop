<h1>Main index.php</h1>
<p><?=$name?></p>
<p><?=$age?></p>
<p><?=debug($params)?></p>

<?php foreach ($posts as $post):?>
    <h3><?=$post->title ?></h3>
<?php endforeach; ?>
