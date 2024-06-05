document.addEventListener('DOMContentLoaded', function() {
    const menuIcon = document.querySelector('.menu-icon');
    const navUl = document.querySelector('.header-nav ul');

    menuIcon.addEventListener('click', function() {
        navUl.style.display = navUl.style.display === 'block' ? 'none' : 'block';
    });
});

/*function funcao1() {
    alert("Mensagem enviada com sucesso!");
    location.reload();
};*/

function validateForm() {
    const name = document.getElementById('fname').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('subject').value;

    if (name === "") {
        alert("Por favor, preencha seu nome.");
        return false;
    }

    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (email === "" || !emailPattern.test(email)) {
        alert("Por favor, preencha um e-mail válido.");
        return false;
    }

    if (message === "") {
        alert("Por favor, escreva sua mensagem.");
        return false;
    }

    return true;
}

function funcao1() {
    if (validateForm()) {
        alert("Mensagem enviada com sucesso!");
        location.reload(); // Recarrega a página
    }
}