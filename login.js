document.addEventListener("DOMContentLoaded", function (ngjarja) {
    const BtnSubmit = document.getElementById('submit-btn');

    /*Funksioni per te e validuar fushat e formes */
    const emailValid = (email) => {
        const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
        return emailRegex.test(email.toLowerCase());
    };

    const validate = (ngjarja) => {
        ngjarja.preventDefault();
        const fjalkalimi = document.getElementById('pass');
        const emailin = document.getElementById('email');

        if (fjalkalimi.value === "") {
            alert("Ju lutem shtoni Fjalkalimin.");
            fjalkalimi.focus();
            return false;
        }

        if (emailin.value === "") {
            alert("Ju lutem shtoni email'in.");
            emailin.focus();
            return false;
        }

        if (!emailValid(emailin.value)) {
            alert("Ju lutem te shtoni email'in valid.");
            emailin.focus();
            return false;
        }

        // Redirect to travelingWeb.html
        window.location.href = 'travelingWeb.html';

        return true; // mund te dergohet te serveri
    };

    BtnSubmit.addEventListener('click', validate);
});
