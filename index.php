<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <!-- linker card -->
                <div class="card" style="margin-top: 200px">
                    <div class="card-header">
                      Oud
                    </div>
                    <div class="card-body">
                        Denk ook aan:<br>
                        <ul>
                            <li>zonder of exclusief BTW</li>
                            <li>zonder of exclusief korting</li>
                        </ul>
                    </div>
                    <div class="card-footer text-body-secondary">
                      <input id="inp_oud" class="form-control is-invalid" onchange="checkInformation()">
                    </div>
                  </div>
                <!-- einde linker card -->
            </div>
            <div class="col-4">
                <select id="select_soort" class="form-select mt-4 mb-3 is-invalid" onchange="checkInformation()">
                    <option value="" selected>Kies....</option>
                    <option value="1">van</option>
                    <option value="2">toename</option>
                    <option value="3">afname</option>
                  </select>
                  <div class="input-group mb-3">
                    <span class="input-group-text">Percentage</span>
                    <input id="inp_perc" type="text" class="form-control is-invalid" onchange="checkInformation()">
                    <span class="input-group-text">%</span>
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text">Vermenigvuldigingsfactor</span>
                    <input id="inp_factor" type="text" class="form-control" disabled>
                  </div>
                  <img src="pijlen.avif " alt="" class="img-fluid"> 
                  <div class="input-group mb-3">
                    <span class="input-group-text">Deelfactor</span>
                    <input id="inp_deler" type="text" class="form-control" disabled>
                  </div>
                  <div class="d-grid">
                    <button id="losop_btn" type="button" class="btn btn-success" disabled onClick="solveProblem()">Los op</button>
                  </div>
            </div>
            <div class="col-3">
                <!-- rechter card -->
                <div class="card" style="margin-top: 200px">
                    <div class="card-header">
                      Nieuw
                    </div>
                    <div class="card-body">
                        Denk ook aan:<br>
                        <ul>
                            <li>met of inclusief BTW</li>
                            <li>met of inclusief korting</li>
                        </ul>
                    </div>
                    <div class="card-footer text-body-secondary">
                      <input id="inp_nieuw" class="form-control is-invalid" onchange="checkInformation()">
                    </div>
                  </div>
                <!-- einde rechter card -->
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>