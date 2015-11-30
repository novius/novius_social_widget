<a class="twitter-timeline" data-widget-id="<?= $widgetId ?>"
   data-chrome="<?= implode(" ", $chrome) ?>"
    <?= !empty($limit) ? "data-tweet-limit='$limit'" : '' ?>
    <?= !empty($width) ? "width='$width'" : '' ?>
    <?= !empty($height) ? "height='$height'" : '' ?>
    ></a>
