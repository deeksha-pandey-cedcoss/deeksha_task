$(document).ready(function(){
})
display();
// to add task
$(document).on('click','.add',function(){
    $name=$("#form2").val();
    $date=$("#date").val();
    $.ajax({
        url:"../handler.php",
        type:"POST",
        data:{"name":$name,"date":$date,"action":"addtask"}
    }).done(function(){
         display();
      
    })
})
// to remove a task
$(document).on('click','.remove',function(){
    let id=this.getAttribute("id");
    console.log(id);
    $.ajax({
        url:"../remove.php",
        data:{"id":id,"action":"remove"},
        type:"POST"
    }).done(function(){
       display();
    })
})
// to edit a task
$(document).on('click','.edit',function(){
    let id= this.getAttribute("id");
    $name=$("#name"+id).attr("disabled",false).val();
    console.log($name);
    $.ajax({
        url:"../update.php",
        type:"POST",
         data:{"id":id,"name":$name}
    }).done(function(){
       console.log(result);
    })
})
// complted task
$(document).on('click','.check',function(){
    let id=this.getAttribute("id");
    $name=$("#name"+id).val();
    $date=$("#date"+id).val();
    $.ajax({
        url:"../handler.php",
        type:"POST",
        data:{"id":id,"name":$name,"date":$date,"action":"addcompleted"}
    }).done(function(){
         displaycompleted();
    })
})
// display of active task
function display()
{
    $.ajax({
        url:"../display.php",
        type:"POST"
    }).done(function(result){
        $(".taskaddded").html(result);
    })
}
// display of completed task
function displaycompleted()
{
    $.ajax({
        url:"../displaycompleted.php",
        type:"POST"
    }).done(function(result){
        $(".completedtask").html(result).show();
        $(".taskaddded").hide();
    })
}
// remove completed task
$(document).on('click','.removecompleted',function(){
    let id=this.getAttribute("id");
    console.log(id);
    $.ajax({
        url:"../remove.php",
        data:{"id":id,"action":"removecompleted"},
        type:"POST"
    }).done(function(){
       displaycompleted();
    })
})
$(document).on('click','.completed',function(){
    displaycompleted();
})
$(document).on('click','.incomplete',function(){
    display();
})
$(document).on('click','.tasks',function(){
    display();
    displaycompleted();
})
// clear the completed list
$(document).on('click','.clear',function(){
    $.ajax({
        url:"../remove.php",
        data:{"action":"removeallcompleted"},
        type:"POST"
    }).done(function(){
       displaycompleted();
    })
})
