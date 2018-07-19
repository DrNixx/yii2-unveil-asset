<?php
namespace onix\assets;

use yii\web\AssetBundle as YiiAssetBundle;

class UnveilAsset extends YiiAssetBundle
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
