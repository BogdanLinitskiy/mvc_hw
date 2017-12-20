<h1>Portfolio</h1>
<div>
    <ul>
        <?php foreach ($data as $element):?>
        <li>Year: <?=$element['year']?></li>
        <li><a href="<?=$element['url']?>">URL: <?=$element['url']?></a></li>
        <li>Description: <?=$element['description']?></li>
        <?php endforeach;?>
    </ul>
</div>