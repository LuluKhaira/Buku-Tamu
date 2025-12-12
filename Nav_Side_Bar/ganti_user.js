document.getElementById("formGantiUsername").addEventListener("submit", function(e) {
    e.preventDefault();

    let formData = new FormData(this);

    fetch("../config/ganti_username.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        let alertBox = document.getElementById("alertResult");
        alertBox.classList.remove("d-none");

        if (data.status === "success") {
            alertBox.className = "alert alert-success";
            alertBox.innerText = data.message;

            setTimeout(() => {
                location.reload();
            }, 1500);

        } else {
            alertBox.className = "alert alert-danger";
            alertBox.innerText = data.message;
        }
    });
});
