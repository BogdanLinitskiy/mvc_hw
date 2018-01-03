<h2>Articles</h2>
<!--<div>-->
<!--    --><?php //foreach($data as $article):?>
<!--        <h2>--><?//=$article['title']?><!--</h2>-->
<!--        <p>--><?//=$article['text']?><!--</p>-->
<!--    --><?php //endforeach;?>
<!--</div>-->
<div>
    <ol>
        <?php foreach ($data as $article):?>
            <li><a href="/article/id/<?=$article['id'];?>"><?=$article['title']?></a></li>
        <?php endforeach;?>
    </ol>
</div>