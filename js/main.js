document.addEventListener("DOMContentLoaded", function () {
    const radioContainers = document.querySelectorAll(".radio-container");

    radioContainers.forEach(container => {
        container.addEventListener("click", function () {
            // Remove active class from all radio containers
            radioContainers.forEach(c => c.classList.remove("active"));

            // Add active class to the clicked container
            this.classList.add("active");

            // Set the radio input to checked
            this.querySelector("input[type='radio']").checked = true;
        });
    });
});
