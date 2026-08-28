const dropdown = document.getElementById("inventoryDropdown");
const addBtn = document.getElementById("btnAdd");

document.querySelectorAll(".menu-option").forEach(item => {
    item.addEventListener("click", function(e){
        e.preventDefault();

        const name = this.dataset.name;

        dropdown.innerHTML = name;

        addBtn.innerHTML = `
            <i class="bi bi-plus-circle"></i>
            Add ${name}
        `;
    });
});
