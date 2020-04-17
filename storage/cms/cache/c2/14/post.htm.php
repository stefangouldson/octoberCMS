<?php 
class Cms5e99896eca1a1583464038_dfcdffbc27f61e237e960c01ae3dd147Class extends Cms\Classes\PageCode
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
