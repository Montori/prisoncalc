<?php include 'include/header.php';?>

<div class="container-fluid" style="margin-top: 40px;">
  <div class="row">
    <div class="col-xl-3" id="cleaningInput">
      <div class="card bg-dark text-white">
        <div class="card-body">
          <h1 class="card-title" style="font-size:20px; margin-bottom:20px;">Input</h1>
          <label for="inputPrisoner">Prisoners</label>
          <div class="input-group mb-3">
            <input type="number" id="inputPrisoner" class="form-control" placeholder="Prisoners">
            <div class="invalid-feedback">Please provide a valid number</div>
          </div>
          <button type="button" class="btn btn-primary float-right mt-3" onclick="calculate();">Submit</button>
        </div>
      </div>
    </div>
    <div class="col-xl-9" id="cleaningResults">
      <div class="card bg-dark text-white">
            <div class="row">
              <div class="col-md-4">
                <div class="bg-dark text-white">
                  <div class="card-body">
                    <h1 class="card-title" style="font-size:20px; margin-bottom:20px;">Laundry</h1>
                    <ul class="list-group">
                      <li class="list-group-item" style="background-color: #484D53;">Baskets <span class="badge badge-primary float-right" id="resultLaundryBaskets">0</span></li>
                      <li class="list-group-item" style="background-color: #484D53;">Ironing Boards <span class="badge badge-primary float-right" id="resultLaundryIroning">0</span></li>
                      <li class="list-group-item" style="background-color: #484D53;">Washing machines <span class="badge badge-primary float-right" id="resultLaundryWashing">0</span></li>
                      <li class="list-group-item" style="background-color: #484D53;">Jobs <span class="badge badge-primary float-right" id="resultLaundryJobs">0</span></li>
                      <li class="list-group-item" style="background-color: #484D53;">Janitors <span class="badge badge-primary float-right" id="resultLaundryJanitors">0</span></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card-body">
                  <h1 class="card-title" style="font-size:20px; margin-bottom:20px;">Laundry per room</h1>
                  <ul class="list-group">
                    <li class="list-group-item" style="background-color: #484D53;">Baskets <span class="badge badge-primary float-right" id="resultLaundryBaskets">6</span></li>
                    <li class="list-group-item" style="background-color: #484D53;">Ironing Boards <span class="badge badge-primary float-right" id="resultLaundryIroning">3</span></li>
                    <li class="list-group-item" style="background-color: #484D53;">Washing machines <span class="badge badge-primary float-right" id="resultLaundryWashing">2</span></li>
                    <li class="list-group-item" style="background-color: #484D53;">Jobs <span class="badge badge-primary float-right" id="resultLaundryJobs">6</span></li>
                    <li class="list-group-item" style="background-color: #484D53;">Janitors <span class="badge badge-primary float-right" id="resultLaundryJanitors">4</span></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card-body">
                  <h1 class="card-title" style="font-size:20px; margin-bottom:20px;">Electricity</h1>
                  <ul class="list-group">
                    <li class="list-group-item" style="background-color: #484D53;">Generators<span class="badge badge-primary float-right" id="resultPowerGenerators">0</span></li>
                    <li class="list-group-item" style="background-color: #484D53;">Capacitors<span class="badge badge-primary float-right" id="resultPowerCapacitors">0</span></li>
                    <li class="list-group-item" style="background-color: #484D53;">Power<span class="badge badge-primary float-right" id="resultPowerEnergy">0</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="container">
                  <p style="font-size:11px;">Be advised that you need more janitors if the jobs are not occupied!</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="container">
                  <p style="font-size:11px;">It is suggested to build multiple small rooms instead of one big room</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="container">
                  <p style="font-size:11px;">Be advised that you also need power for the water pump and lights</p>
                </div>
              </div>
            </div>
      </div>
    </div>
  </div>
</div>

<script src="scripts/LaundryCalculator.js"></script>
<?php include 'include/footer.php';?>
