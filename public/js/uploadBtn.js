let submitDocument = document.getElementById("uploadFile");
let submitButton = document.getElementById("submitFile");
let chosenFile = document.getElementById("chosenFile");

submitButton.disabled = true;

submitDocument.addEventListener("change", function () {
    if (submitDocument.files.length > 0) {
        let file = submitDocument.files[0];
        submitButton.disabled = false;
        submitButton.className + "opacity-100";
        chosenFile.innerHTML += file.name;
        chosenFile.className += "bg-gray-100 text-gray-700 rounded-lg my-2 p-2";
    }
});
