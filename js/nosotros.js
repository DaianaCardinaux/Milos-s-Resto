const botonesMostrar = document.querySelectorAll('.mostrarMas');

botonesMostrar.forEach(function(boton) {
    boton.addEventListener('click', function() {
        const opinion = this.previousElementSibling;
        if (opinion.style.whiteSpace === 'nowrap') {
            opinion.style.whiteSpace = 'normal';
            this.innerText = '▲';
        } else {
            opinion.style.whiteSpace = 'nowrap';
            this.innerText = '▼';
        }
    });
});