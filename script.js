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
            $("#sprawdz").attr('style', 'color: green;'); // pokazuje sie ze odpowiedziales prawidlowo
            $("#odp").attr("style", "display:none");
            $("#tlu").attr("style", "display:none"); // znikaja oba przyciski do sprawdzenia odpowiedzi/tlumaczenia
            let numer = $("#formNext").attr('value');
            numer++;
            $("#formNext").attr('value', numer);
            $.ajax({
                url: "updateProgress.php",
                type: "POST",
                data: {kategoria: $("#kat").attr('value'), progress: $("#formNext").attr('value')}
            }).done(function(data){
                $("#next").attr("style", "display:block");
            });
        }
        else
        {
            $("#sprawdz").text("Nieprawidłowa odpowiedź!");
            $("#sprawdz").attr("style", "color: red;");
        }
        });
    });