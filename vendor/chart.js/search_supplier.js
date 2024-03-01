document.addEventListener('keyup', function () {
    const searchInput = document.querySelector('#supplier');
    const namesupplier = document.querySelectorAll('tr');
    searchInput.addEventListener('input', function () {
        const search_item = searchInput.value.trim().toLowerCase();
        namesupplier.forEach(function (supplier) {
            const name = supplier.children[1].textContent.toLowerCase();
            console.log(name);
            if (name.includes(search_item)) {
                supplier.style.display = '';
            } else {
                supplier.style.display = 'none';
            }
        });
    });
});