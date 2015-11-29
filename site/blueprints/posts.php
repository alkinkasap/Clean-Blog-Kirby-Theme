<?php if(!defined('KIRBY')) exit ?>

title: Posts
pages:
  template: post
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  markdown