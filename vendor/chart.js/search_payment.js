document.addEventListener('keyup', function () {
    const searchInput = document.querySelector('#payment');
    const namepayment = document.querySelectorAll('tr');
    searchInput.addEventListener('input', function () {
        const search_item = searchInput.value.trim().toLowerCase();
        namepayment.forEach(function (payment) {
            const name = payment.children[1].textContent.toLowerCase();
            console.log(name);
            if (name.includes(search_item)) {
                payment.style.display = '';
            } else {
                payment.style.display = 'none';
            }
        });
    });
});