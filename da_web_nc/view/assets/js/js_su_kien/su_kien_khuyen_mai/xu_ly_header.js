const links = document.querySelectorAll(".sk__menu-header li a");
for (let i = 0; i < links.length; i++) {
    links[i].addEventListener("click", function() {
        for (let j = 0; j < links.length; j++) {
            if (i !== j) {
                links[j].classList.add("small");
                links[j].classList.remove("large");
            }
        }
        links[i].classList.add("large");
        links[i].classList.remove("small");
    });
}