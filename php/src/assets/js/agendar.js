/* ------------------ agendar.php - corrigindo input date ----------------- */
const inputDate = document.getElementById('dateUserSchedule');

inputDate.addEventListener('input', () => {
    var inputValue = inputDate.value;

    if(inputValue.length > 10) {
        inputDate.value = inputValue = "";
    }
});

var hoje = new Date();
hoje.setDate(hoje.getDate() + 1);

var dataAtual = hoje.getFullYear() + '-' + ('0' + (hoje.getMonth() + 1)).slice(-2) + '-' + ('0' + hoje.getDate()).slice(-2);
inputDate.min = dataAtual;
