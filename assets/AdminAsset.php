<?php

/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets/admin/plugins/global/plugins.bundle.css',
        'assets/admin/plugins/custom/prismjs/prismjs.bundle.css',
        'assets/admin/css/style.bundle.css',
        'assets/admin/css/themes/layout/header/base/light.css',
        'assets/admin/css/themes/layout/header/menu/light.css',
        'assets/admin/css/themes/layout/brand/dark.css',
        'assets/admin/css/themes/layout/aside/dark.css'
    ];
    public $js = [
        'assets/admin/plugins/global/plugins.bundle.js',
        'assets/admin/plugins/custom/prismjs/prismjs.bundle.js',
        'assets/admin/js/scripts.bundle.js',
        'assets/admin/js/pages/custom/contacts/edit-contact.js',
        'assets/admin/js/crud/insert.js'
    ];
    // public $depends = [
    //     'yii\web\YiiAsset',
    //     'yii\bootstrap5\BootstrapAsset'
    // ];
}
