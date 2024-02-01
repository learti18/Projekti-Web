document.addEventListener("DOMContentLoaded", function () {
    var buttons = document.querySelectorAll(".toggle-button");

    buttons.forEach(function (button) {
        button.addEventListener("click", function () {
            var category = this.getAttribute("data-category");

            fetch("fetch_destinations.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
                body: "category=" + category,
            })
            .then(function (response) {
                return response.text();
            })
            .then(function (data) {
                document.querySelector(".cards").innerHTML = data;
            })
            .catch(function (error) {
                console.error("Error fetching data: ", error);
            });
        });
    });
});

function displayDestinationCard(destination) {
    var cardsHtml = '';
    destinations.forEach(function (destination) {
        var image_destination = destination.image_url;
        var imageUrl = !empty(image_destination) ? './photos/' + image_destination : './photos/default_image.jpg';
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

        cardsHtml += cardHtml;
    });

    document.querySelector(".cards").innerHTML = cardsHtml;
}
