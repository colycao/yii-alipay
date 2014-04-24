<?php

class ProxyController extends Controller
{
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	public function accessRules()
	{
		return array(
            array('allow',
                'actions'=>array(''),
                'users'=>array('*'),
            ),
			array('allow',
                'actions'=>array('panel','withdrawals','referral','revenue','getUserInfo'),
                'roles'=>array('agents'),
			),
            array('allow',
                'actions'=>array('admin','update','delete'),
                'roles'=>array('admin'),
            ),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionPanel()
	{
        $user = User::model()->findByPk(Yii::app()->user->id);
		$this->render('panel',array('user'=>$user));
	}

	public function actionWithdrawals()
	{
        $user = User::model()->findByPk(Yii::app()->user->id);
        $user = $user->user_center;
        if (empty($user->real_name) || empty($user->identity_card_number) || empty($user->recipient_address) || empty($user->bank_type) || empty($user->bank_number)) {
            Yii::import('ext.EUserFlash');
            EUserFlash::setSuccessMessage('请先完善个人资料！');
            $this->redirect(array('proxy/getUserInfo'));
        } else {
            $this->render('withdrawals',array('user'=>$user));
        }
	}

    public function actionGetUserInfo()
    {
        $userCenter = UserCenter::model()->findByAttributes(array("user_id"=>Yii::app()->user->id));
        if($userCenter === null){
		    $userCenter = new UserCenter;
            $userCenter->rebate_ratio = 5;
            $userCenter->sharing_ratio = 5;
            $userCenter->partner = time();
            $userCenter->key = md5(time());
            $userCenter->user_id = Yii::app()->user->id;
        }

        if(isset($_POST['UserCenter']))
        {
            $userCenter->attributes=$_POST['UserCenter'];
            if($userCenter->validate())
            {
                if($userCenter->save()){
                    Yii::import('ext.EUserFlash');
                    EUserFlash::setSuccessMessage('个人信息已保存！');
    				$this->refresh();
                }
            }
        }
        $this->render('getUserInfo',array('model'=>$userCenter));
    }

    public function actionReferral()
    {
        unset(Yii::app()->request->cookies['from_date']);
        unset(Yii::app()->request->cookies['to_date']);
        $model=new Referral('search');
        $model->unsetAttributes();

        if(!empty($_POST))
        {
            Yii::app()->request->cookies['from_date'] = new CHttpCookie('from_date', $_POST['from_date']);
            Yii::app()->request->cookies['to_date'] = new CHttpCookie('to_date', $_POST['to_date']);
        }

        $this->render('referralResult',array(
            'model'=>$model,
        ));
    }

	public function actionRevenue()
	{
        $user = User::model()->findByPk(Yii::app()->user->id);
		$this->render('panel',array('user'=>$user));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
