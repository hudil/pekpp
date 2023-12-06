<?php

/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets\admin;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'adminassets/plugins/custom/fullcalendar/fullcalendar.bundle.css',
        'adminassets/plugins/custom/datatables/datatables.bundle.css',
        'adminassets/plugins/global/plugins.bundle.css',
        'adminassets/css/style.bundle.css'
    ];
    public $js = [
        'adminassets/plugins/global/plugins.bundle.js',
        'adminassets/js/scripts.bundle.js',
        'adminassets/plugins/custom/fullcalendar/fullcalendar.bundle.js',
        'adminassets/plugins/custom/datatables/datatables.bundle.js',
        'adminassets/js/widgets.bundle.js',
        'adminassets/js/custom/widgets.js',
        'adminassets/js/custom/apps/chat/chat.js',
        'adminassets/js/custom/utilities/modals/upgrade-plan.js',
        'adminassets/js/custom/utilities/modals/create-app.js',
        'adminassets/js/custom/utilities/modals/users-search.js'
    ];
    // public $depends = [
    //     'yii\web\YiiAsset',
    //     'yii\bootstrap5\BootstrapAsset'
    // ];
}
