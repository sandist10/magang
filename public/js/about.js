function changeImg_scroll() {
    var s1_h = $("#s1").offset().top;
    var s2_h = $("#s2").offset().top;
    var s3_h = $("#s3").offset().top;
    var s4_h = $("#s4").offset().top;
    var s5_h = $("#s5").offset().top;
    var s6_h = $("#s6").offset().top;
    var s7_h = $("#s7").offset().top;
    var s8_h = $("#s8").offset().top;
    var s9_h = $("#s9").offset().top;
    //console.log(s1_h, s2_h, s3_h, s4_h, s5_h, s6_h, s7_h, s8_h, s9_h);

    $(window).scroll(function () {
        var y = $(this).scrollTop();
        //console.log(y);
        if (y < s2_h) {
            // console.log("s1 top");
            $('.context_img:not(.img1)').fadeOut({})
            $('.img1').fadeIn({});
        } else if (y > s2_h && y < s3_h) {
            // console.log("s2 top");
            $('.context_img:not(.img2)').fadeOut({})
            $('.img2').fadeIn({});
        } else if (y > s3_h && y < s4_h) {
            // console.log("s3 top");
            $('.context_img:not(.img3)').fadeOut({})
            $('.img3').fadeIn({});
        } else if (y > s4_h && y < s5_h) {
            // console.log("s4 top");
            $('.context_img:not(.img4)').fadeOut({})
            $('.img4').fadeIn({});
        } else if (y > s5_h && y < s6_h) {
            // console.log("s5 top");
            $('.context_img:not(.img5)').fadeOut({})
            $('.img5').fadeIn({});
        } else if (y > s6_h && y < s7_h) {
            // console.log("s6 top");
            $('.context_img:not(.img6)').fadeOut({})
            $('.img6').fadeIn({});
        } else if (y > s7_h && y < s8_h) {
            // console.log("s7 top");
            $('.context_img:not(.img7)').fadeOut({})
            $('.img7').fadeIn({});
        } else if (y > s8_h && y < s9_h) {
            // console.log("s8 top");
            $('.context_img:not(.img8)').fadeOut({})
            $('.img8').fadeIn({});
        } else if (y > s9_h) {
            // console.log("s9 top");
            $('.context_img:not(.img9)').fadeOut({})
            $('.img9').fadeIn({});
        }

    });
}

$(window).on('load', function () {
    changeImg_scroll();
});
