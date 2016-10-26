<div class="container">
    <h2 class="center-align cursive">Периодически мы собираемся под Сочи на базе Газпрома на море, чтобы вместе поработать</h2>
    <div class="slider-how-relax owl-carousel"
         data-loop="true"
         data-nav="true"
         data-autoplay="true"
         data-autoplayTimeout="3000"
         data-autoplayHoverPause="true"
         data-items="1"
         data-dots="false"
    >
        <?for($a = 1; $a <= 11; $a++):?>
        <div class="item">
            <a class="fancybox" rel="relax" href="images/relax/<?=$a?>.jpg">
                <div style="background-image: url('images/relax/<?=$a?>.jpg')" class="photoBorder"></div>
            </a>
            <!--<img src="images/relax/<?=$a?>.jpg"/>-->
        </div>
        <?endfor;?>
    </div>
</div>