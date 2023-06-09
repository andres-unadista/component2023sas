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

  $viewSale.innerText = new Intl.NumberFormat("es-CO").format(sale);
  $viewProfit.innerText = new Intl.NumberFormat("es-CO").format(profit);
  $viewIVA.innerText = new Intl.NumberFormat("es-CO").format(iva);
  myModal.show();
}

function handleClean() {
  $formSale.reset();
}