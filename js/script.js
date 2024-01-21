const btnEnviar = document.querySelector('#enviar')
const nome = document.querySelector('#nome')
const email = document.querySelector('#email')
const telefone = document.querySelector('#telefone')

btnEnviar.addEventListener('submit', () => {
    if(nome == '' && email == '' && telefone == ''){
        alert('Necessário preencher todos os campos')
    }

})