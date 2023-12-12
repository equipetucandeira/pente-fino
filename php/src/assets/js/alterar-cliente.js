const butExclu = document.getElementById('but-excluir');
const boxShow = document.getElementById('box-show');
const boxPrin = document.getElementById('box-prin');
const btnCancelar = document.getElementById('btn-cancelar');
const btnConfirmar = document.getElementById('btn-confirmar');

butExclu.addEventListener('click', () => {
    boxShow.style.display = 'flex';
    boxPrin.style.display = 'none';
})

btnCancelar.addEventListener('click', () => {
    boxShow.style.display = 'none';
});