<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2018/1/15
 * Time: 23:39
 */

namespace frontend\controllers;


use yii\web\Controller;

class NoticeController extends Controller
{
    public function actionIndex()
    {
        $data = [];

        return $this->render('index', $data);
    }
}