$(document).ready(function(){

    $("#login").click(function(){
        if ($("#input1").val()=="") {
            $("#span1").text("!require email");
        }
        else{
            $("#span1").text("");
        }
        if ($("#input2").val()=="") {
            $("#span2").text("!require password");
        }
        else{
            $("#span2").text("");
        }
        if($("#input1").val()!="" && $("#input2").val()!="")
        {
    
        return true;	
        }
        else{
        return false;
        }
        })
    
    })