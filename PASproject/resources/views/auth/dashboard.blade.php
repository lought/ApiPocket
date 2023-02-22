
@extends('layouts.auth');

@section('content')
<div class="main-panel">
          <div class="content-wrapper">
            <!--Conteudo Aqui -->
            <div class="row">
              <div class="col-sm-6 grid-margin">
                <div class="card">
                <div class="card-body">
                  <h5>Income</h5>
                  <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                          <div class="d-flex d-sm-block d-md-flex align-items-center">
                              <h2 class="mb-0" id="income-total">Loading...</h2>
                          </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                          <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                      </div>
                  </div>
              </div>
                </div>
              </div>
              <div class="col-sm-6 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Expenses</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">from database</h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-3 grid-margin stretch-card">
                    <!--Empty card -->
                </div>

                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                          <h4 class="card-title">Total expenses By categories</h4>
                          <canvas id="transaction-history" class="transaction-chart"></canvas>   
                      </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                    <!--Empty card-->
                </div>
            </div>
            <!--Conteudo Aqui -->
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <script>
          fetch('/api/movements/positive-sum/' + userId)
          .then(response => response.json())
          .then(data => {
            console.log(data);

            // update the text of the <h2> element to show the sum
            const incomeTotal = document.getElementById('income-total');
            incomeTotal.textContent = data.total;

          })
          .catch(error => console.error(error));
      </script>
@endsection