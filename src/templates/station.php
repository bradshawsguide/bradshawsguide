<? snippet('head') ?>

<article class="c-page<? if ($page->hasImages()): ?> c-page--has-poster<? endif ?>">
<?
  pattern('common/page/header', [
    'title' => $page->title(),
    'suffix' => $page->title_suffix(),
    'notes' => $page->notes(),
    'parent' => $page->parent(),
    'subtitle' => $page->title_later(),
    'modifiers' => ['inverted']
  ]);

  pattern('common/page/content');

  pattern('section/routes', [
    'title' => 'Routes serving the station',
    'items' => $page->routes()
  ]);

  pattern('common/traverse');
?>
</article>

<? snippet('foot') ?>
