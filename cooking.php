<?php include 'include/header.php';?>

<div class="container-fluid">
  <div class="row" style="margin-top: 40px;">
    <div class="col-xl-4" id="col-input">
      <div class="card bg-dark text-white">
        <div class="card-body">
          <h1 class="card-title mb-20" style="font-size:20px;">Input</h1>
          <div class="row">
            <div class="col-sm">
              <label for="inputPrisoner">Prisoners</label>
              <div class="input-group mb-3">
                <input type="number" id="inputPrisoner" class="form-control" placeholder="Prisoners">
                <div class="invalid-feedback">Please provide a valid number</div>
              </div>
            </div>
            <div class="col-sm">
              <label for="inputMealQty">Quantity</label>
              <div class="form-group">
                <select class="form-control" id="inputMealQty">
                  <option>Low</option>
                  <option>Medium</option>
                  <option>High</option>
                </select>
              </div>
            </div>
            <div class="col-sm">
              <label for="inputMealVar">Variety</label>
              <div class="form-group">
                <select class="form-control" id="inputMealVar">
                  <option>None</option>
                  <option>Low</option>
                  <option>Medium</option>
                  <option>High</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <label for="inputMealsDay">Meals per day</label>
              <div class="input-group mb-3">
                <input type="number" id="inputMealsDay" class="form-control" placeholder="Meals/day">
                <div class="invalid-feedback">Please provide a valid number</div>
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-primary float-right mt-3" onclick="calculate();">Submit</button>
        </div>
      </div>
    </div>
    <div class="col-xl-8" id="col-result">
      <div class="card bg-dark">
      <div class="row">
        <div class="col-md-4">
          <div class="bg-dark text-white">
            <div class="card-body">
              <h1 class="card-title" style="font-size:20px; margin-bottom:20px;">Kitchen</h1>
              <ul class="list-group">
                <li class="list-group-item" style="background-color: #484D53;">Cooks <span class="badge badge-primary float-right" id="resultKitchenCooks">0</span></li>
                <li class="list-group-item" style="background-color: #484D53;">Cookers <span class="badge badge-primary float-right" id="resultKitchenCookers">0</span></li>
                <li class="list-group-item" style="background-color: #484D53;">Fridges <span class="badge badge-primary float-right" id="resultKitchenFridges">0</span></li>
                <li class="list-group-item" style="background-color: #484D53;">Sinks <span class="badge badge-primary float-right" id="resultKitchenSinks">0</span></li>
                <li class="list-group-item" style="background-color: #484D53;">Bins <span class="badge badge-primary float-right" id="resultKitchenBins">0</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="bg-dark text-white">
            <div class="card-body">
              <h1 class="card-title" style="font-size:20px; margin-bottom:20px;">Canteen</h1>
              <ul class="list-group">
                <li class="list-group-item" style="background-color: #484D53;">Tables <span class="badge badge-primary float-right" id="resultCanteenTables">0</span></li>
                <li class="list-group-item" style="background-color: #484D53;">Benches <span class="badge badge-primary float-right" id="resultCanteenBenches">0</span></li>
                <li class="list-group-item" style="background-color: #484D53;">Serving Tables <span class="badge badge-primary float-right" id="resultCanteenServing">0</span></li>
                <li class="list-group-item" style="background-color: #484D53;">Bins <span class="badge badge-primary float-right" id="resultCanteenBins">0</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="bg-dark text-white">
            <div class="card-body">
              <h1 class="card-title" style="font-size:20px; margin-bottom:20px;">Costs</h1>
              <ul class="list-group">
                <li class="list-group-item" style="background-color: #484D53;">Quantity Cost <span class="badge badge-primary float-right" id="resultCostQty">$0.00</span></li>
                <li class="list-group-item" style="background-color: #484D53;">Variety Cost <span class="badge badge-primary float-right" id="resultCostVar">$0.00</span></li>
                <li class="list-group-item" style="background-color: #484D53;">Meal Cost <span class="badge badge-primary float-right" id="resultCostMeal">$0.00</span></li>
                <li class="list-group-item" style="background-color: #484D53;">Daily Cost <span class="badge badge-primary float-right" id="resultCostDaily">$0.00</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>



<script src="scripts/CookingCalculator.js"></script>
<?php include 'include/footer.php';?>
