<?php
namespace kntodev\helpers;


use Yii;
use yii\base\Component;
//use yii\web\Controller;
use yii\base\InvalidConfigException;
 
class Adminltehelper extends Component
{
	public function getsidebaruser()
	{
		$name = Yii::$app->user->identity->profile->name ;

		$avatar = 'images/avatars/user.png';
		if (!Yii::$app->user->isGuest && Yii::$app->user->identity->isAdmin) {
			$avatar = 'images/avatars/admin.jpg';
		}
		if (Yii::$app->user->identity->profile->gravatar_id) {
			$avatar = 'https://www.gravatar.com/avatar/'.Yii::$app->user->identity->profile->gravatar_id.'?s=160' ;
		}

		return Yii::$app->view->render('@kntodev/helpers/adminltehelper/views/sidebar', [
            'name' => $name,
            'avatar' => $avatar,
        ]);		
	}

	public function getnavbaruser()
	{
		$name = Yii::$app->user->identity->profile->name ;

		Yii::$app->formatter->locale = 'de-DE';
		$created_at = Yii::$app->formatter->asDate(Yii::$app->user->identity->created_at, 'php:j.F.Y');

		$avatar1 = 'images/avatars/user_small.png';
		$avatar2 = 'images/avatars/user_medium.png';
		$role = 'Mitglied' ;
		if (!Yii::$app->user->isGuest && Yii::$app->user->identity->isAdmin) {
			$avatar1 = 'images/avatars/admin_small.jpg';
			$avatar2 = 'images/avatars/admin_medium.jpg';
			$role = 'Admin' ;
		}

		if (Yii::$app->user->identity->profile->gravatar_id) {
			$avatar1 = 'https://www.gravatar.com/avatar/'.Yii::$app->user->identity->profile->gravatar_id.'?s=25' ;
			$avatar2 = 'https://www.gravatar.com/avatar/'.Yii::$app->user->identity->profile->gravatar_id.'?s=160' ;
		}

		return Yii::$app->view->render('@kntodev/helpers/adminltehelper/views/navbar', [
            'name' => $name,
            'created_at' => $created_at,
            'role' => $role,
            'avatar1' => $avatar1,
            'avatar2' => $avatar2,
        ]);		
	}

}