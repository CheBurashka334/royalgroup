<div class="container">
    <h2 class="center-align cursive">Рост уровня вашей компетенции и дохода неограничен</h2>
    <div class="slider-check owl-carousel"
         data-loop="true"
         data-nav="true"
         data-autoplay="true"
         data-autoplayTimeout="3000"
         data-autoplayHoverPause="true"
         data-items="1"
         data-dots="true"
    >
        <?for($a = 1; $a <= 7; $a++):?>
            <div class="item">
                <a class="fancybox" rel="check" href="images/check/<?=$a?>.png">
                    <div style="background-image: url('images/check/<?=$a?>.png')" class="photoBorder"></div>
                </a>
                <!--<img src="images/relax/<?=$a?>.jpg"/>-->
            </div>
        <?endfor;?>
    </div>
</div>
