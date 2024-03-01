
document.addEventListener('keyup', function () {
    const searchInput = document.querySelector('#admin');
    const nameadmin = document.querySelectorAll('tr');
    searchInput.addEventListener('input', function () {
        const search_item = searchInput.value.trim().toLowerCase();
        nameadmin.forEach(function (admin) {
            const name = admin.children[1].textContent.toLowerCase();
            console.log(name);
            if (name.includes(search_item)) {
                admin.style.display = '';
            } else {
                admin.style.display = 'none';
            }
        });
    });
});