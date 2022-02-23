function alertBox() {
    let x;
    let r = confirm("Choose a Value!");

    if (r) {
        x = "You've pressed OK";
    }
    else {
         x = "You've pressed Cancel"
    }

    document.getElementById("demo").innerText = x;

}