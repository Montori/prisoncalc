<?php include 'include/header.php';?>

<div class="container-fluid" style="margin-top: 40px;">
  <div class="row">
    <div class="col-xl-3" id="col-input">
      <div class="card bg-dark text-white">
        <div class="card-body">
          <h1 class="card-title mb-20" style="font-size:20px; margin-bottom:20px;">Input</h1>
              <label for="inputPrisoner"></label>
              <div class="input-group mb-3">
                <input type="number" id="inputPrisoner" class="form-control" placeholder="Workers">
                <div class="invalid-feedback">Please provide a valid number</div>
              </div>
              <div class="input-group mb-3">
                <label for="inputWork"></label>
                <input type="number" id="inputWork" class="form-control" placeholder="Working Hours">
                <div class="invalid-feedback">Please provide a valid number</div>
              </div>
              <button type="button" class="btn btn-primary float-right mt-3" onclick="calculate();">Submit</button>
        </div>
      </div>
    </div>
    <div class="col-xl-9" id="col-result">
      <div class="card bg-dark text-white">
        <div class="row">
          <div class="col-md-6">
            <div class="bg-dark text-white">
              <div class="card-body">
                <h1 class="card-title" style="font-size:20px; margin-bottom:20px;">Workshop</h1>
                <ul class="list-group">
                  <li class="list-group-item" style="background-color: #484D53;">Saw <span class="badge badge-primary float-right" id="resultSaw">0</span></li>
                  <li class="list-group-item" style="background-color: #484D53;">Press <span class="badge badge-primary float-right" id="resultPress">0</span></li>
                  <li class="list-group-item" style="background-color: #484D53;">Tables <span class="badge badge-primary float-right" id="resultTables">0</span></li>
                  <li class="list-group-item" style="background-color: #484D53;">Profit <span class="badge badge-primary float-right" id="resultProfit">$0.00</span></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="bg-dark text-white">
              <div class="card-body">
                <h1 class="card-title" style="font-size:20px; margin-bottom:20px;">Electricity</h1>
                <ul class="list-group">
                  <li class="list-group-item" style="background-color: #484D53;">Generators <span class="badge badge-primary float-right" id="resultGenerators">0</span></li>
                  <li class="list-group-item" style="background-color: #484D53;">Capacitors <span class="badge badge-primary float-right" id="resultCapacitors">0</span></li>
                  <li class="list-group-item" style="background-color: #484D53;">Power <span class="badge badge-primary float-right" id="resultPower">0</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="scripts/WorkshopCalculator.js"></script>
<script src="scripts/EnergyCalculator.js"></script>
<?php include 'include/footer.php';?>
