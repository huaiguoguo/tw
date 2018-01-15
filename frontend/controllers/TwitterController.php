<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2018/1/15
 * Time: 22:16
 */

namespace frontend\controllers;

use common\models\Tweeter;
use yii\web\Controller;

class TwitterController extends Controller
{
    public function actionIndex()
    {
        $list = [];
        $data['list'] = Tweeter::find()->all();
        return $this->render("index", $data);
    }
}