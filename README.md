# yii2-aplayer
yii2-aplayer
### 使用方法

```
use smarteng\aplayer\Aplayer;
<?= \smarteng\aplayer\Aplayer::widget([
    'id'=>'audioplayer',
    'options' => [
        'container'=> "document.getElementById('aplayer')",
        "audio" => [
                [
                    "name"=> '前前前世',
                    "artist"  => 'RADWIMPS',
                    "url" => 'https://moeplayer.b0.upaiyun.com/aplayer/yourname.mp3',
                    "cover" =>  'https://moeplayer.b0.upaiyun.com/aplayer/yourname.jpg'
                ]
        ]
    ]
]);?>
```

```
<div id="aplayer"></div>
```
### 具体的配置信息： 
https://aplayer.js.org/#/zh-Hans/

### 使用的项目：

[英语课](https://www.yingyuke.net/ "英语课"). 

- https://www.yingyuke.net/