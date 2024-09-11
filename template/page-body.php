<h1><?= $_page_view['page_title'] ?></h1>
<error>
<?php if (!empty($_page_view['error'])): ?>
<ul>
<?php foreach($_page_view['error'] AS $k => $v): ?>
    <li><?= $v ?></li>
<?php endforeach; ?>
</ul>
<?php endif; ?>
</error>

<message>
<?php if (!empty($_page_view['message'])): ?>
<ul>
<?php foreach($_page_view['message'] AS $k => $v): ?>
    <li><?= $v ?></li>
<?php endforeach; ?>
</ul>
<?php endif; ?>
</message>