let formImage = document.getElementById("formFile");

let formPreview = document.getElementById("formPreview");



formImage.addEventListener('change', () => {
    uploadFile(formImage.files[0]);
})
// let imageForm = document.querySelector(".image-form");
//
//
// imageForm.addEventListener('click', (e) => {
//
//
//
//     if(e.target.classList.contains("fff")) {
//         uploadFile(formImage.files[0]);
//         // let formImage = document.getElementById("formFile");
//         // formImage.addEventListener('change', () => {
//         //     uploadFile(formImage.files[0]);
//         // })
//     }
//     return;
// })

function uploadFile(file) {
    console.log(file);
    let reader = new FileReader();
    reader.onload = function (e) {
        formPreview.innerHTML = `<img src="${e.target.result}" alt="photo">
        <button type="button" class="btn btn-success active" id="deleteImg">Удалить выбранное изображение</button>`;
    };

    reader.onerror = function (e) {
       alert('mistake');
    };
    reader.readAsDataURL(file);
}

// formPreview.addEventListener("click",
//     e => {
//
//         if(e.target.classList.contains("active")) {
//             let imageForm = document.querySelector(".image-form");
//             imageForm.innerHTML = `<label for="formFile" class="form-label">Основное изображение</label>
//             <input class="form-control fff" id="formFile"
//                    type="file"
//                    placeholder="Изображение"
//                    value="<?= isset($product['product_id']) ? $product['product_img'] : '' ?>"
//                    name="product_img_file"/>
//             <p></p>
//             <div class="gallery" id="formPreview">
//                 <img src=""  alt="">
//                 <button type="button" class="btn btn-success disabled" id="deleteImg" >Удалить выбранное изображение</button>
//             </div>`;
//         };
//         e.target.classList.add("disabled");
//         e.target.classList.remove("active");
//
//     }
// );



formPreview.addEventListener("click",
    e => {
    debugger
        if(e.target.classList.contains("active")) {
            let imageFormInput = document.getElementById("formFile");
            imageFormInput.setAttribute("type", "file")
            let imageForm = document.querySelector(".gallery");
            imageForm.innerHTML = `<img src=""  alt="">
                 <button type="button" class="btn btn-success disabled" id="deleteImg" >Удалить выбранное изображение</button>`;

        };
        e.target.classList.add("disabled");
        e.target.classList.remove("active");

    }
);

