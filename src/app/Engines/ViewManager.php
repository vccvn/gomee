<?php
namespace Gomee\Engines;

use Gomee\Repositories\Html\AreaRepository;
use Gomee\Web\HtmlAreaList;
use Gomee\Web\Options;
use Gomee\Files\Filemanager;
use Gomee\Helpers\Arr;

class ViewManager
{
    static $shared = false;

    static $themeFolder = '';
    public static function share($name = null, $value=null)
    {
        if(static::$shared) return true;
        $a = $name?(is_array($name)?$name:(is_string($name)?[$name=>$value]: [])):[];
        view()->share($a);
        return true;
    }
    
}
