// const loginForm = document.getElementById("login-form");

// loginForm.addEventListener("submit", (event) => {
//     event.preventDefault();
function loginSuccess() {
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // Replace the following condition with your own validation logic
    if (username === "admin" && password === "password") {
        window.location.href = "home.html";
    } else {
        alert("Invalid username or password.");
    }
}
