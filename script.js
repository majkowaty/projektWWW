$(document).ready(function() {
    $("#rozpocznij").on("click", function(){
        $("#wybor").attr("style", "display:block");
        });
    $("#tlu").on("click", function(){
        $("#poprawne").attr("style", "display:block");
        });
    $("#odp").on("click", function(){
        const odpowiedz = $("#odpowiedz").val();
        const poprawne = $("#poprawne").text();
        if(odpowiedz == poprawne){
            $("#sprawdz").text("Prawidłowa odpowiedź!");
            $("#sprawdz").attr('style', 'color: green;');
            $("#odp").attr("style", "display:none");
            $("#tlu").attr("style", "display:none");
            $("#next").attr("style", "display:block");
            let numer = $("#formNext").attr('value');
            numer++;
            $("#formNext").attr('value', numer);
        }
        else
        {
            $("#sprawdz").text("Nieprawidłowa odpowiedź!");
            $("#sprawdz").attr("style", "color: red;");
        }
        });
    });