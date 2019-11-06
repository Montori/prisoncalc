function calculate()
{
  let costVar = 0;

  let quantity = 1;
  let variety = 1;
  let prisoner = parseInt(document.getElementById('inputPrisoner').value);
  if(isNaN(prisoner)) document.getElementById('inputPrisoner').classList.add('is-invalid');
  else document.getElementById('inputPrisoner').classList.remove('is-invalid');

  let mealsday = parseInt(document.getElementById('inputMealsDay').value);
  if(isNaN(mealsday)) return document.getElementById('inputMealsDay').classList.add('is-invalid');
  else document.getElementById('inputMealsDay').classList.remove('is-invalid');

  switch (document.getElementById('inputMealQty').value) {
    case "Low": quantity = 1; break;
    case "Medium": quantity = 2; break;
    case "High": quantity = 3; break;
    case "Fine Dining" : quantity = 4; break;
  }

  switch (document.getElementById('inputMealVar').value) {
    case "None": costVar = quantity; break;
    case "Low": costVar = quantity*2; break;
    case "Medium": costVar = quantity*6; break;
    case "High": costVar = quantity*10; break;
  }

  let ingreds = Math.floor(quantity * prisoner * 1.5);
  let ingredsCooked = quantity*prisoner;
  let fridges = Math.floor(ingreds/40);
  let cookers = Math.floor(quantity == 1 ? prisoner/30 : quantity == 2 ? prisoner/20 : quantity == 3 ? prisoner/10 : prisoner/5);
  let cooks = cookers+2;
  let bins = 1;
  let sinks = Math.floor(prisoner/30);
  let benches = Math.floor(prisoner/4);
  let tables = Math.floor(prisoner/8);
  let servingTables = Math.floor(ingredsCooked/80);
  let costMeal = quantity+costVar;
  let costDaily = costMeal*prisoner*mealsday;

  if(sinks < 1) sinks = 1;
  if(fridges < 1) fridges = 1;
  if(cookers < 1) cookers = 1;
  if(cooks < 1) cooks = 1;
  if(benches < 1) benches = 1;
  if(tables < 1) tables = 1;
  if(servingTables < 1) servingTables = 1;

  document.getElementById('resultKitchenCooks').innerHTML = cooks;
  document.getElementById('resultKitchenCookers').innerHTML = cookers;
  document.getElementById('resultKitchenFridges').innerHTML = fridges;
  document.getElementById('resultKitchenSinks').innerHTML = sinks;
  document.getElementById('resultKitchenBins').innerHTML = bins;

  document.getElementById('resultCanteenTables').innerHTML = tables;
  document.getElementById('resultCanteenBenches').innerHTML = benches;
  document.getElementById('resultCanteenServing').innerHTML = servingTables;
  document.getElementById('resultCanteenBins').innerHTML = bins;

  document.getElementById('resultCostQty').innerHTML = `$${quantity}.00`;
  document.getElementById('resultCostVar').innerHTML = `$${costVar}.00`;
  document.getElementById('resultCostMeal').innerHTML = `$${costMeal}.00`;
  document.getElementById('resultCostDaily').innerHTML = `$${costDaily}.00`;

}
