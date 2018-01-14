<h2>Portfolio's</h2>
<div>
    <ol>
        <?php foreach ($data as $portfolio):?>
            <li><a href="/portfolio/id/<?=$portfolio['id'];?>"><?=$portfolio['description']?></a></li>
        <?php endforeach;?>
    </ol>
</div>