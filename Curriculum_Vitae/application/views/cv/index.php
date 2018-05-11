<?php foreach ($cv as $cv_item): ?>

    <h2><?php echo $cv_item['admnno'] ?></h2>
    <div id="main">
        <?php echo $cv_item['name'] ?>
    </div>
<?php endforeach ?>