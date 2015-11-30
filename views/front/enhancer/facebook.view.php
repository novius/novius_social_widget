<div class="fb-page" data-href="<?= $url ?>" 

    <?= !empty($width) ? "data-width='$width'" : '' ?>
    <?= !empty($height) ? "data-height='$height'" : '' ?>

    <?php
    if (!empty($data)) {
        foreach ($data as $key => $value) {
            ?>
            data-<?= $key ?>="<?= $value ? "true" : "false" ?>"
        <?php
        }
    }
    ?>
    >
    <div class="fb-xfbml-parse-ignore">
        <blockquote cite="<?= $url ?>"><a href="<?= $url ?>">Facebook</a>
        </blockquote>
    </div>
</div>