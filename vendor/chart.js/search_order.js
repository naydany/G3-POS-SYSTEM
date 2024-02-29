document.addEventListener('keyup', function () {
    const searchInput = document.querySelector('#order');
    const nameOrder = document.querySelectorAll('tr');
    searchInput.addEventListener('input', function () {
        const search_item = searchInput.value.trim().toLowerCase();
        nameOrder.forEach(function (order) {
            const name = order.children[2].textContent.toLowerCase();
            console.log(name);
            if (name.includes(search_item)) {
                order.style.display = '';
            } else {
                order.style.display = 'none';
            }
        });
    });
});