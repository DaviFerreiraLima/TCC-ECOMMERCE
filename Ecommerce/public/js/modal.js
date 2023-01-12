function iniciaModal(modalID) {
  const modal = document.getElementById(modalID);
  if (modal) {
    modal.classList.add('mostrar');
    modal.addEventListener('click', (e) => {
      if (e.target.id == modalID || e.target.id == 'fechar') {
        modal.classList.remove('mostrar');
      }
    });
  }
}

const icon = document.querySelector('.icon');
icon.addEventListener('click', () => iniciaModal('modal_login')); //id