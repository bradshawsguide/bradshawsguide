<?php snippet('head') ?>

<section class="c-page">
<?php
pattern('common/page/header', [
    'title' => $page->title()
]);

$stations = page('stations')->children();

foreach (alphabetise($stations) as $letter => $items) {
    pattern('common/index', [
        'items' => $items,
        'letter' => $letter,
        'listAs' => 'columns'
    ]);
}
?>
</section>

<?php snippet('foot') ?>
