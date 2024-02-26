
document.addEventListener('keyup', function () {
    const searchInput = document.querySelector('#category');
    const nameCategory = document.querySelectorAll('tr');
    searchInput.addEventListener('input', function () {
        const search_item = searchInput.value.trim().toLowerCase();
        nameCategory.forEach(function (category) {
            const name = category.children[1].textContent.toLowerCase();
            console.log(name);
            if (name.includes(search_item)) {
                category.style.display = '';
            } else {
                category.style.display = 'none';
            }
        });
    });
});