<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: default
fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  text
  description:
    label: Description
    type:  markdown
  keywords:
    label: Keywords
    type:  tags
  copyright:
    label: Copyright
    type:  text
  facebook:
    label: Facebook
    type:  url
    default: https://facebook.com/alkinkasap
    width: 1/3
  twitter:
    label: Twitter
    type:  url
    default: https://twitter.com/alkinkasap
    width: 1/3
  github:
    label: Github
    type:  url
    default: https://github.com/alkinkasap
    width: 1/3