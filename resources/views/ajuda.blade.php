@extends('layouts.app', ['page' =>('Central de Ajuda'),  'pageSlug' => 'ajuda'])

@section('content')
<div class="row">
  <div class="col-md-12">
      <div class="card">
          <div class="card-header">
              <h3 class="title">{{ _('Central de Ajuda') }}</h3>

          </div>
              <div class="card-body">
               <h4>Olá! Esta é página de ajuda do Capture.</h4>
                 <p>Entre em contato conosco ou veja as perguntas frequentes</p>
              </div>
          </form>
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
