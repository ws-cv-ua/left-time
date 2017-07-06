<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 03.04.2017
 * Time: 15:00
 */

namespace wscvua\lifetime;

class LeftTime extends \yii\bootstrap\Widget
{
    public $seconds = 0;
    public $selectorClass = 'timer';

    public function init(){}

    public function run()
    {
        return $this->render('view', [
            'seconds' => $this->seconds,
            'selectorClass' => $this->selectorClass
        ]);
    }

}