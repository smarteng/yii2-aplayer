<?php
/**
 * @copyright Copyright (c) 2013-2016 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace smarteng\aplayer;

use yii\web\AssetBundle;

/**
 * DateRangePickerAsset
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\datepicker
 */
class AplayerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/smarteng/yii2-aplayer/src/assets';

    public $css = [
        'APlayer.min.css'
    ];
    public $js = [
        'APlayer.min.js'
    ];
}
