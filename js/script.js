const menu = document.querySelector('.menu');
const NavMenu = document.querySelector('.nav-menu');

menu.addEventListener('click', () => {
    menu.classList.toggle('ativo');
    NavMenu.classList.toggle('ativo');
})
document.addEventListener('DOMContentLoaded', () => {
    const priceRange = document.getElementById('price-range');
    const priceValue = document.getElementById('price-value');
    const servicoItems = document.querySelectorAll('.servico-item');
    const filterButtons = document.querySelectorAll('.filter-btn');

    const filterProducts = () => {
        const maxPrice = priceRange.value;
        const activeCategory = document.querySelector('.filter-btn.active')?.dataset.category || 'all';

        priceValue.textContent = maxPrice;

        servicoItems.forEach(item => {
            const itemPrice = parseFloat(item.getAttribute('data-price'));
            const itemCategory = item.getAttribute('data-category');
            const priceMatch = itemPrice <= maxPrice;
            const categoryMatch = activeCategory === 'all' || itemCategory === activeCategory;

            if (priceMatch && categoryMatch) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    };

    priceRange.addEventListener('input', filterProducts);

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            filterProducts();
        });
    });

    // Set initial filter state
    filterButtons[0].classList.add('active');
    priceRange.dispatchEvent(new Event('input'));
});