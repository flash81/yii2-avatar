<?php
namespace flash20\avatar\assets;

use Yii;
use yii\web\AssetBundle;

/**
 * Class AvatarAsset
 * @package flash20\avatar\assets
 */
class AvatarAsset extends AssetBundle
{
    public $css = [
        'css/cropper.min.css',
        'css/main.css',
        'css/site.css'
    ];
    
    public $js = [
        '//code.jquery.com/jquery-1.12.4.min.js',
        'js/cropper.min.js',
        'js/main.js',
        'js/site.js'
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    /**
     * 初始化：sourcePath赋值
     * @see \yii\web\AssetBundle::init()
     */
    public function init()
    {
        $this->sourcePath = dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR . 'statics';
    }
}