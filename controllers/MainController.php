<?php

namespace app\controllers;

use Yii;
use yii\web\Response;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Message;
use app\models\MessageSearch;
use app\models\EntryForm;
use app\models\SelectForm;
use yii\helpers\Html;

class MainController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new Message();

        if ($model->load(Yii::$app->request->post())) {
            $model->insert();
            
            return $this->render('add-confirm', ['model' => $model]);
        } else {
            return $this->render('index', ['model' => $model]);
        }
    }

    public function actionSelect($email = null, $phone = null)
    {
        $searchModel = new MessageSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->get());

        return $this->render('select', [
           'dataProvider' => $dataProvider,
           'searchModel' => $searchModel,
        ]);
    }

}
