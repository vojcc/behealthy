let waterList = [];
let waterForm;
let inputWaterError;

document.addEventListener('DOMContentLoaded', () => {
    waterList = document.getElementById('waterList');
    waterForm = document.getElementById('waterForm');
    inputWterError = document.getElementById('inputWaterError');

    waterForm.addEventListener('submit', (event) => {
        event.preventDefault();

        let waterInput = event.target.elements[0]; //przypisujemy ścieżkę do wartości
        let dateWaterInput = event.target.elements[1];

        if (waterInput.value.length > 0 && dateWaterInput.value.length > 0) {
            addWaterListItem(waterInput.value, dateWaterInput.value) //dodajemy do waterList event.target.elements[0].value
            waterInput.value = "";

            dateWaterInput.value = "";
            inputWaterError.innerText = "";
        }
        else {
            inputWaterError.innerText = 'Podaj wszystkie dane!';
        }
    })
})

function addWaterListItem(waterItem, dateItem) {
    let li = document.createElement('li')
    li.innerText = waterItem + " ml" + "\n" + dateItem;
    waterList.appendChild(li);
}
