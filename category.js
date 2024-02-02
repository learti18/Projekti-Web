document.addEventListener("DOMContentLoaded", function () {
    var buttons = document.querySelectorAll(".toggle-button");

    buttons.forEach(function (button) {
        button.addEventListener("click", function () {
            var category = this.getAttribute("data-category");
            buttons.forEach(function (btn) {
                btn.classList.remove("active");
            });

function fetchDestinations(category, displayFunction) {
    clearDestinations(displayFunction); // Clear existing destinations for the specific set

            fetch("fetch_destinations.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
                body: "category=" + category,
            })
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
                clearDestinations(); // Clear existing destinations
                displayDestinations(data);
            })
            .catch(function (error) {
                console.error("Error fetching data: ", error);
            });
        });
    });
});

function clearDestinations(displayFunction) {
    if (displayFunction === displayDestinations) {
        document.querySelector(".cards").innerHTML = '';
    } else if (displayFunction === displayDestinations2) {
        document.querySelector(".destination-cards").innerHTML = '';
    }
}

function displayDestinationCard(destination) {
    var imageUrl = destination.image_url !== '' ? './photos/' + destination.image_url : './photos/default_image.jpg';
    var city = destination.city;
    var price = destination.price;

    var cardHtml = `
        <div class="card">
            <div class="card-pic">
                <img class="img1" src="${imageUrl}" alt="pic of the sea">
                <p>${new Date(destination.start_date).toLocaleDateString()}</p>
            </div>
            <p class="residence-time"><span>${destination.category}</span> ${new Date(destination.start_date).toLocaleDateString()}, ${new Date(destination.end_date).toLocaleDateString()}</p>
            <h3 class="destination-title1">${city}</h3>
            <div class="book-section">
                <p><span class="price">${price}$</span>/Person</p>
                <a href="product.php?id=${destination.destination_id}" class="buttons">Book Now</a>
            </div>
        </div>
    `;

    document.querySelector(".cards").insertAdjacentHTML('beforeend', cardHtml);
}

function displayDestinations(destinations) {
    destinations.forEach(function (destination) {
        displayDestinationCard(destination);
    });
}
