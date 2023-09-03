function sanitizeInput(){
    let applied = new RegExp("[0-9]+");
    let invalidAge = new RegExp("-[0-9]+|^0");
    let a = new RegExp("[a-zA-Z]+");
    let input = document.querySelector("#age");
    if(document.querySelector(".error-text") !== null){
        document.querySelector(".error-text").remove()
    }else if(a.test(input.value)){
        createError("Only numbers are allowed!");
        return false;
    }
    switch (input.value){
        case "":
            createError("Please fill out the field!");
            return false;
        default:
            if(invalidAge.test(input.value)){
                createError("Invalid age!");
                return false;
            }
    }
    return applied.test(input.value);
}

function createError(message, textColor){
    let err = document.createElement("span");
    let inputErr = document.querySelector("#age");
    err.className = "error-text";
    err.innerHTML = message;
    err.style.animation = "fadePop 2s";
    err.style.color = (textColor === "" || textColor === undefined) ? "rgb(197, 22, 5)" : textColor;
    inputErr.style.animation = "glowingRage 6.5s";
    setInterval(()=> {
        err.style.animation = "fadeOutSlide 1s";
        inputErr.style.animation = "";
        setInterval(() => err.remove(), 1000);
    }, 5000);
    return document.querySelector("#form-body").appendChild(err);
}