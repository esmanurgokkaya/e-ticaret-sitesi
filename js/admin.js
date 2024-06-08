const btn = document.querySelector("button");
const  ekle = document.querySelector("form");
btn.onclick =()=>{
    if(ekle.style.display === "block"){
        ekle.style.display ="none";
    }
    else{
        ekle.style.display ="block";

    }
    return false;
}


function confirmDelete(urun_id) {
    var userConfirmation = confirm("Ürün ID " + urun_id + " kodlu ürünü sitenizden kaldırmak istediğinizden emin misiniz?");
    if (userConfirmation) {
        var deleteForm = document.getElementById('deleteForm' + urun_id);
        if(deleteForm) {
            deleteForm.submit();
        } else {
            alert('Silme işlemi için gerekli form bulunamadı.');
        }
    }
}
