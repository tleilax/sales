<ul class="list">
<? foreach ($stash as $section => $items): ?>
    <li class="list-section">
        <h2 class="list-section-title"><?= $section ?></h2>
        <ul class="list-items">            
        <? foreach ($items as $item): ?>
            <li class="list-item <? if ($item['sold']) echo 'list-item-sold'; ?>">
                <h3 class="list-item-title"><?= $item['title'] ?></h3>
                <p class="list-item-price">
                    <?= number_format($item['price'], 2, ',', '.') ?> €
                </p>
            <? if ($item['info']): ?>
                <p class="list-item-info">
                    <?= $item['info'] ?>
                </p>
            <? endif; ?>
            </li>
        <? endforeach; ?>
        </ul>
    </li>
<? endforeach; ?>
</ul>
