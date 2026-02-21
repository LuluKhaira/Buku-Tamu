function sendResetEmail() {
      const username = document.getElementById("risetusername").value;
      const newPass = document.getElementById("newPassword").value;
      const confirmPass = document.getElementById("confirmPassword").value;

      if (!username || !newPass || !confirmPass)
        return alert("Semua field harus diisi!");

      if (newPass !== confirmPass)
        return alert("Password tidak cocok!");

      const formData = new FormData();
      formData.append("username", username);
      formData.append("password", newPass);

      fetch("config/riset_password.php", {
          method: "POST",
          body: formData
        })
        .then(res => res.text())
        .then(response => {
          if (response === "success") {
            alert("Password berhasil direset!");
            closePopup();
          } else {
            alert("username tidak ditemukan!");
          }
        })
        .catch(() => alert("Terjadi kesalahan"));
    }

    function openPopup() {
      const popup = document.getElementById("forgotPopup");
      popup.classList.remove("d-none");
      popup.classList.add("d-flex");
    }

    function closePopup() {
      const popup = document.getElementById("forgotPopup");
      popup.classList.add("d-none");
      popup.classList.remove("d-flex");
    }


