<?php


namespace newism\rollbar\controllers;


use craft\web\Controller;
use newism\rollbar\Plugin;
use Rollbar\Rollbar;
use yii\helpers\Url;
use craft\helpers\App;

class AdminController extends Controller
{

    /**
     * @throws \yii\web\ForbiddenHttpException
     */
    public function actionTest()
    {
        $this->requirePermission('admin');

        $accessToken = Plugin::getInstance()->getSettings()->accessToken;
        if (!empty($accessToken)) {
            Rollbar::init(
                [
                    'access_token' => $accessToken,
                    'environment' =>  App::env('CRAFT_ENVIRONMENT'),
                ]
            );
            Rollbar::info('test message from craft-rollbar');
        }
        \Craft::$app->session->setFlash('newism-rollbar-setting', 'Sent test message.');
        return $this->redirect('/admin/settings/plugins/newism-rollbar');
    }
}