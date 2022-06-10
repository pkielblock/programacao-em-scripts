function convertToCelsius()
{
    let fahrenheit = parseFloat(document.getElementById("fahrenheit").value);
    let celsius = (fahrenheit - 32) / 1.8;

    if (!isNaN(fahrenheit)) {
        document.getElementById("celsius").innerHTML = ('ºC: ' + celsius);
    } else {
        alert('Digite um número válido.');
    }
 }