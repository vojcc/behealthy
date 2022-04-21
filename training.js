let trainingList = [];
let trainingForm;
let inputTrainingError;

document.addEventListener('DOMContentLoaded', () => {
    trainingList = document.getElementById('trainingList');
    trainingForm = document.getElementById('trainingForm');
    inputTrainingError = document.getElementById('inputTrainingError');

    trainingForm.addEventListener('submit', (event) => {
        event.preventDefault();

        let trainingInput = event.target.elements[0]; //przypisujemy ścieżkę do wartości
        let dateTrainingInput = event.target.elements[1];

        if (trainingInput.value != "Wybierz rodzaj treningu" && trainingInput.value.length > 0 && dateTrainingInput.value.length > 0) {
            addTrainingListItem(trainingInput.value, dateTrainingInput.value) //dodajemy do trainingList event.target.elements[0].value
            trainingInput.value = "";

            dateTrainingInput.value = "";
            inputTrainingError.innerText = "";
        }
        else {
            inputTrainingError.innerText = 'Podaj wszystkie dane!';
        }
    })
})

function addTrainingListItem(trainingItem, dateItem) {
    let li = document.createElement('li')
    li.innerText = trainingItem + "\n" + dateItem;
    trainingList.appendChild(li);
}
