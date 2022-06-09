function somar()
{
    let num1 = document.getElementById('number1').value;
    let num2 = document.getElementById('number2').value;
    
    if(num1 && num2) {
        let sum = parseFloat(num1) + parseFloat(num2);
        alert(num1 + ' + ' + num2 + ' = ' + sum);
    } else {
        alert('Preencha todos os campos!');
    }
}

function subtracao()
{
    let num1 = document.getElementById('number1').value;
    let num2 = document.getElementById('number2').value;
    
    if(num1 && num2) {
        let sub = parseFloat(num1) - parseFloat(num2);
        alert(num1 + ' - ' + num2 + ' = ' + sub);
    } else {
        alert('Preencha todos os campos!');
    }
}

function divisao()
{
    let num1 = document.getElementById('number1').value;
    let num2 = document.getElementById('number2').value;
    
    if(num1 && num2) {
        let div = parseFloat(num1) / parseFloat(num2);
        alert(num1 + ' / ' + num2 + ' = ' + div);
    } else {
        alert('Preencha todos os campos!');
    }
}

function multiplicacao()
{
    let num1 = document.getElementById('number1').value;
    let num2 = document.getElementById('number2').value;
    
    if(num1 && num2) {
        let mult = parseFloat(num1) * parseFloat(num2);
        alert(num1 + ' * ' + num2 + ' = ' + mult);
    } else {
        alert('Preencha todos os campos!');
    }
}