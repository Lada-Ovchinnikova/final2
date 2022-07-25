let formImage = document.getElementById("formFile");

let formPreview = document.getElementById("formPreview");
let deleteImg = document.getElementById("deleteImg");

formImage.addEventListener('change', () => {
    uploadFile(formImage.files[0]);
})
function uploadFile(file) {
    let reader = new FileReader();
    reader.onload = function (e) {
        formPreview.innerHTML = `<img src="${e.target.result}" alt="photo">
<button id="deleteImg">Удалить выбранное изображение</button>`;
    };

    reader.onerror = function (e) {
       alert('mistake');
    };
    reader.readAsDataURL(file);
}
console.log('hello');