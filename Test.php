<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 03.04.2017
 * Time: 15:00
 */

namespace wscvua\lifetime;

class Test extends \yii\bootstrap\Widget
{

    public $startTime = '00:00:00';

    public function init()
    {
    }

    public function run()
    {
        return 'test-widget';
    }

}