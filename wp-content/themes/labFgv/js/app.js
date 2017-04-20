$(document).foundation();
$(".qscontent").hide(100);
$(".pessoa").click(function(){
    $id = this.getAttribute("id");
    $text = this.getAttribute("value");
    $nome = this.getAttribute("name");
    $cargo = this.getAttribute('cargo');
    $path = this.getAttribute('image');
    
    $(".qscontent").hide(100);
    $("#"+$cargo+"Foto").css("background-image","url("+$path+")");
    $("#" + $cargo + "Texto").html(
        "<h1>"+$nome+"</h1></br><p>"+$text+"</p>"
    );
    $("#"+$cargo+"Content").show(300);
    $("#"+$cargo+"Foto").show(300);
    $("#"+$cargo+"Texto").show(300);
});