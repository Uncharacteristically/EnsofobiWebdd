<?php
$ratings=array(
    "1"=>0,
    "2"=>0,
    "3"=>5,
    "4"=>3,
    "6"=>7,
);

?>

<div id="page-content">
    <h1 id="page-header">Merchandise</h1>
    <h4>T-Shirts</h4>
    <div class="swiper-container" id="tees">
        <div class="swiper-wrapper">
            <?php 
                for($i=1;$i<6;$i++){
                    echo "<div class='swiper-slide'>"
                    ."<div class='slide_container'>"
                            ."<div class='slide_pad'>"
                            . "<div class='rating'>"
                                    . "<span class='bubble'>26</span>"
                                    . "<span>☆</span>"
                                    . "<span>☆</span>"
                                    . "<span  class='score'>☆</span>"
                                    . "<span  class='score'>☆</span>"
                                    . "<span  class='score'>☆</span>"
                                    
                              . "</div>"
                            ."<div class='more_click' data-id='more_slide_1_$i'>More...</div>"
                            ."<div class='more_slide' id='more_slide_1_$i'>"
                                . "<div class='less_click'data-id='more_slide_1_$i'>Less..</div>"
                            . "</div>"
                            . "<div class='slide_image'>T-Shirt Image #$i"
                                
                            . "</div>"
                            . "<div class='slide_title'>Title #$i</div>"
                            . "<div class='slide_content'> 
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p><p>
                                Morbi ut diam sodales, consequat urna vulputate, eleifend justo. Mauris fringilla augue sed neque
                              </div>
                             </div>"
                            
                            
                    ."</div>"
                   . "</div>";
                }
            ?>
        </div>
        <a class="arrow-left" id="arrow-left-1" href="#"></a> 
        <a class="arrow-right" id="arrow-right-1" href="#"></a>
        <div class="pagination" id="pagination1"></div>
</div> 
    
    <h4>Jeans</h4>
     <div class="swiper-container" id="jeans">
    <div class="swiper-wrapper">
            <?php 
                for($i=1;$i<12;$i++){
                    echo "<div class='swiper-slide'>"
                    ."<div class='slide_container'>"
                            ."<div class='slide_pad'>"
                            . "<div class='slide_image'>Jeans Image #$i</div>"
                            . "<div class='slide_title'>Title #$i</div>"
                            . "<div class='slide_content'> 
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p><p>
                                Morbi ut diam sodales, consequat urna vulputate, eleifend justo. Mauris fringilla augue sed neque
                              </div>
                             </div>"
                            ."<div class='more_click' data-id='more_slide_2_$i'>More...</div>"
                            ."<div class='more_slide' id='more_slide_2_$i'>"
                                . "<div class='less_click'data-id='more_slide_2_$i'>Less..</div>"
                            . "</div>"
                    ."</div>"
                   . "</div>";
                }
            ?>
        </div>
         <a class="arrow-left"  id="arrow-left-2" href="#"></a> 
         <a class="arrow-right" id="arrow-right-2" href="#"></a>
         <div class="pagination" id="pagination2"></div>
     </div>

    <h4>Category 3</h4>
    <h4>Category 4</h4>
    <h4>Category 5</h4>
</div>		
