<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2018/1/15
 * Time: 22:50
 */
$this->title = '鸣叫';
?>

<div class="site-index">

    <div class="jumbotron">
        <h1>欢迎你使用tweet!</h1>
        <p class="lead">You have successfully created your Yii-powered application.</p>
        <p><a class="btn btn-xs btn-success" href="javascript:void()">发呜记</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <?php foreach ($list as $key=>$value):?>
            <div class="col-md-offset-3 col-lg-6">
                <h2>标题</h2>
                <p><?=$value->content;?></p>
                <p><a class="btn btn-default" href="javascript:void()">扩展阅读&raquo;</a></p>
            </div>
            <?php endforeach;?>

        </div>

    </div>
</div>

