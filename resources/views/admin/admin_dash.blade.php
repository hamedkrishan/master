@extends('dash')

@section('dash_content')
<div class="container-fluid p-0">
  <div class="row g-0">
    <nav class="col-12 col-md-3 col-lg-2 bg-light position-fixed vh-100" style="top: 70px;">
      {{-- Sidebar --}}
    </nav>

    <div class="col offset-md-3 offset-lg-2" style="margin-top: 70px;">
      <main class="container" style="max-width: 900px;">
        <div class="row">
          <div class="col-12">
            <h3 class="fw-bold">Welcome {{ Auth::user()->name }}</h3>
            <h6 class="fw-normal mb-4">
              All systems are running smoothly!
              <span class="text-primary">3 unread alerts</span>
            </h6>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-12">
            <p>{{ $userCount }} users | {{ $packageCount }} packages | {{ $testCount }} tests</p>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-md-6 mb-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="card-title mb-3">Site Overview</h5>
                <canvas id="dashboardBar" width="100%" height="200"></canvas>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 mb-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="card-title mb-3">Data Breakdown</h5>
                <canvas id="dashboardPie" width="100%" height="200"></canvas>
              </div>
            </div>
          </div>
        </div>

      </main>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const labels = @json(['Users', 'Packages', 'Tests']);
  const data = @json([$userCount, $packageCount, $testCount]);

  const barCtx = document.getElementById('dashboardBar').getContext('2d');
  const pieCtx = document.getElementById('dashboardPie').getContext('2d');

  new Chart(barCtx, {
    type: 'bar',
    data: {
      labels: labels,
      datasets: [{
        label: 'Count',
        data: data,
        backgroundColor: [
          'rgba(13,110,253,0.75)',
          'rgba(25,135,84,0.75)',
          'rgba(255,193,7,0.75)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { display: false }
      },
      scales: {
        y: {
          beginAtZero: true,
          ticks: { precision: 0 }
        }
      }
    }
  });

  new Chart(pieCtx, {
    type: 'pie',
    data: {
      labels: labels,
      datasets: [{
        label: 'Distribution',
        data: data,
        backgroundColor: [
          'rgba(13,110,253,0.75)',
          'rgba(25,135,84,0.75)',
          'rgba(255,193,7,0.75)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'bottom'
        }
      }
    }
  });
});
</script>
@endpush
