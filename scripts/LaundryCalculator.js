
function calculate()
{
  let prisonerInput = document.getElementById('inputPrisoner');
  let prisoner = parseInt(prisonerInput.value);

  if(isNaN(prisoner)) return prisonerInput.classList.add('is-invalid');
  else prisonerInput.classList.remove('is-invalid');

  let baskets = Math.round(prisoner/16);
  let iron = Math.round(baskets/2);
  let machines = prisoner < 25 ? 1 : Math.round(baskets/3);
  let jobs = baskets;
  let janitors = Math.round(prisoner/100);

  let energy = calculatePower(10*machines);

  document.getElementById('resultLaundryBaskets').innerHTML = baskets;
  document.getElementById('resultLaundryIroning').innerHTML = iron;
  document.getElementById('resultLaundryWashing').innerHTML = machines;
  document.getElementById('resultLaundryJobs').innerHTML = jobs;
  document.getElementById('resultLaundryJanitors').innerHTML = janitors;

  document.getElementById('resultPowerGenerators').innerHTML = `${energy.generators}`;
  document.getElementById('resultPowerCapacitors').innerHTML = `${energy.capacitors}`;
  document.getElementById('resultPowerEnergy').innerHTML = `${energy.energy}`;
}
