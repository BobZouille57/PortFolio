document.querySelectorAll(".btn").forEach(button => {
    button.addEventListener("click", function (event) {
        const ripple = document.createElement("span");
        const rect = this.getBoundingClientRect();
        ripple.style.left = `${event.clientX - rect.left}px`;
        ripple.style.top = `${event.clientY - rect.top}px`;
        ripple.classList.add("ripple");
        this.appendChild(ripple);

        setTimeout(() => {
            ripple.remove();
        }, 600);
    });
});
