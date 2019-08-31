@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')

<h1>Pagina de ajuda</h1>
<p>Em construção</p>

@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
