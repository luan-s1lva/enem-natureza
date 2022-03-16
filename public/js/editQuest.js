$(function(){
    $("#matSel").on('change', function(){
        var select_default = $("<option>").val("").html("Selecione...");
        if ($(this).val() === '') {
            $("#assuntos").hide();
        } else {
            var select = $("select[name=tema_id]");
            select.empty();
            select.append(select_default);
            $.ajax({
                url : "/temas/listar/" + $(this).val(),
                success : function(data) {
                    data.forEach(function(obj) {
                        select.append($("<option>").val(obj.id).html(obj.theme));
                    });
                    $("#assuntos").show();
                },
                type : 'GET',
                dataType : 'json'
            });
        }
    });
});