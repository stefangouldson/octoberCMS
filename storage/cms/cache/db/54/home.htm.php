<?php 
class Cms5e98be1618f1c159765852_5131cb67cee4b0eb546c0846c43c2e64Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
