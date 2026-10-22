function verificar()
{
    let number = parseInt(document.getElementById('number').value);

    if(number) {
        if(number % 2 == 0) {
            switch (number) {
                case 2:
                    alert('2 é o número atômico do hélio.');
                    break;
                case 4:
                    alert('4 é o quadrado de dois.');
                    break;
                case 6:
                    alert('6 é um número perfeito ou defectivo.');
                    break;
                default:
                    alert('Você digitou um número par.')
                    break;
            }
        } else {
            alert('O número é impar.');
        }
    } else {
        alert('Preencha o campo.');
    }
}