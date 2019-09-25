@extends('layouts.app')
@section('content')

{{ $testes}}

<div Style="width:50%;">
{!! $chart->container() !!}
</div>
@endsection