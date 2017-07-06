<?php
/** @var integer $leftTime */
/** @var \yii\web\View $this */
/** @var $seconds integer */
/** @var $selectorClass string */


\wscvua\lefttime\LeftTimeAsset::register($this);

use yii\helpers\Html;

$js = <<<JS
(function(){

    'use strict';        
        
    $('.$selectorClass').leftTime();
     
})($);
JS;

$this->registerJs($js);
?>

<?= Html::tag('div', null, [
    'data-seconds' => $seconds,
    'class' => $selectorClass
]); ?>