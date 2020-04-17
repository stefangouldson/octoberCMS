<?php namespace Eduonix\Resources\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;

class Links extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'=>'Links',
            'description'=>'Display Resource Link'
        ];
    }

    public function defineProperties()
    {
        return [
            'link1'=>[
                'title'=>'link 1',
                'description'=>'Link 1 URL',
                'type'=>'string'
            ],
            'link2'=>[
                'title'=>'link 2',
                'description'=>'Link 2 URL',
                'type'=>'string'
            ],
            'link3'=>[
                'title'=>'link 3',
                'description'=>'Link 3 URL',
                'type'=>'string'
            ],

        ];
    }

    public function onRun(){
        $links = [$this->property('link1'),$this->property('link2'),$this->property('link3')];
        $this->page['links']=$links;
    }

}
