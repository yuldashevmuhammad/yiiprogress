<?php


namespace frontend\controllers;


use frontend\models\MyContact;
use yii\web\Controller;

class PostController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionMyContact()
    {
        $model = new MyContact();
        $model->email='Sardor';
        $model->name="Dushamov";

        if ($model->validate()){
            echo "Validatsiyadan o'tdi";
        } else {
            echo "Validatsiydan o'tmadi";
            print_r(error());
        }

    }
}