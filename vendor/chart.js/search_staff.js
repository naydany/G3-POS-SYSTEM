document.addEventListener('keyup', function () {
    const searchInput = document.querySelector('#staff');
    const namestaff = document.querySelectorAll('tr');
    searchInput.addEventListener('input', function () {
        const search_item = searchInput.value.trim().toLowerCase();
        namestaff.forEach(function (staff) {
            const name = staff.children[1].textContent.toLowerCase();
            console.log(name);
            if (name.includes(search_item)) {
                staff.style.display = '';
            } else {
                staff.style.display = 'none';
            }
        });
    });
});