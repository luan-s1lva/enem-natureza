$(function(){
    document.getElementById("filtrar").style.display = "none";
    $("#matSel").on('change', function(){
        var select_default = $("<option>").val("").html("Selecione...");
        if ($(this).val() === '') {
            $("#assuntos").hide();
            $(".marg").hide();
        } else {
            // $("#filtrar").on('click', function() {
                // alert('entrou')
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
                        $(".marg").show();
                        $("#assuntos").on('click', function() {
                            document.getElementById("filtrar").style.display = "inline";
                            $("#filtrar").on('click', function() {
                                // alert('entrou')
                                $(".marg").empty();
                                $.ajax({
                                    url : "/temas/listar/" + $(this).val(),
                                    success: function(data) {
                                        data.forEach(function(obj) {
                                            select.append($("<option>").val(obj.id).html(obj.theme));
                                        });
                                    },
                                    type : 'GET',
                                    dataType : 'json'
                                });          
                            })
                        })
                    },
                    type : 'GET',
                    dataType : 'json'
                });
            // })
        }
    });
});