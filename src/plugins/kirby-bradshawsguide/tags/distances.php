<?php

return [
    'html' => function ($tag) {
        return snippet('scopes/distances', [
            'title' => $tag->attr('title', 'Distances of Places from the Station'),
            'distances' => $tag->parent()->distances()->yaml()
        ], true);
    }
];