<?php
/**
 * Created by PhpStorm.
 * User: duke
 * Date: 2017/3/14
 * Time: 下午10:40
 */
namespace app\controllers;
use yii\web\Controller;
use app\models\Test;

class IndexController extends Controller
{
    public function actionIndex()
    {
        $model = new Test();
        $data = $model->find()->one();
        $this->layout = 'layout1';
        return $this->render('index', array(
            'row'=>$data
        ));
    }
}