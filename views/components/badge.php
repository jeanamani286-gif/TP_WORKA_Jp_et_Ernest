<?php
/** Badge : `$label`, `$variant` (vert|jaune|bleu|clignote|null). */
$classes = trim('badge ' . (isset($variant) && $variant ? $variant : ''));
?><span class="<?= $view->e($classes) ?>"><?= $view->e($label) ?></span>