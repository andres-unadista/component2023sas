let $formSale = document.getElementById('formSale');
let $btnClean = document.getElementById('clean');
let $viewSale = document.getElementById('viewSale');
let $viewProfit = document.getElementById('viewProfit');
let $viewIVA = document.getElementById('viewIVA');
let myModal = new bootstrap.Modal(document.getElementById('modaySale'), {
  keyboard: false
});

$formSale.addEventListener('submit', handleSubmit);
$btnClean.addEventListener('click', handleClean);

function handleSubmit(e) {
  e.preventDefault();
  let formSale = new FormData($formSale);
  let purchase = +formSale.get('purchase');
  let profit = +formSale.get('profit') / 100;
  let iva = +formSale.get('iva') / 100;
  let sale = 0;

  iva = purchase * iva;
  profit = purchase * profit;
  sale = iva + profit + purchase;

  $viewSale.innerText = sale.toFixed(2);
  $viewProfit.innerText = profit.toFixed(2);
  $viewIVA.innerText = iva.toFixed(2);
  myModal.show();
}

function handleClean() {
  $formSale.reset();
}