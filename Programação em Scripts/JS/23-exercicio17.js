function printDate()
{
    let date = new Date();

    let months = [
        'Janeiro',
        'Fevereiro',
        'Março',
        'Abril',
        'Maio',
        'Junho',
        'Julho',
        'Agosto',
        'Setembro',
        'Outubro',
        'Novembro',
        'Dezembro'
    ];
    
    document.getElementById('date').innerHTML = 'São Paulo, ' + date.getDate() + ' de ' + months[date.getMonth()] + ' de ' + date.getFullYear();
}