// const hour_h2 = document.querySelector('.hour');

// function getHour(){
//     const h = new Date();
//     const hours = ((h.getHours() < 10) ? "0" : "") + h.getHours();
//     const minutes = ((h.getMinutes() < 10) ? "0" : "") + h.getMinutes();
//     const secs = ((h.getSeconds() < 10) ? "0" : "") + h.getSeconds();

//     console.log("Hora actual: " + hours + ":" + minutes + ":" + secs);

//     hour_h2.innerHTML = hours+" : "+minutes;

// }




// getHour();



/*Formularios*/
const btnAdd = document.querySelector('.add');
const btnClose = document.querySelector('.form-close');
const formAdd = document.querySelector('.form-add');


btnAdd.addEventListener('click', () => {
    formAdd.style.display = "block";
});

btnClose.addEventListener('click', () => {
    formAdd.style.display = "none";
});