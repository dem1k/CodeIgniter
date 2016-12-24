<h4>John's Blog</h4>
<ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="/">Home</a></li>
<?php foreach ($menu as $item=>$key):?>
    <li><a href="/index.php/category/<?php echo $item ?>"><?php echo $key ?></a></li>
<?php endforeach;?>
</ul>
<br>
