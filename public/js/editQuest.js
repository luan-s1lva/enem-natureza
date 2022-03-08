function editarPergunta(){
    console.log("foiii")
    for (i = 0; i < 4; i++) {
        $('input[data-pos="' + i + '"]').html(alternatives[i].texto);

    }
}