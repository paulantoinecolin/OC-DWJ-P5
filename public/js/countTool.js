// Form Feedback
const messageEle = document.getElementById("message");
const counterEle = document.getElementById("counter");

messageEle.addEventListener("input", function (e) {
    const target = e.target;

    // Get the `maxlength` attribute
    const maxLength = target.getAttribute("maxlength");

    // Count the current number of characters
    counterEle.innerHTML = maxLength - target.value.length;
});
