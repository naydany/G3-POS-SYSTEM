// function checkItems() {
//     // Call the PHP script using AJAX
//     var xhr = new XMLHttpRequest();
//     xhr.open("GET", "controllers/items/notification_item.controller.php", true);
//     xhr.onreadystatechange = function () {
//         if (xhr.readyState == 4 && xhr.status == 200) {
//             // Parse the response
//             var notifications = JSON.parse(xhr.responseText);

//             // Update the badge counter
//             var notificationCounter = document.getElementById("alertsDropdown");
//             notificationCounter.innerText = notifications.length;

//             // Update the dropdown with notifications
//             var dropdownMenu = document.querySelector("#alertsDropdown .dropdown-menu");
//             dropdownMenu.innerHTML = "";

//             notifications.forEach(function (notification) {
//                 var item = document.createElement("a");
//                 item.classList.add("dropdown-item", "d-flex", "align-items-center");
//                 item.href = "#";

//                 var iconContainer = document.createElement("div");
//                 iconContainer.classList.add("mr-3");
//                 var iconCircle = document.createElement("div");
//                 iconCircle.classList.add("icon-circle", "bg-primary");
//                 var icon = document.createElement("i");
//                 icon.classList.add("fas", "fa-file-alt", "text-white");
//                 iconCircle.appendChild(icon);
//                 iconContainer.appendChild(iconCircle);

//                 var notificationContent = document.createElement("div");
//                 var notificationDate = document.createElement("div");
//                 notificationDate.classList.add("small", "text-gray-500");
//                 notificationDate.innerText = notification.date;

//                 var notificationText = document.createElement("span");
//                 notificationText.classList.add("font-weight-bold");
//                 notificationText.innerText = notification.message;

//                 notificationContent.appendChild(notificationDate);
//                 notificationContent.appendChild(notificationText);

//                 item.appendChild(iconContainer);
//                 item.appendChild(notificationContent);

//                 dropdownMenu.appendChild(item);
//             });
//         }
//     };
//     xhr.send();
//     console.log(123456789);
// }

// setInterval(checkItems, 1000);







// function checkItems() {
//     // Call the PHP script using AJAX
//     var xhr = new XMLHttpRequest();
//     xhr.open("GET", "check_items.php", true);
//     xhr.onreadystatechange = function () {
//         if (xhr.readyState == 4 && xhr.status == 200) {
//             // Output the response
//             console.log(xhr.responseText);
//         }
//     };
//     xhr.send();
// }
// setInterval(checkItems, 1000);



