let inputs = document.querySelectorAll(".input-contact");

inputs.forEach((input) => {
    input.addEventListener('input', () => {
        if (input.value !== "") {
            input.style.borderBottomColor = "#cc005f";
            input.style.transition = "all .2s ease-in-out";
        } else {
            input.style.borderBottomColor = "#595757";
            input.style.transition = "all .2s ease-in-out";
        }
    });
});