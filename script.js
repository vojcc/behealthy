let massList = [];
let dateList = [];
let massForm;
let inputError;

document.addEventListener('DOMContentLoaded', () => {
    massList = document.getElementById('massList');
    dateList= document.getElementById('dateList');
    massForm = document.getElementById('massForm');
    inputError = document.getElementById('inputError');

    massForm.addEventListener('submit', (event) => {
        event.preventDefault();

        let massInput = event.target.elements[0]; //przypisujemy ścieżkę do wartości
        let dateInput = event.target.elements[1];

        if (massInput.value.length > 0 && !massInput.value.startsWith(0) && dateInput.value.length > 0) {
            addMassListItem(massInput.value) //dodajemy do massList event.target.elements[0].value
            massInput.value = "";

            addDateListItem(dateInput.value) //dodajemy do massList event.target.elements[1].value
            dateInput.value = "";
            inputError.innerText = "";
        }
        else {
            inputError.innerText = 'Podaj wszystkie dane!';
        }
    })
})

function addMassListItem(massItem) {
    let li = document.createElement('li') 
    li.innerText = massItem + ' kg'; 
    massList.appendChild(li);
}

function addDateListItem(dateItem) {
    let li = document.createElement('li') 
    li.innerText = dateItem; 
    dateList.appendChild(li); 
}


