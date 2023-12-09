document.addEventListener("DOMContentLoaded", function (ngjarja) {
    const BtnSubmit = document.getElementById('submit-btn');
    let invalidEmail = document.getElementById('invalid-email');

    /*Funksioni per te e validuar fushat e formes */
    const emailValid = (email) => {
        const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
        return emailRegex.test(email.toLowerCase());
    };

    const validate = (ngjarja) => {
        ngjarja.preventDefault();
        const emailin = document.getElementById('email');

        if (emailin.value === "") {
            alert("Ju lutem shtoni email'in.");
            emailin.focus();
            return false;
        }

        if (!emailValid(emailin.value)) {
            invalidEmail.textContent = "Invalid email!.";
            emailin.focus();
            return false;
        }

        // Redirect to travelingWeb.html
        window.location.href = 'createPassword.html';

        return true; // mund te dergohet te serveri
    };

    BtnSubmit.addEventListener('click', validate);
});