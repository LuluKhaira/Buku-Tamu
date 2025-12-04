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