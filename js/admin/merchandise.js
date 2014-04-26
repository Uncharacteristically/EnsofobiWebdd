$(document).ready(function(){
        var width=$(window).width();
        var height=$(window).height();
        $("#merchandise-detail").css("top",((height-800)/2)+"px");
        $("#merchandise-detail").css("left",((width-600)/2)+"px");
        var threeDSwiper=$('#tees').swiper({
            pagination:"#pagination1",
            slidesPerView:"auto",
            centeredSlides:true,
            initialSlide:3,
            offsetSlidesAfter:1,
            loop:true,
            paginationClickable: true
         
           
        });
        var threeDSwiper2=$('#jeans').swiper({
           pagination:"#pagination2",
            slidesPerView:"auto",
            centeredSlides:true,
            initialSlide:4,
            loop:true,
            paginationClickable: true
           
        });
        $(".more_click").click(function(){
            var id=$(this).attr("data-id");
            $("#merchandise-detail").fadeIn();
            $("#bigmask").fadeIn();
        });
        $('#arrow-left-1').on('click', function(e){
            e.preventDefault()
            threeDSwiper.swipePrev()
        })
        $('#arrow-right-1').on('click', function(e){
            e.preventDefault()
            threeDSwiper.swipeNext()
        })
        $('#arrow-left-2').on('click', function(e){
            e.preventDefault()
            threeDSwiper2.swipePrev()
        })
        $('#arrow-right-2').on('click', function(e){
            e.preventDefault()
            threeDSwiper2.swipeNext()
        })
});