<?php foreach ($cv as $cv_item): ?>
	<a href="http://localhost:8888/cv/index.php/cv/view/<?php echo $cv_item['admnno']?>"><?php echo $cv_item['name'] ?></a>
	</br>
<?php endforeach ?>