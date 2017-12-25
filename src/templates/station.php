<?php
snippet('head', [
    'alternate' => $page->url().'.geojson'
]);
?>

<article class="c-page">
<?php
pattern('common/page/header', [
    'parent' => html::a($page->parent()->url(), $page->parent()->title()),
    'title' => $page->title()
]);

if (!$page->title_later()->empty()) {
    $currentTitle = ' (today known as '.$page->title_later();
} else {
    $currentTitle = '';
}

echo 'This railway station in '.$page->placePage()->region().', '.$page->placePage()->country().$currentTitle.', provides services on '.$page->routesCount();

pattern('common/page/content');

pattern('common/section/route-traversal', [
    'title' => 'Routes serving this station',
    'level' => 3,
    'routes' => $page->placePage()->routes()
]);

pattern('common/section/links', [
    'title' => 'Further reading',
    'links' => $page->links()
]);

if (!$page->place()->empty()) {
    pattern('common/card', [
        'item' => $page->placePage()
    ]);
}

pattern('common/figure/map', [
    'url' => $page->uri().'.geojson/'.$kirby->request()->params().'&zoom=14',
    'class' => 'cover'
]);
?>
</article>

<?php snippet('foot') ?>
