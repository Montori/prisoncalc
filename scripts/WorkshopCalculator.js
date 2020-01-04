function calculate()
{
  let prisonerInput = document.getElementById('inputPrisoner');
  let prisoner = parseInt(prisonerInput.value);
  let workInput = document.getElementById('inputWork');
  let work = parseInt(workInput.value);

  if(isNaN(prisoner)) return prisonerInput.classList.add('is-invalid');
  else prisonerInput.classList.remove('is-invalid');

  if(isNaN(work)) return workInput.classList.add('is-invalid');
  else workInput.classList.remove('is-invalid');

  let saws = Math.round(prisoner/3.3);
  let press = Math.round(saws*2);
  let tables = saws;
  let profit = Math.round(work*25*((prisoner/3.3)*2));

  let energy = calculatePower(10*(saws+press));

  document.getElementById('resultSaw').innerHTML = saws;
  document.getElementById('resultPress').innerHTML = press;
  document.getElementById('resultTables').innerHTML = tables;
  document.getElementById('resultProfit').innerHTML = `$${profit}.00`;

  document.getElementById('resultGenerators').innerHTML = `${energy.generators}`;
  document.getElementById('resultCapacitors').innerHTML = `${energy.capacitors}`;
  document.getElementById('resultPower').innerHTML = `${energy.energy}`;
}
