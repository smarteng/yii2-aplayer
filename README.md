# yii2-daterange-picker
yii2-daterange-picker
### 使用方法

```
use jerryteng\daterangepicker\DateRangePicker;
echo DateRangePicker::widget([
        'id'=>'filtertime',
        'options' => array(
            'isTodayValid'=> true,
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
<div>
    <input type="text" id="filtertime">
</div>
```