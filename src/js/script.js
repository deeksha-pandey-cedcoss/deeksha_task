$(document).ready(function(){
   
})
// display();
$(document).on('click','.add',function(){
    
    $name=$("#form2").val();
    $date=$("#date").val();
    $.ajax({
        url:"../handler.php",
        type:"POST",
        data:{"name":$name,"date":$date}
    }).done(function(result){
         display();
        //$(".taskaddded").html(result);
    })

})

$(document).on('click','.remove',function(){
    let id=this.getAttribute("id");
    console.log(id);
    $.ajax({
        url:"../remove.php",
        data:{"id":id},
        type:"POST"
    }).done(function(result){
       //display();
    })
})
$(document).on('click','.edit',function(){
     console.log("hello");
     let id=this.getAttribute("id");
    console.log(id);
    $("#" + id).html("Update");
    $("#" + id).attr("class","update");

})
function display()
{
    $.ajax({
        url:"../addtask.php",
        type:"POST"
    }).done(function(result){
        $(".taskaddded").html(result);
    })
}
