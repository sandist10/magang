 $(function() {
     //scrolling();
     $("#menu_btn").click(function() {
         document.getElementById("myNav").style.width = "455px";
     })
     $(".closebtn").click(function() {
         document.getElementById("myNav").style.width = "0%";
     })
     $("#s_about_con span").mouseover(function() {
         $(".hidden_a_about").css("display", "block");
     })

     $("#s_about_con").mouseleave(function() {
         $(".hidden_a_about").css("display", "none");
     })
     $("#s_course_con span").mouseover(function() {
         $(".hidden_a_course").css("display", "block");
     })

     $("#s_course_con").mouseleave(function() {
         $(".hidden_a_course").css("display", "none");
     })
     $("#s_student_con span").mouseover(function() {
         $(".hidden_a_student").css("display", "block");
     })

     $("#s_student_con").mouseleave(function() {
         $(".hidden_a_student").css("display", "none");
     })

     $("#s_faculty_con span").mouseover(function() {
         $(".hidden_a_faculty").css("display", "block");
     })

     $("#s_faculty_con").mouseleave(function() {
         $(".hidden_a_faculty").css("display", "none");
     })

     $("#s_admi_con span").mouseover(function() {
         $(".hidden_a_admi").css("display", "block");
     })

     $("#s_admi_con").mouseleave(function() {
         $(".hidden_a_admi").css("display", "none");
     })
     $("#s_contact_con span").mouseover(function() {
         $(".hidden_a_contact").css("display", "block");
     })

     $("#s_contact_con").mouseleave(function() {
         $(".hidden_a_contact").css("display", "none");
     })

     $("#fixed_topbtn").click(function() {
         $("html, body").animate({ scrollTop: 0 }, 600);
     })

     $('meta[property=og\\:url]').attr('content', window.location.href);
     document.getElementById("line").onclick = function() {
         window.open('https://lineit.line.me/share/ui?url=' + encodeURIComponent(window.location.href), "_blank", "toolbar=yes,location=yes,directories=no,status=no, menubar=yes,scrollbars=yes,resizable=no, copyhistory=yes,width=600,height=400")
     }

 })
