document.addEventListener('keyup', function () {
    const searchInput = document.querySelector('#oldpayments');
    const nameoldpayments = document.querySelectorAll('tr');
    searchInput.addEventListener('input', function () {
        const search_item = searchInput.value.trim().toLowerCase();
        nameoldpayments.forEach(function (oldpayments) {
            const name = oldpayments.children[1].textContent.toLowerCase();
            console.log(name);
            if (name.includes(search_item)) {
                oldpayments.style.display = '';
            } else {
                oldpayments.style.display = 'none';
            }
        });
    });
});