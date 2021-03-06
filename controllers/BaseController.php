<?php


namespace app\controllers;

use app\models\Menu;
use app\models\SiteSettings;
use yii\web\Controller;
class BaseController extends Controller
{
    public $layout = 'index';

    public function __construct($id, $module, $config = [])
    {
        $menus = Menu::find()->where(['publish' => 1])->all();
        $settings = SiteSettings::find()->where(['id' => 1])->one();
        $arrMenu = [];
        foreach ($menus as $menu) {
            if($menu->parent_id == 0) {
                $arrMenu[$menu->id] = [
                    'title' => $menu->title,
                    'alias' => $menu->alias,
                ];
            } else {
                if(array_key_exists($menu->parent_id, $arrMenu)) {
                    $arrMenu[$menu->parent_id]['children'][] = [
                        'title' => $menu->title,
                        'alias' => $menu->alias,
                    ];
                }
            }
        }

        $this->view->params['menus'] = $arrMenu;
        $this->view->params['settings'] = $settings;
        parent::__construct($id, $module, $config);

    }
}