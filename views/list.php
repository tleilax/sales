<ul>
<? foreach ($stash as $section => $items): ?>
    <li>
        <h2><?= $section ?></h2>
    </li>
<? endforeach; ?>
</ul>