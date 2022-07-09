$(function () {
    $.get('/historico/listar/partidas', function (data) {
        graph(data.acertos, data.erros);
    }, 'json');

    function graph(acertos, erros) {
        var ctx = document.getElementsByClassName("pizza");
        var chartGraph = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Acertos", "Erros"],
                datasets: [{
                    data: [acertos, erros],
                    backgroundColor: ['rgb(54, 162, 235)', 'rgb(255, 99, 132)'],
                    hoverOffset: 4,
                    
                
                }]
            }
        });

    };


});

