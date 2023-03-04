var acc = document.getElementsByClassName("actionAccordion");
var i;
for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
            arrow.style.transform = "rotate(180deg)"
        } else {
            panel.style.display = "block";
        }
    });
}
