
const btn = document.querySelector(".comments .comment-header .btn-add");
const post = document.querySelector(".comments .comment-body .add-comment .btn");
const addComment = document.querySelector(".comments .comment-body .add-comment");

btn.addEventListener("click", function(e) {
    if (addComment.classList.contains("hidden")) {
        addComment.classList.remove("hidden");
    } else {
        addComment.classList.add("hidden");
    }
});



document.querySelector(".comments  .more-comment button").addEventListener("click", function() {
    var content = document.querySelector(".comments .comment-body");
    if (content.style.height === "400px") {
        content.style.height = "auto";
        this.textContent = "Daha Az yorum Göster";
    } else {
        content.style.height = "400px";
        this.textContent = "Daha Fazla yorum Göster";
    }
});


document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.comments .comment-body .add-comment form');
    const chatBox = document.querySelector('.comments .comment-body');

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(form);
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "php/insertcomment.php", true);

        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    chatBox.innerHTML = xhr.responseText;
                    form.reset(); // Formu temizle
                } else {
                    console.error('Error:', xhr.statusText);
                }
            }
        };

        xhr.send(formData);
    });

    // Belirli aralıklarla yeni yorumları çekme işlemi
    setInterval(() => {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "php/insertcomment.php", true);

        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    chatBox.innerHTML = xhr.responseText;
                } else {
                    console.error('Error:', xhr.statusText);
                }
            }
        };

        xhr.send();
    }, 500);
});
