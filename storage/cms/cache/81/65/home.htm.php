<?php 
class Cms5e98be691989b412706288_b6a15c6cd631254beb6aa174698e1e8cClass extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
