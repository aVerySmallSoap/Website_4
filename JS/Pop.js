function popOut(message) {
    let div = document.createElement("div");
    div.className = "pop-container";
    div.innerHTML =
        "<div class='pop-message'>" +
        "<span class='message'> You have chosen "+message+"</span>" +
        "</div>"
    div.style.animation = "slideTop 2s";
    document.body.prepend(div);
    setInterval(
        () => {
            div.style.animation = "slideOut 5s";
            setInterval(() => div.remove(), 5000);
        }, 5000
    )
}