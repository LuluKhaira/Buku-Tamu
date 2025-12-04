function updateClock() {
      const now = new Date();

      document.getElementById("clockTime").textContent =
        String(now.getHours()).padStart(2, '0') + ":" +
        String(now.getMinutes()).padStart(2, '0');

      document.getElementById("clockDate").textContent =
        now.toLocaleDateString("id-ID", {
          weekday: "long"
        }) + ", " +
        now.toLocaleDateString("id-ID", {
          day: "2-digit",
          month: "long",
          year: "numeric"
        });
    }

    setInterval(updateClock, 1000);
    updateClock();

   


    function changeLimit(limit) {
      const params = new URLSearchParams(window.location.search);

      params.set("limit", limit);
      params.set("page", 1); // reset ke halaman 1
      window.location.search = params.toString();
    }

    function searchEnter(e) {
      if (e.key === "Enter") {
        const keyword = e.target.value;
        const params = new URLSearchParams(window.location.search);

        params.set("search", keyword);
        params.set("page", 1); // reset halaman

        window.location.search = params.toString();
    }
}