const botonAceptarCookies = document.getElementById('btn_aceptar_cookies');
const avisoCookies = document.getElementById('aviso-cookies');
const fondoAvisoCookies = document.getElementById('fondo-aviso-cookies');

if(!localStorage.getItem('cookies-aceptadas')){
    avisoCookies.classList.add('activo');
    fondoAvisoCookies.classList.add('activo');
}

botonAceptarCookies.addEventListener('click', () => {
    avisoCookies.classList.remove('activo');
    fondoAvisoCookies.classList.remove('activo');

    localStorage.setItem('cookies-aceptadas', true);
});