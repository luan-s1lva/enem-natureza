function trocar() {

    var $radio1 = document.getElementById("isProfessor");
    var $div1 = document.getElementById("m1");
    var $radio2 = document.getElementById("isEstudante");
    var $div2 = document.getElementById("m2");
    var $cadastro = document.getElementById("cadastro");

    if($radio1.checked){
        $div1.removeAttribute("hidden"); 
        $cadastro.setAttribute("action", "/teacher/store");
    }else{
        $div1.setAttribute("hidden", "hidden");
    }
    if($radio2.checked){
        $div2.removeAttribute("hidden"); 
        $cadastro.setAttribute("action", "/student/store");
    }else{
        $div2.setAttribute("hidden", "hidden");
    }
}