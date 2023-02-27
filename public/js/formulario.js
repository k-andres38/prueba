const searchForm = document.querySelector('#search-form');
searchForm.addEventListener('submit', (event) => {
    event.preventDefault(); // Prevenir el comportamiento por defecto del formulario
    const formData = new FormData(searchForm); // Obtener los datos del formulario
    const searchValue = formData.get('info'); // Obtener el valor del input "info"

    // Realizar la búsqueda y actualizar el DOM con los resultados
    // ...
    console.log(searchValue);
});