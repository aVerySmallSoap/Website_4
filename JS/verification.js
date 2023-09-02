function sanitizeInput(){

    const applied = new RegExp("[0-9]+");
    const input = document.querySelector("#age");
    if(document.querySelector(".error-text") === null) {
        let err = document.createElement("span");
        err.className = "error-text";
        err.innerHTML = "test text";
        err.style.flex = "1 0 100%";
        err.style.textAlign = "center";
        document.querySelector("#form-body").appendChild(err);
        return false;
    }
    return applied.test(input.value);
}