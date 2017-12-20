<div>
    <?php foreach($data as $article):?>
        <h2><?=$article['title']?></h2>
        <p><?=$article['text']?></p>
    <?php endforeach;?>
</div>