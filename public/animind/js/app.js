// Seleciona o elemento HTML da barra de pesquisa
const searchBar = document.querySelector('input[aria-label="Search"]');

// Seleciona todos os elementos HTML de título de anime
const animeTitles = document.querySelectorAll('.card-title');

// Adiciona um evento de escuta de digitação na barra de pesquisa
searchBar.addEventListener('input', function() {
  // Obtém o valor digitado na barra de pesquisa
  const searchTerm = searchBar.value.trim().toLowerCase();
  
  // Itera sobre todos os títulos de anime e verifica se eles contêm o termo de pesquisa
  animeTitles.forEach(title => {
    if (title.textContent.trim().toLowerCase().includes(searchTerm)) {
      // Mostra o elemento do título de anime se o termo de pesquisa estiver contido nele
      title.closest('.card').style.display = 'block';
    } else {
      // Esconde o elemento do título de anime se o termo de pesquisa não estiver contido nele
      title.closest('.card').style.display = 'none';
    }
  });
});
