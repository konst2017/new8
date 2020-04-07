<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Interview;
/**
 * Site controller
 */
class PostController extends Controller {

public function actionView($alias)
{
echo "Заметка с псевдонимом $alias.";

}

public function actionIndex($order = 'DESC') {

echo "Заметки отсортированы в порядке Sorder.";
}
public function actionHello($name)

{

echo "Привет, Sname!";


}
}
