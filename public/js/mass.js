let massList = [];
let massForm;
let inputMassError;

document.addEventListener('DOMContentLoaded', () => {
    massList = document.getElementById('massList');
    massForm = document.getElementById('massForm');
    inputMassError = document.getElementById('inputMassError');

    massForm.addEventListener('submit', (event) => {
        event.preventDefault();

        let massInput = event.target.elements[0]; //przypisujemy ścieżkę do wartości
        let dateMassInput = event.target.elements[1];

        if (massInput.value.length > 0 && !massInput.value.startsWith(0) && dateMassInput.value.length > 0) {
            addMassListItem(massInput.value, dateMassInput.value) //dodajemy do massList event.target.elements[0].value
            massInput.value = "";
            dateMassInput.value = "";
            inputMassError.innerText = "";
        }
        else {
            inputMassError.innerText = 'Podaj wszystkie dane!';
        }
    })
})

function addMassListItem(massItem, dateItem) {
    let li = document.createElement('li') 
    li.innerText = massItem + ' kg' + "\n" + dateItem;
    massList.appendChild(li);
}



