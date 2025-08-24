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
                            <button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#portofolioModal" id="btnAdd">
                                Tambah Portofolio
                            </button>
                         
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

    {{-- Modal Form --}}
    <div class="modal fade" id="portofolioModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="formPortofolio" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Tambah Portofolio</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- alert error --}}
                        <div id="alertError" class="alert alert-danger d-none">
                            <ul id="errorList" class="mb-0"></ul>
                        </div>

                        <input type="hidden" id="id">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" id="title" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea id="description" name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" id="link" name="link" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" id="image" name="image" class="form-control">
                            <div id="preview" class="mt-2"></div>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select id="status" name="status" class="form-control" required>
                                <option value="draft">Draft</option>
                                <option value="published">Published</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="btnSave">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const apiUrl = "{{ url('/api/portofolio') }}";
        const container = document.getElementById("portofolio-container");
        let editingId = null;

        // Load Data
        function loadPortofolio() {
            fetch(apiUrl)
                .then(res => res.json())
                .then(data => {
                    container.innerHTML = "";
                    if (!data.data || data.data.length === 0) {
                        container.innerHTML =
                            `<div class="col-12 text-center"><p>Tidak ada data portofolio.</p></div>`;
                        return;
                    }

                    data.data.forEach(item => {
                        let imageUrl = item.image ?
                            item.image :
                            'https://via.placeholder.com/300';

                        container.innerHTML += `
                            <div class="col-md-4">
                                <div class="card mb-4 shadow-sm">
                                    <img src="${imageUrl}" class="card-img-top" alt="${item.title}" height="200">
                                    <div class="card-body">
                                        <h5 class="card-title">${item.title}</h5>
                                        <p class="card-text">${item.description ?? ''}</p>
                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-sm btn-warning" onclick="editPortofolio(${item.id})">Edit</button>
                                            <button class="btn btn-sm btn-danger" onclick="deletePortofolio(${item.id})">Hapus</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                })
                .catch(err => {
                    console.error(err);
                    container.innerHTML =
                        `<div class="col-12 text-center text-danger"><p>Gagal memuat data.</p></div>`;
                });
        }

        // Tambah / Edit Submit
        document.getElementById("formPortofolio").addEventListener("submit", function(e) {
            e.preventDefault();

            let form = document.getElementById("formPortofolio");
            let formData = new FormData(form);

            let method = editingId ? "POST" : "POST";
            let url = editingId ? `${apiUrl}/${editingId}?_method=PUT` : apiUrl;

            fetch(url, {
                    method: method,
                    headers: {
                        "Accept": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: formData
                })
                .then(async res => {
                    let data = await res.json();
                    if (!res.ok) {
                        showErrors(data.errors);
                        return;
                    }
                    $("#portofolioModal").modal("hide");
                    loadPortofolio();
                    editingId = null;
                    hideErrors();
                })
                .catch(err => console.error(err));
        });

        // Menampilkan error validasi
        function showErrors(errors) {
            let errorList = document.getElementById("errorList");
            errorList.innerHTML = "";
            for (const key in errors) {
                errors[key].forEach(msg => {
                    errorList.innerHTML += `<li>${msg}</li>`;
                });
            }
            document.getElementById("alertError").classList.remove("d-none");
        }

        function hideErrors() {
            document.getElementById("alertError").classList.add("d-none");
            document.getElementById("errorList").innerHTML = "";
        }

        // Edit
        function editPortofolio(id) {
            fetch(`${apiUrl}/${id}`)
                .then(res => res.json())
                .then(item => {
                    editingId = id;
                    document.getElementById("modalTitle").innerText = "Edit Portofolio";
                    document.getElementById("id").value = item.id;
                    document.getElementById("title").value = item.title;
                    document.getElementById("description").value = item.description;
                    document.getElementById("link").value = item.link ?? '';
                    document.getElementById("status").value = item.status;

                    if (item.image_url) {
                        document.getElementById("preview").innerHTML =
                            `<img src="${item.image_url}" class="img-fluid rounded" width="150">`;
                    } else {
                        document.getElementById("preview").innerHTML = "";
                    }

                    hideErrors();
                    $("#portofolioModal").modal("show");
                });
        }

        // Delete
        function deletePortofolio(id) {
            if (!confirm("Yakin ingin menghapus?")) return;
            fetch(`${apiUrl}/${id}`, {
                    method: "DELETE",
                    headers: {
                        "Accept": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    }
                })
                .then(res => res.json())
                .then(res => {
                    loadPortofolio();
                });
        }

        // Reset modal saat tambah baru
        document.getElementById("btnAdd").addEventListener("click", function() {
            editingId = null;
            document.getElementById("modalTitle").innerText = "Tambah Portofolio";
            document.getElementById("formPortofolio").reset();
            document.getElementById("preview").innerHTML = "";
            hideErrors();
        });

        // Panggil load pertama kali
        document.addEventListener("DOMContentLoaded", loadPortofolio);
    </script>
@endpush
