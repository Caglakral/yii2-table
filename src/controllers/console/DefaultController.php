<?php
namespace Caglakral\controllers;

use yii\console\Controller;

class DefaultController extends Controller
{
    public function actionIndex(){
        return $this->render['index'];
    }
}