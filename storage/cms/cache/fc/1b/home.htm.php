<?php 
class Cms5e98bb2548331152470672_e624fc094d47f765b6dc5082bc943725Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
