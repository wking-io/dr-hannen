import '../css/category.css';

const filter = document.getElementById('category-select');

if (filter) {
  filter.addEventListener('change', (e) => {
    if (e.target.value !== 'default') {
      window.location.href = e.target.value;
    }
  });
}
