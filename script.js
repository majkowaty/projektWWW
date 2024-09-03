$(document).ready(function() {
    $("#rozpocznij").on("click", function(){
        $("#wybor").attr("style", "display:block");
        });
    $("#tlu").on("click", function(){
        $("#poprawne").attr("style", "display:block");
        $("#angielskie-container").attr("style", "display:block");
        });
    $("#odp").on("click", function(){
        const odpowiedz = $("#odpowiedz").val();
        const poprawne = $("#poprawne").text();
        if(odpowiedz == poprawne){
            $("#sprawdz").text("Prawidłowa odpowiedź!");
            $("#sprawdz").attr('style', 'color: green;'); // pokazuje sie gdy odpowiedziales prawidlowo
            $("#odp").attr("style", "display:none");
            $("#tlu").attr("style", "display:none"); // znikaja oba przyciski do sprawdzenia odpowiedzi/tlumaczenia
            let numer = $("#formNext").attr('value');
            numer++;
            $("#formNext").attr('value', numer);
            $("#zglos").attr("style", "display:block"); // pokazuje sie przycisk do zglaszania bledu w fiszce
            $.ajax({ // ustala progress uzytkownika w konkretnej kategorii
                url: "updateProgress.php",
                type: "POST",
                data: {kategoria: $("#kat").attr('value'), progress: $("#formNext").attr('value')}
            }).done(function(data){
                $("#next").attr("style", "display:block");
            });
        }
        else
        {
            $("#sprawdz").text("Nieprawidłowa odpowiedź!"); // pokazuje sie gdy odpowiedziales blednie
            $("#sprawdz").attr("style", "color: red;");
        }
        });
        $("#zglos").on("click", function(){
            $.ajax({ // wysyla zgłoszenie o (aktualnej) błędnej fiszce
                url: "insertReport.php",
                type: "POST",
                data: {pierwsze: $("#pierwsze").text(), poprawne: $("#poprawne").text()}
            }).done(function(data){
                $("#sprawdz").text("Wysłano zgłoszenie o błędzie!");
                $("#sprawdz").attr('style', 'color: orange;');
            });
            });
    });