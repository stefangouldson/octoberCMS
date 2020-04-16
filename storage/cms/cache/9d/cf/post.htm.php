<?php 
class Cms5e98cd909c626713197168_6d6d095ed11563636452be29b22b7079Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
