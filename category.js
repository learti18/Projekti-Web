document.addEventListener("DOMContentLoaded", function () {
    // Set default category
    var defaultCategory = "team"; // Replace with your default category
    var defaultCategory2 = "adventure"; // Replace with your default category
    fetchDestinations(defaultCategory, displayDestinations);
    fetchDestinations(defaultCategory2, displayDestinations2);

    initializeToggleButton(".toggle-button", displayDestinations);
    initializeToggleButton(".toggle-button2", displayDestinations2);
});

function initializeToggleButton(selector, displayFunction) {
    var buttons = document.querySelectorAll(selector);

    buttons.forEach(function (button) {
        button.addEventListener("click", function () {
            var category = this.getAttribute("data-category");
            fetchDestinations(category, displayFunction);
        });
    });
}

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
        displayFunction(data);
    })
    .catch(function (error) {
        console.error("Error fetching data: ", error);
    });
}

function clearDestinations(displayFunction) {
    if (displayFunction === displayDestinations) {
        document.querySelector(".cards").innerHTML = '';
    } else if (displayFunction === displayDestinations2) {
        document.querySelector(".destination-cards").innerHTML = '';
    }
}

function displayDestinationCard(destination, destinationClass) {
    var imageUrl = destination.image_url !== '' ? './photos/' + destination.image_url : './photos/default_image.jpg';
    var city = destination.city;
    var price = destination.price;

    var cardHtml = `
        <div class="${destinationClass}">
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

function displayDestinationCard2(destination) {
    var imageUrl = destination.image_url !== '' ? './photos/' + destination.image_url : './photos/default_image.jpg';
    var city = destination.city;

    var cardHtml = `
        <a class="card-destination" href="product.php">
            <span class="photos-destination">
                <img class='img2' src="${imageUrl}" alt="Image of ${city}">
                ${city}
            </span>
            <span class="photos-destination2">
                <img src="photos/Location.svg" alt="Location icon">
                ${destination.country}
            </span>
        </a>
    `;

    document.querySelector(".destination-cards").insertAdjacentHTML('beforeend', cardHtml);
}

function displayDestinations(destinations) {
    destinations.forEach(function (destination) {
        displayDestinationCard(destination, "card");
    });
}

function displayDestinations2(destinations) {
    destinations.forEach(function (destination) {
        displayDestinationCard2(destination);
    });
}
