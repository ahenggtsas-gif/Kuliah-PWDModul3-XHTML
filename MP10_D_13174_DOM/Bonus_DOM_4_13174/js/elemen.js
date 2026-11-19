function ubahLabelBangun(){
    var jenisBangun = document.getElementById("jenisBangun").value;
    var labelUkuran = document.getElementById("labelUkuran");
    var bentukVisual = document.getElementById("bentukVisual");

    if (jenisBangun === "persegi"){
        labelUkuran.firstChild.data = "Panjang Sisi (cm)";
        bentukVisual.style.borderRadius = "0px";
        bentukVisual.style.backgroundColor = "coral";
    }else {
        labelUkuran.firstChild.data = "Jari-jari / r (cm)";
        bentukVisual.style.borderRadius = "50%";
        bentukVisual.style.backgroundColor = "lightgreen";
    }
}

function hitungBangun(){
    var jenisBangun = document.getElementById("jenisBangun").value;
    var nilaiUkuran = parseFloat(document.getElementById("nilaiUkuran").value);
    var luas = 0;
    var keliling = 0;

    if(jenisBangun === "persegi"){
        luas = nilaiUkuran * nilaiUkuran;
        keliling = 4 * nilaiUkuran;
    }else {
        luas = (3.14 * nilaiUkuran * nilaiUkuran).toFixed(2);
        keliling = (2 * 3.14 * nilaiUkuran).toFixed(2);
    }

    document.getElementById("bonusLuas").firstChild.data = luas;
    document.getElementById("bonusKeliling").firstChild.data = keliling;
}
