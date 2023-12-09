document.addEventListener("DOMContentLoaded", function (ngjarja) {
    const BtnSubmit = document.getElementById('submit-btn');
    let invalidPass = document.getElementById('invalid-pass');
    let invalidConfirm = document.getElementById('invalid-confirm');

    const validate = (ngjarja) => {
        ngjarja.preventDefault();
        const fjalkalimi = document.getElementById('pass');
        const confirmFjalkalimi = document.getElementById('confirm-pass');

        invalidPass.textContent = "";
        invalidConfirm.textContent = "";

        if (fjalkalimi.value === "" || fjalkalimi.value.length < 7) {
            invalidPass.textContent = "Invalid password!"
            fjalkalimi.focus();
            return false;
        }
        if(fjalkalimi.value != confirmFjalkalimi.value){
            invalidConfirm.textContent = "Passwords do not match.";
            fjalkalimi.focus();
            return false;
        }

        // Redirect to travelingWeb.html
        window.location.href = 'travelingWeb.html';

        return true; // mund te dergohet te serveri
    };

    BtnSubmit.addEventListener('click', validate);
});
