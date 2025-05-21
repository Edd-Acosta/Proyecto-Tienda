document.addEventListener('DOMContentLoaded', () => {
  fetchData();
});

const fetchData = async () => {
  try {
    const res = await fetch('api.json');
    const data = await res.json();
    console.log(data);
    mostrarProductos(data);
  } catch (error) {
    console.error('Error al cargar los productos:', error);
  }
};

const mostrarProductos = (data) => {
  const items = document.getElementById('items');
  const templateCard = document.getElementById('template-card').content;
  const fragmento = document.createDocumentFragment();

  data.forEach(producto => {
    const clone = templateCard.cloneNode(true);
    clone.querySelector('h3').textContent = producto.nombre;
    clone.querySelector('p span').textContent = producto.precio;
   clone.querySelector('img').setAttribute("src", producto.thumbnailUrl || producto.img);
    fragmento.appendChild(clone);
  });

  items.appendChild(fragmento);
};
