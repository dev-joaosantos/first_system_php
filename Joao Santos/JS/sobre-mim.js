document.querySelectorAll('.open-button').forEach(button => {
  button.addEventListener('click', () => {
    const card = button.closest('.objectives-card');
    const modal = card.querySelector('.know-more');
    modal.showModal();
  });
});

document.querySelectorAll('.close-button').forEach(button => {
  button.addEventListener('click', () => {
    const modal = button.closest('.know-more');
    modal.close();
  });
});

document.querySelectorAll('.know-more').forEach(modal => {
  modal.addEventListener('click', (e) => {
    const rect = modal.getBoundingClientRect();
    if (
      e.clientX < rect.left ||
      e.clientX > rect.right ||
      e.clientY < rect.top ||
      e.clientY > rect.bottom
    ) {
      modal.close();
    }
  });
});

/* 
  * Este código em JavaScript adiciona a funcionalidade de modal para cartões de objetivos.
  * A funcionalidade foi implementada com auxílio de vídeos, pesquisas, ferramentas e inteligências artificiais pois este conteúdo ainda não foi ensinado.
  * A intensão disto é apresentar dedicação e interesse em aprender novas tecnologias.
*/