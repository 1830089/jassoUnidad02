window.onload=iniciar;

function iniciar(){
    //traemos el elemento completo
    var txtPeso= document.getElementById("txtpeso");

    //asignamos el valor del elemento
    var ValorPeso= txtPeso.value;

    var txtAltura= document.getElementById("txtAltura");

    var valorAltura=txtAltura.value;

    var imc= ValorPeso/(valorAltura * valorAltura);

    var imprimir= document.getElementById("IMC");

    imprimir.innerHTML=imc;
}