function trocar() {

    var $radio1 = document.getElementById("isProfessor");
    var $div1 = document.getElementById("m1");
    var $radio2 = document.getElementById("isEstudante");
    var $div2 = document.getElementById("m2");
    var $cadastro = document.getElementById("cadastro");
    var $checkAluno = document.getElementById("check_aluno");
    var $checkProfessor = document.getElementById("check_professor")

    if ($radio1.checked) {
        $div1.removeAttribute("hidden");
        $checkAluno.removeAttribute("required");
        $checkProfessor.setAttribute("required", "required");
        $cadastro.setAttribute("action", "/teacher/store");
    } else {
        $div1.setAttribute("hidden", "hidden");
    }
    if ($radio2.checked) {
        $div2.removeAttribute("hidden");
        $checkProfessor.removeAttribute("required");
        $checkAluno.setAttribute("required", "required");
        $cadastro.setAttribute("action", "/student/store");
    } else {
        $div2.setAttribute("hidden", "hidden");
    }
}