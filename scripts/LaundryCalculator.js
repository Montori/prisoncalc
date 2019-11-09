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

  let energy = 10*machines;
  let powerUntis = Math.ceil(energy/50);
  let generators = Math.ceil(powerUntis/17);
  let capacitors = powerUntis - generators;

  document.getElementById('resultLaundryBaskets').innerHTML = baskets;
  document.getElementById('resultLaundryIroning').innerHTML = iron;
  document.getElementById('resultLaundryWashing').innerHTML = machines;
  document.getElementById('resultLaundryJobs').innerHTML = jobs;
  document.getElementById('resultLaundryJanitors').innerHTML = janitors;

  document.getElementById('resultPowerGenerators').innerHTML = `${generators}`;
  document.getElementById('resultPowerCapacitors').innerHTML = `${capacitors}`;
  document.getElementById('resultPowerEnergy').innerHTML = `${energy}`;
}
