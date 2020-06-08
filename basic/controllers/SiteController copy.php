<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\CAPTCHA;


class SiteController extends Controller
{
    public function actions()
    {
        return [
            'captcha' => ['class' => 'app\toolbox\CAPTCHA',
            'minLength' => 5,
            'maxLength' => 5,
            'foreColor' =>0xFF3D7F
        ]];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (!Yii::$app->user->isGuest) {
            $this->authorization();
       }
        $model= new LoginForm();
        $CAPTCHA= new CAPTCHA();
        if  ((Yii::$app->session['Attempt']+=1) >= 3 && $CAPTCHA->load(Yii::$app->request->post())) {
            Yii::$app->session['Attempt'] = 0;
        } 
        else if ($model->load(Yii::$app->request->post()) && $model->login()){
            // echo Yii::$app->user->identity->Code_role;
            unset(Yii::$app->session['Attempt']);
            $this->authorization();
        }

        $model->password = '';
        return $this->render('index', [
            'model' => $model,
            'CAPTCHA'=> $CAPTCHA
        ]);
    }
    public function actionView($id){
        
        return $this->render('view',[
            'model'=>$this->findModel($id),       
        ]);
    }
    function authorization()
    {
        switch (Yii::$app->user->users->user_code) {
            case '1':
            return $this->redirect(['reviews/index', 'id' => Yii::$app->user->id]);
            case '2':
            return $this->redirect(['reviews/index', 'id' => Yii::$app->user->id]);

            default:
                break;
        }
    }
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }
    

}
