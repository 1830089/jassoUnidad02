//DOM
document.addEventListener("click",function(e){
    let ntabla= document.getElementById("tabla").value;
    let nResultados= document.getElementById("resultados").value;
    let imprime=document.getElementById("resultados");

    imprime.innerHTML=" ";
    if((ntabla>=1&&ntabla<=50)&&(nResultados<=20)){
        let table = "<table>";
        let dato = 0;
        for (let i = 0; i <= nResultados; i++) {
            table += "<tr>";
            dato = ntabla*i;
            table += "<td>" +ntabla + "</td>";
            table += "<td>" + " x " + "</td>"; 
            table += "<td>" + i + "</td>";
            table += "<td>" + " = " + "</td>";
            table += "<td>" +dato + "</td>";   
            table += "</tr>";
        }
    table += "</table>";
    imprime.innerHTML = table;

    }else{
        imprimir=document.getElementById("error_tabla");
        mensaje="ingrese una tabla menor a 50 y el total de resultados debe ser inferior a 20";
        alert(mensaje);
    }
})