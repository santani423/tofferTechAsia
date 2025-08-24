@extends('cms.layout.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box d-print-none">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">Portofolio</h4>
                    </div>
                    <div class="col-md-4">
                        <div class="float-right d-none d-md-block">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-settings mr-1"></i> Settings
                                </button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Container untuk Portofolio --}}
    <div class="row" id="portofolio-container">
        <div class="col-12 text-center">
            <p>Sedang memuat data portofolio...</p>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const container = document.getElementById("portofolio-container");

        fetch("{{ url('/api/portofolio') }}") // endpoint API Laravel
            .then(response => response.json())
            .then(data => {
                container.innerHTML = ""; // kosongkan dulu

                if (data.length === 0) {
                    container.innerHTML = `<div class="col-12 text-center"><p>Tidak ada data portofolio.</p></div>`;
                    return;
                }

                data.forEach(item => {
                    container.innerHTML += `
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src="${item.image_url ?? 'https://via.placeholder.com/300'}" 
                                     class="card-img-top" alt="${item.title}">
                                <div class="card-body">
                                    <h5 class="card-title">${item.title}</h5>
                                    <p class="card-text">${item.description ?? ''}</p>
                                </div>
                            </div>
                        </div>
                    `;
                });
            })
            .catch(error => {
                console.error("Error fetching portofolio:", error);
                container.innerHTML = `<div class="col-12 text-center text-danger">
                    <p>Gagal memuat data portofolio.</p>
                </div>`;
            });
    });
</script>
@endpush
