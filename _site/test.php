<?php

// qui
$arr = json_decode(file_get_contents('json.json'), true);


foreach($arr as $art){

  $title = str_replace('"', '\"', $art['title']);

  $sum = str_replace(
    ['<p>', '</p>'],
    ['', ''],
    $art['summary']
  );

  $text = html_entity_decode(
    str_replace(
      ['<p>', '</p>', '<em>', '</em>', '<strong>', '</strong>'],
      ['', "\n", '*', '*', '**', '**'],
      $art['text']
    )
  );

  if($art['art_img']['800x600']){
    file_put_contents('images/news/' . $art['id'] . '.jpg', file_get_contents($art['art_img']['800x600']));
    $file = "\n" . 'img: images/news/' . $art['id'] . '.jpg';
  }

  $html = <<<EOD
---
title: "{$title}"
permalink: news/{$art['textid']}
date: {$art['publish']}
layout: default
calendar: {$sum}{$file}
---

{$text}
EOD;

  file_put_contents('_news/' . $art['id'] . '-' . $art['textid'] . '.md', $html);

  if($art['art_img']['800x600']){
    file_put_contents('images/news/' . $art['id'] . '.jpg', file_get_contents($art['art_img']['800x600']));
  }

  echo $html;
}
