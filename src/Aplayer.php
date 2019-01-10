<?php
namespace smarteng\aplayer;

use yii\helpers\Json;
use yii\base\Widget;
use yii\web\View;
use yii\web\JsExpression;

/**
 * DateRangePicker renders a DatePicker range input.
 *
 */
class Aplayer extends Widget
{
    /**
     * @var string the attribute name for date range (to Date)
     */
    public $id;
    /**
     * @var array HTML attributes for the date to input
     */
    public $options = array();

    /**
     * @inheritdoc
     */
    public function run()
    {
        $this->registerAssets();
        parent::run();
    }

    /**
     * Registers required script for the plugin to work as DateRangePicker
     */
    public function registerAssets()
    {
        AplayerAsset::register($this->view);

        $key = __CLASS__ . '#' . $this->id;
        $this->options['container'] =  new JsExpression($this->options['container']);
        $jsOptions = Json::encode($this->options);
        $js = <<<JS
        var ap = new APlayer({$jsOptions});
        ap.init();
JS;

        $this->view->registerJs($js, View::POS_READY, $key);
    }

}
