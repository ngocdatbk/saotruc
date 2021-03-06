<?php

namespace app\modules\dashboard\assets;

use yii\web\AssetBundle;

class LayoutAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@app/modules/dashboard/assets/dist';

    /**
     * @inheritdoc
     */
    public $js = [
        'js/layout.js',
    ];

    public $css = [
        'css/layout.css',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\jui\JuiAsset',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->publishOptions['forceCopy'] = YII_ENV_DEV;
    }

}