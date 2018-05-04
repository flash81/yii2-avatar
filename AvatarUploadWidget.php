<?php
namespace flash20\avatar;

/**
 *
 */
use Yii;
use yii\bootstrap\Widget;
use daimakuai\avatar\assets\AvatarAsset;
use yii\base\Object;
use yii\helpers\Html;
use yii\widgets\InputWidget;
use yii\web\View;

class AvatarUploadWidget extends Widget
{
    public $options = ['class' => 'form-control'];
    public $imageOptions = [];

    public $inForm = false;
    public $imageUrl = '';
    public $setTarget = '';
    public $model;
    public $type = 'hidden';
    public $attribute = [];
    public $attributes = [];
    public $view ;

    public function run()
    {
        parent::init();
        $this->registerClientScript();
    }

    public function registerClientScript()
    {
        AvatarAsset::register($this->view);
        //$script = "";
        //$this->view->registerJs($script,View::POS_READY);
    }

    public function setFooter()
    {
        $model = new UploadForm();
        return $this->render('upload', ['model' => $model]);
    }

}