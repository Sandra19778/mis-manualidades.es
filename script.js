//Interacción básica para mejorar la navegacion
document.querySelectorAll('nav ul li').forEach(item => {
    item.addEventListener('mouseover',() => {
        let dropdown = item.querySelector('.dropdown');
        if (dropdown) {
            dropdown.style.display = 'block';
        }
    });
    item.addEventListener('mouseout',() => {
        let dropdown = item.querySelector('.dropdown');
        if (dropdown) {
            dropdown.style.display = 'none'
        }
    });
});