const btn = document.querySelector(".comments .comment-header button");
const post = document.querySelector(".comments .comment-body .add-comment .btn");
const addComment =document.querySelector(".comments .comment-body .add-comment")
btn.onclick =()=>{
    if (addComment.style.display === "block") {
        addComment.style.display = "none";
    } else {
        addComment.style.display = "block";
    }
    return false;

}


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