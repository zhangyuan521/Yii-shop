<?php
/**
 * Created by PhpStorm.
 * User: duke
 * Date: 2017/3/14
 * Time: 下午11:24
 */
namespace app\controllers;
use yii\web\Controller;
class ProductController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'layout2';
        return $this->render('index');
    }

    public function actionDetail()
    {
        $this->layout = 'layout2';
        return $this->render('detail');
    }
}