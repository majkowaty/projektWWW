$(document).ready(function() {
    $(".delete").on("click", (function(){
        let guzik=$(this);
        let tr = guzik.closest('tr');
        let id= tr.find('td.id').text();
        let row = guzik.parent().parent();
        $.post("usunFiszke.php", {id:id}, function(data){
            row.remove();
        })
    }))

    $(".edit").on("click", (function(){
        let g=$(this);
        let tr = g.closest('tr');
        let id = tr.find('td.id').text();
        location.href = "edytujFiszke.php?id="+id;
    }))
})