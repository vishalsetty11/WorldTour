const searchBar = document.getElementById('searchBar');
const searchButton = document.getElementById('searchButton');
const results = document.getElementById('results');

searchButton.addEventListener('click', function() {
  const searchTerm = searchBar.value.toLowerCase();
  results.innerHTML = '';

  // Perform search on the data source (in this case, an array of strings)
  dataSource.forEach(function(item) {
    if (item.toLowerCase().includes(searchTerm)) {
      const li = document.createElement('li');
      li.innerText = item;
      results.appendChild(li);
    }
  });
});

const dataSource = ['New York', 'Cannada', 'Sydney'];