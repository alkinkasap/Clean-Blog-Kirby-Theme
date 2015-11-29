<?php if(!defined('KIRBY')) exit ?>

title: Post
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date
    type:  date
  text:
    label: Text
    type:  markdown
  tags:
    label: Tags
    type:  tags