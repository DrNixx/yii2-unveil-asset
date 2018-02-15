<?php
namespace onix\assets;

use yii\web\AssetBundle;

class UnveilAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-unveil';

    public $js = [
        'jquery.unveil.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        parent::init();
        $this->publishOptions['beforeCopy'] = function ($from, $to) {
            if (is_dir($from)) {
                return false;
            } else {
                return pathinfo($from, PATHINFO_EXTENSION) == "js";
            }
        };
    }
}
