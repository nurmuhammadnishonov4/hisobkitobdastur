// menu delete
let menuLi = document.querySelectorAll('.menuLi');
let menulinks = document.querySelectorAll('.menulink');


menuLi.forEach(link => {
    link.addEventListener('click', () => {
        let text = link.children[1].children[2];
        text.classList.toggle('d-none');
    });
});

//cash

let cashs = document.querySelectorAll('.cash');

let SumCash = 0;

cashs.forEach((item) => {
    SumCash += +item.innerHTML;
});

document.querySelector('.TotalCash').innerHTML = SumCash;


//terminal

let terminal = document.querySelectorAll('.terminal');

let SumTerminal = 0;

terminal.forEach((item) => {
    SumTerminal += +item.innerHTML;
});

document.querySelector('.TotalTerminal').innerHTML = SumTerminal;


//savdo

let savdo = document.querySelectorAll('.savdo');

let SumSavdo = 0;

savdo.forEach((item) => {
    SumSavdo += +item.innerHTML;
});

document.querySelector('.TotalSavdo').innerHTML = SumSavdo;


//tovar

let tovar = document.querySelectorAll('.tovar');

let SumTovar = 0;

tovar.forEach((item) => {
    SumTovar += +item.innerHTML;
});

document.querySelector('.TotalTovar').innerHTML = SumTovar;


//rasxod

let rasxod = document.querySelectorAll('.rasxod');

let SumRasxod = 0;

rasxod.forEach((item) => {
    SumRasxod += +item.innerHTML;
});

document.querySelector('.TotalRasxod').innerHTML = SumRasxod;


//kassa


let kassa = document.querySelectorAll('.kassa');

let SumKassa = 0;

kassa.forEach((item) => {
    SumKassa += +item.innerHTML;
});

document.querySelector('.TotalKassa').innerHTML = SumKassa;

