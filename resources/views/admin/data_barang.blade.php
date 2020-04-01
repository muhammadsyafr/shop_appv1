@extends('admin.layout.home')

@section('title')
<?= $title; ?>
@endsection

@section('content')
<div class="jumbotron">
    <h1>Hai <?= $content; ?> </h1>
</div>
@endsection