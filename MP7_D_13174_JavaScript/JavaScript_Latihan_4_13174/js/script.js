function fn_ValForm(){
    var errorMessage = "";
    var info = "";
    var umurPeserta = document.getElementById("umur").value;
    var emailPeserta = document.getElementById("email").value;
    var validasiEmail = /^[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9]@[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9][\.][a-z0-9]{2,4}$/; //how pls
    var kodeKategori = document.getElementById("kategori").value;
    var namaKategori = "";
    var namaPeserta = document.getElementById("nama").value;


    if(namaPeserta == ""){
        errorMessage += "\n* Anda belum mengisikan Nama";
    }

    if(emailPeserta == ""){
        errorMessage += "\n* Anda belum mengisikan Email";
    }else if(!validasiEmail.test(emailPeserta)){
        errorMessage += "\n* Format Email Tidak Benar";
    }

    if(umurPeserta == ""){
        errorMessage += "\n* Anda belum mengisikan Umur";
    }else if(umurPeserta >= 15 && umurPeserta <= 25){
        info += "Peserta Mahasiswa";
    }else if(umurPeserta >25 && umurPeserta <=60){
        info += "Peserta Umum";
    }else{
        errorMessage += "\n* Umur wajib berada di rentang 15 - 60 tahun";
    }
    
    if(kodeKategori == ""){
        errorMessage += "\n* Anda belum memilih jenis acara";
    }else{
        if(kodeKategori == "W"){
            namaKategori = "Workshop";
        }
        if(kodeKategori == "S"){
            namaKategori = "Seminar";
        }
        if(kodeKategori == "L"){
            namaKategori = "Lomba Coding";
        }
    }

    if(errorMessage != ""){
        alert("Peringatan:\n" + errorMessage);
        return false;
    }else{
        alert("Terima kasih " + namaPeserta + "! Anda terdaftar di acara " +namaKategori+ " ( " +info + ")");
        return true;
    }
}
// “Terima kasih [nama] ! Anda terdaftar di acara [pilihan] [(info)].”
