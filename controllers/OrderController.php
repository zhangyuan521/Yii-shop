<?php
/**
 * Created by PhpStorm.
 * User: duke
 * Date: 2017/3/14
 * Time: 下午11:24
 */
namespace app\controllers;
use yii\web\Controller;
class OrderController extends Controller
{

    public function actionIndex()
    {
        $this->layout = 'layout1';
        return $this->render('index');
    }

    public function actionCheck()
    {
        $this->layout = 'layout1';
        return $this->render('check');
    }

}