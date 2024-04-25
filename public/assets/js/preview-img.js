function previewImg() {
    const image = document.querySelector("#image");
    const imgPreview = document.querySelector(".img-preview");

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function (e) {
        imgPreview.src = e.target.result;
    };
}
