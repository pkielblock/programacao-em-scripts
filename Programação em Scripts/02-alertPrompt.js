function alertBox(){
    let x;
    let age = prompt("Type your age: ");

    if (age != null) {
        x = "Age: " + age + " years old.";
        document.getElementById("demo").innerHTML = x;
    }
}