<?php
use app\models\Photo;
?>

<?php
$photo = Photo::find()->where(['photo_id' => $_GET['photo_id']])->asArray()->one();

?>

<body>

<section class="main clearfix">

    <section class="top">
        <img src="<?='/uploads/'.$photo['link']?>" class="img-rounded center-block" alt=""/>
        <div class="wrapper content_header clearfix">

            <div class="work_nav">

                <ul class="btn clearfix">
                    <li><a href="#" class="previous" data-title="Previous"></a></li>
                    <li><a href="/" class="grid" data-title="Portfolio"></a></li>
                    <li><a href="#" class="next" data-title="Next"></a></li>
                </ul>

            </div><!-- end work_nav -->
            <h1 class="title"><?=$photo['link']?></h1>
        </div>
    </section><!-- end top -->

    <section class="wrapper">
        <div class="content">



            <h1>H1 : Quisque non semper justo</h1>
            <h2>H2 : Quisque non semper justo</h2>
            <h3>H3 : Quisque non semper justo</h3>
            <h4>H4 : Quisque non semper justo</h4>
            <h5>H5 : Quisque non semper justo</h5>
            <h6>H6 : Quisque non semper justo</h6>
        </div><!-- end content -->
    </section>
</section><!-- end main -->

</body>