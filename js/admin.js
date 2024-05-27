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

function openUpdateModal(urunId) {
    // Formu görünür yap
    // AJAX ile sunucudan ürün bilgilerini al
    fetch('/get-product-details/' + urunId)
        .then(response => response.json())
        .then(data => {
            // Form alanlarını ürün bilgileriyle doldur
            document.getElementById('urun_id').value = data.urun_id;
            document.getElementById('urun_adi').value = data.urun_adi;
            document.getElementById('beden').value = data.beden;
            document.getElementById('renk').value = data.renk;
            document.getElementById('aciklama').value = data.aciklama;
            document.getElementById('marka').value = data.marka;
            document.getElementById('kumas').value = data.kumas;
            document.getElementById('fiyat').value = data.fiyat;
            document.getElementById('indirim').value = data.indirim;
            document.getElementById('kat_id').value = data.kategori_id;
        });

        document.getElementById('overlay').style.display = 'block';
    
        // Formu görünür yap ve sayfanın ortasına al
        var updateModal = document.getElementById('updateModal');
        updateModal.style.display = 'block';
        updateModal.style.top = '50%';
        updateModal.style.left = '50%';
        updateModal.style.transform = 'translate(-50%, -50%)';
}

// Ürün güncelleme işlemini gerçekleştiren fonksiyon
function updateProduct() {
    // Form verilerini FormData nesnesi olarak al
    var formData = new FormData(document.getElementById('updateForm'));

    // AJAX ile form verilerini sunucuya gönder
    fetch('/update-product', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if(response.ok) {
            alert('Ürün başarıyla güncellendi!');
            // Formu kapat
            document.getElementById('updateModal').style.display = 'none';
        } else {
            alert('Bir hata oluştu. Ürün güncellenemedi.');
        }
    });

    document.getElementById('updateModal').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
}