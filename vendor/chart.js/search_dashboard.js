document.addEventListener('keyup', function () {
    const searchInput = document.querySelector('#dashboard');
    const namedashboard = document.querySelectorAll('tr');
    searchInput.addEventListener('input', function () {
        const search_item = searchInput.value.trim().toLowerCase();
        namedashboard.forEach(function (dashboard) {
            const name = dashboard.children[1].textContent.toLowerCase();
            console.log(name);
            if (name.includes(search_item)) {
                dashboard.style.display = '';
            } else {
                dashboard.style.display = 'none';
            }
        });
    });
});