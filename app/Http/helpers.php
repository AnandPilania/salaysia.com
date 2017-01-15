<?php
use App\Settings;
use Tree\Node\Node;
 
if (! function_exists('getcong')) {

    function getcong($key)
    {
    	 
        $settings = Settings::findOrFail('1'); 

        return $settings->$key;
    }
}

if (!function_exists('classActivePath')) {
    function classActivePath($path)
    {
        $path = explode('.', $path);
        $segment = 2;
        foreach($path as $p) {
            if((request()->segment($segment) == $p) == false) {
                return '';
            }
            $segment++;
        }
        return ' active';
    }
}

if (!function_exists('classActivePathSite')) {
    function classActivePathSite($path)
    {
        $path = explode('.', $path);
        $segment = 1;
        foreach($path as $p) {
            if((request()->segment($segment) == $p) == false) {
                return '';
            }
            $segment++;
        }
        return 'active';
    }
}


if (! function_exists('getResult')) {
    function getOutput($node){
        if($node->isLeaf()){
           $output='<li><a href="'.URL::to($node->getValue()->slug).'">'.$node->getValue()->title.'</a></li>'; 
        }else{
            //handle special case for features only
            if($node->getValue()->title=='Features')             
                $output='<li class="dropdown drop-down drob-sub"><a class="dropdown-toggle" data-toggle="dropdown" href="'.URL::to($node->getValue()->slug).'">'.$node->getValue()->title.'</a>'.'<ul class="dropdown-menu featyres-ui">';
            else
                $output='<li class="dropdown drop-down"><a class="dropdown-toggle" data-toggle="dropdown" href="'.URL::to($node->getValue()->slug).'">'.$node->getValue()->title.'</a>'.'<ul class="dropdown-menu">';

             foreach($node->getChildren() as $nodec){
                $output.=getOutput($nodec);
             }

             $output.='</ul></li>';
        }
        return $output;
    }
}

if (! function_exists('printMenu')) {

    function printMenu($tree)
    {

        $output='';
        foreach($tree->getChildren() as $node){
            $output.=getOutput($node);
        } 

        
        return $output;
    }
}