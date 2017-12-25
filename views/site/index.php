<?php
use app\models\Photo;
use yii\helpers\Html;
?>

<section class="main clearfix">

<?php
//$photos = Photo::find()->asArray()->where(array('id' => Yii::$app->user->id));
$photos = Photo::find()->where(array('id' => Yii::$app->user->id))->asArray()->all();

foreach ($photos as $photo){
?>

    <div class="work">
        <a href="site/post?photo_id=<?=$photo['photo_id']?>">
            <img src="<?='uploads/'.$photo['link']?>" class="media" alt=""/>
            <div class="caption">
                <div class="work_title">
                    <h1><?=$photo['link']?></h1>
                </div>
            </div>
        </a>
    </div>

   <?php
}
?>

</section><!-- end main -->
