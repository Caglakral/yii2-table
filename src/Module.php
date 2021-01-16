<?php
namespace Caglakral\table;

use Yii;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;
use yii\web\HttpException;
/**
 * table module definition class
 */
class Module extends \yii\base\Module
{
    public $controllerNamespace = '';

    public function init()
    {
        parent::init();
        // custom initialization code goes here
    }
    public function registerTranslations()
    {
        Yii::$app->i18n->translations['site/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
            'basePath' => '@portalgece/table/messages',
            'fileMap' => [
                'table/table' => 'table.php',
            ],
        ];
    }
    public static function t($category, $message, $params = [], $language = null)
    {
        return Yii::t('table/'. $category, $message, $params, $language);
    }

    public static function initRules(){

        return $rules = [
            [
                'class' => 'yii\rest\UrlRule',
                'controller' => [
                    'table/tables',
                ],
                'tokens' => [
                    '{id}' => '<id:\\w+>'
                ],
                /*'patterns' => [
                    'GET new-action' => 'new-action'
                ]*/
            ],

        ] ;

    }
}