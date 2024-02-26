
document.addEventListener('keyup', function () {
    const searchInput = document.querySelector('#search');
    const nameProduct = document.querySelectorAll('tr');
    searchInput.addEventListener('input', function () {
    const search_item = searchInput.value.trim().toLowerCase();
            nameProduct.forEach(function (product) {
            const name = product.children[2].textContent.toLowerCase();
            console.log(name);
            if (name.includes(search_item)) {
                product.style.display = '';
            } else {
                product.style.display = 'none';
            }
        });
    });
});