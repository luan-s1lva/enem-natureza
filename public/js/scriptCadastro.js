function trocar() {
    var $radio1 = document.getElementById("isProfessor");
    var $div1 = document.getElementById("m1");
    var $radio2 = document.getElementById("isEstudante");
    var $div2 = document.getElementById("m2");
    if($radio1.checked){
        $div1.removeAttribute("hidden"); 
    }else{
        $div1.setAttribute("hidden", "hidden");
    }
    if($radio2.checked){
        $div2.removeAttribute("hidden"); 
    }else{
        $div2.setAttribute("hidden", "hidden");
    }
}