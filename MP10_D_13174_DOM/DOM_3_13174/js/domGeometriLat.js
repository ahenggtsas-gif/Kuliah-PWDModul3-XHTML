var nodeLuas;
var nodeKeliling;

function init(){
    nodeLuas = document.getElementById("hasilLuas").firstChild;
    nodeKeliling = document.getElementById("hasilKeliling").firstChild;
    hitungGeometri();
}

function hitungGeometri(){
    var panjang = parseFloat(document.getElementById("panjang").value);
    var lebar = parseFloat(document.getElementById("lebar").value);
    var luas = panjang * lebar;
    var keliling = 2 * (panjang + lebar);

    nodeLuas.data = luas;
    nodeKeliling.data = keliling;

    var kotakVisual = document.getElementById("kotakVisual");
    kotakVisual.style.width = (panjang * 10) + "px";
    kotakVisual.style.height = (lebar * 10) + "px";
}