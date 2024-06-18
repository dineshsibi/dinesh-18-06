document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".button[data-hc-control]");
    buttons.forEach(button => {
        button.addEventListener("click", function () {
            const contentId = this.getAttribute("data-hc-control");
            const content = document.querySelector(`[data-hc-content="${contentId}"]`);
            document.querySelectorAll(".box").forEach(box => box.style.display = 'none');
            content.style.display = 'block';
        });
    });
});
