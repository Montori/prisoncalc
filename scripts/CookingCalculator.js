function calculate()
{
  let costVariety = 0;
  let quantity = 1;
  let variety = 1;

  let prisoner = 0;
  let mealsPerDay = 0;

  if(!checkValid()) return;

  else document.getElementById('inputPrisoner').classList.remove('is-invalid');

  if(isNaN(mealsPerDay)) return document.getElementById('inputMealsDay').classList.add('is-invalid');
  else document.getElementById('inputMealsDay').classList.remove('is-invalid');

  switch (document.getElementById('inputMealQty').value)
  {
    case "Low": quantity = 1; break;
    case "Medium": quantity = 2; break;
    case "High": quantity = 3; break;
    case "Fine Dining" : quantity = 4; break;
  }

  switch (document.getElementById('inputMealVar').value)
  {
    case "None" : variety = 0; break;
    case "Low": variety = 1; break;
    case "Medium": variety = 2; break;
    case "High": variety = 3; break;
  }

  switch (document.getElementById('inputMealVar').value)
  {
    case "None": costVariety = 0; break;
    case "Low": costVariety = quantity*2-quantity; break;
    case "Medium": costVariety = quantity*6-quantity; break;
    case "High": costVariety = quantity*10-quantity; break;
  }

  let cookers = Math.ceil(quantity == 1 ? prisoner/30 : quantity == 2 ? prisoner/20 : quantity == 3 ? prisoner/10 : prisoner/5);
  let fridges = Math.ceil(variety == 1 ? cookers*1.3 : variety == 2 ? cookers*1.7 : variety == 3 ? cookers*2 : cookers);
  let cooks = cookers+2;
  let benches = Math.ceil(prisoner/4);
  let tables = Math.ceil(prisoner/8);
  let servingTables = Math.ceil(prisoner/40);
  let sinks = Math.ceil(servingTables+1);
  let costSingleMeal = quantity+costVariety;
  let costDailyTotal = costSingleMeal*prisoner*mealsPerDay;

  let energy = calculatePower(cookers*10 + fridges*10)

  document.getElementById('resultKitchenCooks').innerHTML = cooks;
  document.getElementById('resultKitchenCookers').innerHTML = cookers;
  document.getElementById('resultKitchenFridges').innerHTML = fridges;
  document.getElementById('resultKitchenSinks').innerHTML = sinks;
  document.getElementById('resultKitchenBins').innerHTML = "1";

  document.getElementById('resultCanteenTables').innerHTML = tables;
  document.getElementById('resultCanteenBenches').innerHTML = benches;
  document.getElementById('resultCanteenServing').innerHTML = servingTables;
  document.getElementById('resultCanteenBins').innerHTML = "1";

  document.getElementById('resultCostQty').innerHTML = `$${quantity}.00`;
  document.getElementById('resultCostVar').innerHTML = `$${costVariety}.00`;
  document.getElementById('resultCostMeal').innerHTML = `$${costSingleMeal}.00`;
  document.getElementById('resultCostDaily').innerHTML = `$${costDailyTotal}.00`;

  document.getElementById('resultGenerators').innerHTML = energy.generators;
  document.getElementById('resultCapacitors').innerHTML = energy.capacitors;
  document.getElementById('resultEnergy').innerHTML = energy.energy;

  function checkValid()
  {
    let resultP = false;
    let resultM = false;

    let prisonerInput = document.getElementById("inputPrisoner");
    let mealsInput = document.getElementById("inputMealsDay");

    if(prisonerInput.value.trim() === "" || isNaN(parseInt(prisonerInput.value)) || parseInt(prisonerInput.value) <= 0) prisonerInput.classList.add("is-invalid");
    else
    {
      resultP = true;
      prisoner = parseInt(prisonerInput.value);
      prisonerInput.classList.remove("is-invalid");
    }

    if(mealsInput.value.trim() === "" || isNaN(parseInt(mealsInput.value)) || parseInt(mealsInput.value) <= 0) mealsInput.classList.add("is-invalid");
    else
    {
      resultM = true;
      mealsPerDay = parseInt(mealsInput.value);
      mealsInput.classList.remove("is-invalid");
    }
    return resultP && resultM;
  }
}
