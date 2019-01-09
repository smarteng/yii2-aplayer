# yii2-aplayer
yii2-aplayer
### 使用方法

```
use smarteng\aplayer\Aplayer;
echo Aplayer::widget([
        'id'=>'audioplayer',
        'options' => array(
            'container'=> "document.getElementById('aplayer')",
            'startDate' =>'',
            'endDate'=>'',
            //'magicSelect'=>true,
            'autoSubmit'=>true,
            'defaultText'=>'/',
            //'inputTrigger'=>'input_trigger_demo4',
            'success'=>"function(obj) { $('#filtertime').val(obj.startDate + '/' + obj.endDate).change(); }"
        )
    ]);
```

```
<div id="aplayer"></div>
```