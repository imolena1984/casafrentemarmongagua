function toggleMenu() {
    const menu = document.querySelector('.menu');
    menu.classList.toggle('active');
}

function calcularDiarias() {
    const diarias = document.getElementById('diarias').value;
    const valorDiaria = 100; // Exemplo de valor da diária
    const resultado = diarias * valorDiaria;
    document.getElementById('resultado').innerText = `O valor total é: R$ ${resultado}`;
}
