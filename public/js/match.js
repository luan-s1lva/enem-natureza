$(function () {
    partidas = null;
    current = 0;
    $.get('/historico/listar/partidas', function (data) {
        partidas = data;
        graph();
    }, 'json');

    function graph() {
        var ctx = document.getElementsByClassName("line-chart");
        var chartGraph = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Acertos", "Erros"],
                datasets: [{
                    data: [10, 5],
                    backgroundColor: ['rgb(54, 162, 235)', 'rgb(255, 99, 132)'],
                    hoverOffset: 4,
                    
                
                }]
            }
        });

    };


});

