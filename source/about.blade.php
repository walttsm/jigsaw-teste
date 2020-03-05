@extends('_layouts.master')

@section('body')

<div class="container-about">
    <div class="row">
        <img style="width:100px"
            src="https://www.pngitem.com/pimgs/m/516-5167304_transparent-background-white-user-icon-png-png-download.png"
            alt="Foto de Erick">
        <div class="content">
            <h2 class="name bold">Nome 1</h2>
            <p class="description">Esta é a descrição do primeiro integrante da
                dupla. To display each of your collection items on their own
                page, you need to specify a parent template. You can do this in
                the extends key of the YAML front matter, or with the
                directive in a Blade file: </p>
        </div>
    </div>
    <hr>
    <div class="row">
        <img style="width:100px"
            src="https://www.pngitem.com/pimgs/m/516-5167304_transparent-background-white-user-icon-png-png-download.png"
            alt="Foto de Erick">
        <div class="content">
            <h2 class="name bold">Nome 2</h2>
            <p class="description">Esta é a descrição do segundo integrante
                da dupla. To display each of your collection items on their
                own page, you need to specify a parent template. You can do
                this in the extends key of the YAML front matter, or with
                the directive in a Blade file: </p>
        </div>

    </div>
</div>

@endsection