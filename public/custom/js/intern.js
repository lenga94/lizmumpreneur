var x = 1;

$(".add_another_workPlan").click(function(){
    if(x < 10){
        $(".another_plan").append(field);
        x++;
    }else{
        alert("max ten field allowed");
    }
});
