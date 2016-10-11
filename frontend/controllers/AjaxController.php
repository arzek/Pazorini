<?php
/**
 * Created by PhpStorm.
 * User: gebruiker
 * Date: 30.09.16
 * Time: 16:23
 */

namespace frontend\controllers;

use app\models\City;
use app\models\Order;
use Yii;
use yii\web\Controller;
use app\models\Comment;
use app\models\Posts;

class AjaxController extends Controller
{
    /**
     * TODO Ajax comment
     */
    public function actionComment()
    {
        if(isset($_POST['Comment']))
        {
            print Comment::create($_POST['Comment']);
        }
    }

    /**
     * TODO Ajax set img
     * @param $id
     */
    public function actionSet_img_comment($id)
    {
        if (is_uploaded_file($_FILES["img"]["tmp_name"]) && isset($id))
        {
            print Comment::setImg($id);
        }
    }

    /**
     * TODO Ajax massage
     */
    public function actionMessage()
    {
        if(isset($_POST['Message']))
        {
            print Posts::create($_POST['Message']);
        }
    }
    public function actionCity()
    {
        if(isset($_POST['id']))
        {
            echo City::getOption($_POST['id']);
        }
    }
    public function actionOrder()
    {
        if(isset($_POST['Final']))
        {
            Order::create($_POST['Final']);
        }
    }

    public function beforeAction($action) {

        Yii::$app->controller->enableCsrfValidation = false;
        return true;
    }

}