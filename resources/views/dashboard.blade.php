@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')

<div class="row">
        <div class="col-lg-8">
                <div class="card card-chart">
                    <div class="card-header">
                        <h4 class="card-title">Relatório de Visitas</h4>
                    </div>
                    <div class="card-body">
                        {{-- <div class="chart-area">
                            <canvas id="chartLinePurple"></canvas>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="col-lg-4">
    <div class="card card-chart">
           <div class="card-header">
                        <h4 class="card-title">Relatório de Visitas</h4>
                    </div>
                    <div class="card-body">
                        {{-- <div class="chart-area">
                            <canvas id="chartLinePurple"></canvas>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
