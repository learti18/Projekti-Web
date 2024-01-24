const buttons = document.querySelectorAll(".toggle-button");

setActiveBtn(document.getElementById("team-btn"))

for(let button of buttons){
    button.addEventListener("click",function(){
        for(let button of buttons){
            setBtnDefault(button)
        }

        setActiveBtn(button)
    })
}

function setActiveBtn(btn) {
    btn.classList.add("active");
    btn.style.backgroundColor = "var(--Blue-primary, #3E86F5)";
    btn.style.color = "#fff";
}

function setBtnDefault(btn) {
    btn.classList.remove("active");
    btn.style.backgroundColor = "#FFFFFF";
    btn.style.color = "#000000";
}
