document.getElementById('1').onclick = function (){
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function(){
        if(xmlHttp.readyState === 4&&xmlHttp.status ===200){
            document.getElementById("retorno").innerHTML = xmlHttp = xmlHttp.responseText;
        };
        xmlHttp.open("GET", "./CRUD/excluir.php?$login",true);
    }
}