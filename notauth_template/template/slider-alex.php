<div class="container">
    <div class="center-align h3">
        <b>Наш сайт уверенно растет в течении года: рейтинг Alexa</b><br/>
        Он показывает изменение места сайта в мировом рейтинге<br/>
        За основу взят параметр: посещаемость сайта<br/><br/>
        Как видно из картинок ниже, сотрудничество с нами<br/>
        выглядит более привлекательно на фоне других систем<br/>
        (отчет за период: сентябрь 2015 - август 2016)
    </div>
    <div class="slider-alex owl-carousel"
         data-loop="true"
         data-nav="true"
         data-autoplay="true"
         data-autoplayTimeout="3000"
         data-autoplayHoverPause="true"
         data-items="1"
         data-dots="true"
    >
        <?for($a = 1; $a <= 5; $a++):?>
            <div class="item">
                <div style="background-image: url('images/rating/<?=$a?>.png')" class="photoBorder"></div>
                <!--<img src="images/relax/<?=$a?>.jpg"/>-->
            </div>
        <?endfor;?>
    </div>
</div>