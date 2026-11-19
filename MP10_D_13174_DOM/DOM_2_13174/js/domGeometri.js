var nodeLuas;
var nodeKeliling;

function init() {
    nodeLuas = document.getElementById("hasilLuas").firstChild;
    nodeKeliling = document.getElementById("hasilKeliling").firstChild;
    hitungGeometri();
}

function hitungGeometri() {
    var panjang = parseFloat(document.getElementById("panjang").value);
    var lebar = parseFloat(document.getElementById("lebar").value);
    var luas = panjang * lebar;
    var keliling = 2 * (panjang + lebar);

    nodeLuas.data = luas;
    nodeKeliling.data = keliling;
}