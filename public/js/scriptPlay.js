$(function () {
    quests = null;
    current = 0;
    vidas = 3;
    time = null;
    timer = null;
    contAcertos = 0;
    assuntos = $("#assuntos").data('array');
    //Animação antes de carregar as perguntas;
    if (assuntos.ids.length == 0)
    {
        $.get('/sortear', function (data) {
            quests = data;
            feedQuest();
        }, 'json');
    }
    else
    {
        $.post('/sortear/especifico', {'ids[]' : assuntos.ids, '_token' : $("#_token").data('value')}, function (data) {
            quests = data;
            feedQuest();
        }, 'json');
    }
    
    $('.resposta').on('click', function () {
        if (quests[current].alternatives[$(this).data('pos')].isTrue) {
            alert("Você acertou, parabéns!");
            contAcertos++;
            pontuar(quests[current].dificulty);
            // pontuar
        }
        else {
            alert('Você errou, tente outra vez.');
            lostQuestion();
        }
        nextQuestion();
    });
});

function changeStyle() {
    discipline = quests[current].theme.discipline.name.toLowerCase();
    $('body').css('background-image', 'url("/img/bg-' + discipline + '.png")');
    $('#timer_img').attr('src', '/img/timer_' + discipline + '.gif');
}

function feedQuest() {
    if (timer !== null) {
        clearInterval(timer);
    }
    if (current < quests.length) {
        $('#disciplina').html(quests[current].theme.discipline.name);
        $('#nivel').html(translateDificulty(quests[current].dificulty));
        $('#titulo').html(quests[current].textQuest);
        for (i = 0; i < 4; i++) {
            $('button[data-pos="' + i + '"]').html(quests[current].alternatives[i].texto)

        }

        changeStyle();
        startTimer();
    }
    else {
        alert("Você respondeu todas as perguntas!\nAcertou: " + contAcertos + " Perguntas, parabéns!")
        window.location.replace('/');
        
    }
}

function lostQuestion() {
    vidas--;
    $('#vidas').find("img:first-child").remove();
    if (vidas == 0) {

        alert("Você gastou todas suas vidas! Mais sorte na próxima vez!");
        window.location.replace('/');
        
    }
}

function nextQuestion() {
    current++;
    feedQuest();
}

function startTimer() {
    time = 150;
    $("#cronometro").html(time);
    timer = setInterval('runTimer()', 1000);
}

function runTimer() {
    time--;
    $("#cronometro").html(time);
    if (time == 0) {
        alert("Tempo Esgotado! Você perdeu uma vida!");
        lostQuestion();
        nextQuestion();
    }
}

function translateDificulty(number) {
    switch (number) {
        case 1:
            return 'Fácil';
            break;
        case 2:
            return 'Médio';
            break;
        case 3:
            return 'Difícil';
            break;
    }

    function pontuar(number) {
        pontos = 0;
        switch (number) {
            case 1:
                return pontos += 10;
                break;
            case 2:
                return pontos += 20;
                break;
            case 3:
                return pontos += 30;
                break;
        }     
    }
}   