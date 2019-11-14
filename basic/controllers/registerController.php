<?php

namespace app\controllers;

use app\models\registerForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class RegisterController extends Controller
{

    public function actionIndex()
    {
        return actionRegister();/*$this->render('registerForm');|*/
    }

    public function actionRegister()
    {
        /*if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
*/
        $model = new registerForm();
        /*if ($model->load(Yii::$app->request->post()) && $model->register()) {
            return $this->goBack();
        }
*/

        return $this->render('register', [
            'model' => $model
        ]);
    }

}
?>