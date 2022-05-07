function control(frm)
{
    var kullaniciadi = frm.ad.value;        
    var kullanicisoyadi = frm.soyad.value;     
    var email = frm.email.value;
    var sehir = frm.sehir.value;
    var msg = frm.mesaj.value;
    var ilkpos= email.indexOf("@");
    var sonpos= email.lastIndexOf(".");
    if ( sehir==null || sehir==""  )
    {
        alert("Şehir Seçiniz");
        return false;
    }
    if ( msg==null || msg=="" || msg.length < 10 )
    {
        alert("Mesaj boş veya 10 karakterden az olamaz");
        return false;
    }
    if ( kullaniciadi==null || kullaniciadi=="" || kullaniciadi.length < 3 )
    {
        alert("Kullanıcı adı 3 karakterden az olamaz");
        return false;
    }
    if ( kullaniciadi==null || kullaniciadi=="" || kullaniciadi.length < 3 )
    {
        alert("Kullanıcı soyadı 3 karakterden az olamaz");
        return false;
    }
    if ( ilkpos<1 || sonpos<atpos+2 || sonpos+2>=email.length )
    {
        alert("Geçerli email adresi girin");
        return false;
    }      

    return true;
}