<div>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dotted Upload with Preview + Validation + Remove</title>

        <!-- Bootstrap Icon -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
        <!-- DataTables CSS -->
        <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">

        <style>
            .upload-box {
                transition: 0.3s;
            }

            .upload-box:hover,
            .upload-box.dragover {
                border-color: #0d6efd;
                background-color: #eaf4ff;
            }
        </style>
    </head>

    <body class="bg-light">
        <div class="container">
            <!-- Form Section -->
            <div class="card mt-5 shadow-lg border-0">
                <div class="card-header" style="padding: 20px 20px 10px 20px;">
                    <h4 class="mb-3">Add Category</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="#" id="itemForm" enctype="multipart/form-data"
                        class="needs-validation" novalidate>
                        @csrf
                        <div class="row g-3">

                            <div class="col-6">
                                <div class="clo-12">
                                    <label for="label" class="form-label ">Category Name <span
                                            class="text-danger">*</span> </label>
                                    <input type="text" name="label" class="form-control" id="label"
                                        placeholder="Enter Label" required />
                                    <div class="invalid-feedback">Please enter a Category Name .</div>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="priority" class="form-label fw-bold">Priority</label>
                                    <select name="priority" id="priority" class="form-select">
                                        <option value="" selected disabled>-- Select Priority --</option>
                                        @for ($i = 1; $i <= 10; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                    <div class="invalid-feedback">Please select a priority.</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class=" d-flex align-items-center">
                                    <div id="dropZone"
                                        class="position-relative d-inline-flex align-items-center justify-content-center rounded upload-box"
                                        style="border: 2px dotted #000; width: 150px; height: 150px; background-color: #f9f9f9; cursor: pointer;">
                                        <input type="file" name="upload" id="image" accept="image/*" class="d-none" />
                                        <img id="preview" class="d-none rounded" alt="Preview"
                                            style="max-width: 120px; max-height: 120px; object-fit: contain;" />
                                        <button type="button" id="closePreview"
                                            class="btn-close position-absolute top-0 start-100 translate-middle d-none"
                                            aria-label="Close"></button>
                                        <span id="placeholderText" class="text-muted small text-center">Click or Drop
                                            Image</span>
                                    </div>
                                    <small class="text-muted ms-2">* Image must be 1x1 ratio and less than 1MB
                                        (optional).</small>
                                </div>
                            </div>

                            <div class="col-md-6 d-none">
                                <label for="value" class="form-label">Value</label>
                                <input type="text" name="value" class="form-control" id="value"
                                    placeholder="Auto-filled from Label" required />
                                <div class="invalid-feedback">Please enter a value.</div>
                            </div>



                            <!-- Image Upload (optional) -->

                        </div>

                        <div class="mt-4 text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Items Table -->
            <div class="card mt-5 shadow-lg border-0">
                <div class="card-header" style="padding: 20px 20px 10px 20px;">
                    <h4 class="mb-3">Items List</h4>
                </div>
                <div class="card-body">
                    <table id="touchTable" class="table table-hover table-striped table-bordered align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Category Name </th>
                                <th>Priority</th>
                                <th>Image</th>
                                <th style="width: 200px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $counter = 1; @endphp
                            @foreach ($show as $d)
                                <tr>
                                    <td class="text-center">{{ $counter++ }}</td>
                                    <td>{{ $d->label }}</td>
                                    <td>{{ $d->priority }}</td>
                                    <td>
                                        @if($d->image)
                                            <img src="{{ asset('allimage/' . $d->image) }}"
                                                class="img-thumbnail rounded shadow-sm" style="height:40px; object-fit:cover;">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif

                                    <td>
                                        <!-- Edit Button -->
                                        <!-- Edit Button -->
                                        <a href="#" class="btn btn-sm btn-warning me-1" data-bs-toggle="modal"
                                            data-bs-target="#editModal<?php    echo $d->id ?>" data-id="{{ $d->id }}" data-label="{{ $d->label }}"
                                            data-priority="{{ $d->priority }}" data-value="{{ $d->value }}"
                                            data-image="{{ $d->image }}" title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                            <span class="d-none d-md-inline"> Edit</span>
                                        </a>


                                        <!-- Delete Button -->

                                        <button type="button" onclick="deleteCategory(<?php    echo $d->id ?>)"
                                            class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Delete">
                                            <i class="bi bi-trash"></i>
                                            <span class="d-none d-md-inline"> Delete</span>
                                        </button>
                                    </td>

                                    </td>
                                </tr>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="editModal<?php    echo $d->id ?>" tabindex="-1"
                                    aria-labelledby="editModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel">Edit Category</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <form method="post" action="{{route('updatecateupdate')}}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="updid" id="editId" value="{{ $d->id }}">

                                                <div class="modal-body">
                                                    <div class="row g-3">
                                                        <div class="col-6">
                                                            <label class="form-label"> Category Name </label>
                                                            <input type="text" name="label" id="editLabel"
                                                                class="form-control" value="{{ $d->label }}" required>
                                                        </div>

                                                        <div class="col-6">
                                                            <label class="form-label">Priority</label>
                                                            <select name="priority" id="editPriority" class="form-select">
                                                                <option value="" disabled>-- Select Priority --</option>
                                                                @for ($i = 1; $i <= 10; $i++)
                                                                    <option value="{{ $i }}" {{ $d->priority == $i ? 'selected' : '' }}>{{ $i }}</option>
                                                                @endfor
                                                            </select>
                                                        </div>

                                                        <div class="col-6 d-none">
                                                            <label class="form-label">Value</label>
                                                            <input type="text" name="value" id="editValue" value="{{ $d->value }}"
                                                                class="form-control" required>
                                                        </div>

                                                        <div class="col-6">
      <label class="form-label">Image</label>
    <input type="file" name="upload"
           class="form-control editUpload"
           data-preview="editPreview{{ $d->id }}">

    <!-- Old Image Preview -->
    <img id="editPreview{{ $d->id }}"
         src="{{ $d->image ? asset('allimage/'.$d->image) : '' }}"
         class="mt-2 rounded {{ $d->image ? '' : 'd-none' }}"
         style="max-width:100px;">
</div>

                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success">Update</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Toast Notification -->
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1100;">
            <div id="toastBox" class="toast align-items-center text-bg-dark border-0" role="alert">
                <div class="d-flex">
                    <div class="toast-body" id="toastMessage"></div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto"
                        data-bs-dismiss="toast"></button>
                </div>
            </div>
        </div>

    

<script>
document.addEventListener("DOMContentLoaded", function () {
    // Har file input ke liye listener
    document.querySelectorAll(".editUpload").forEach(input => {
        input.addEventListener("change", function () {
            let previewId = this.getAttribute("data-preview");
            let preview = document.getElementById(previewId);

            if (this.files && this.files[0]) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;   // New image preview
                    preview.classList.remove("d-none");
                };
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
});
</script>




        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const form = document.getElementById("itemForm");
                const labelInput = document.getElementById("label");
                const valueInput = document.getElementById("value");
                const fileInput = document.getElementById("image");
                const dropZone = document.getElementById("dropZone");
                const preview = document.getElementById("preview");
                const placeholderText = document.getElementById("placeholderText");
                const closePreview = document.getElementById("closePreview");

                const toastBox = document.getElementById("toastBox");
                const toastMessage = document.getElementById("toastMessage");
                const toast = new bootstrap.Toast(toastBox);

                function showToast(message, type = "success") {
                    toastBox.className = `toast align-items-center text-bg-${type} border-0`;
                    toastMessage.textContent = message;
                    toast.show();
                }

                // Auto-fill VALUE from Label
                labelInput.addEventListener("input", () => {
                    valueInput.value = labelInput.value.trim();
                });

                // Click upload
                dropZone.addEventListener("click", () => fileInput.click());

                // Drag & Drop
                dropZone.addEventListener("dragover", (e) => {
                    e.preventDefault();
                    dropZone.classList.add("border-primary");
                });
                dropZone.addEventListener("dragleave", () => {
                    dropZone.classList.remove("border-primary");
                });
                dropZone.addEventListener("drop", (e) => {
                    e.preventDefault();
                    dropZone.classList.remove("border-primary");
                    if (e.dataTransfer.files.length) {
                        fileInput.files = e.dataTransfer.files;
                        handleFile(fileInput.files[0]);
                    }
                });

                // File select
                fileInput.addEventListener("change", () => {
                    if (fileInput.files.length) {
                        handleFile(fileInput.files[0]);
                    }
                });

                // Handle image preview + validation
                function handleFile(file) {
                    if (file.size > 1024 * 1024) {
                        showToast("Image must be less than 1MB.", "danger");
                        fileInput.value = "";
                        return;
                    }
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        const img = new Image();
                        img.src = e.target.result;
                        img.onload = () => {
                            if (img.width !== img.height) {
                                showToast("Image must be 1:1 ratio.", "danger");
                                fileInput.value = "";
                                return;
                            }
                            preview.src = e.target.result;
                            preview.classList.remove("d-none");
                            placeholderText.classList.add("d-none");
                            closePreview.classList.remove("d-none");
                            showToast("Image uploaded successfully!", "success");
                        };
                    };
                    reader.readAsDataURL(file);
                }

                // Remove preview
                closePreview.addEventListener("click", () => {
                    preview.src = "";
                    preview.classList.add("d-none");
                    placeholderText.classList.remove("d-none");
                    closePreview.classList.add("d-none");
                    fileInput.value = "";
                    showToast("Image removed", "warning");
                });

                // Form submit validation + toast
                form.addEventListener("submit", function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                        showToast(" Please fill all required fields.", "danger");
                    } else {
                        showToast(" Item submitted successfully!", "success");
                    }
                    form.classList.add("was-validated");
                }, false);
            });
        </script>
        <!-- 
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var editModal = document.getElementById('editModal');

                editModal.addEventListener('show.bs.modal', function (event) {
                    var button = event.relatedTarget;

                    var id = button.getAttribute('data-id');
                    var label = button.getAttribute('data-label');
                    var priority = button.getAttribute('data-priority');
                    var value = button.getAttribute('data-value');
                    var image = button.getAttribute('data-image');

                    document.getElementById('editId').value = id;
                    document.getElementById('editLabel').value = label;
                    document.getElementById('editPriority').value = priority;
                    document.getElementById('editValue').value = value;

                    var preview = document.getElementById('editPreview');
                    if (image) {
                        preview.src = "/allimage/" + image;
                        preview.classList.remove("d-none");
                    } else {
                        preview.classList.add("d-none");
                    }



                });
            });
        </script> -->
        



        <script>
            function deleteCategory(id) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "This Category item will be permanently deleted!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {

                        window.location.href = `/delete-category/${id}`;
                    }
                });
            }
        </script>

        <!-- JS -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

        <script>
            $(document).ready(function () {
                $('#touchTable').DataTable({
                    paging: true,
                    searching: true,
                    ordering: true,
                    lengthMenu: [10, 25, 50],
                    language: {
                        search: "Search",
                        searchPlaceholder: "Search records..."
                    }
                });
            });



        </script>
    </body>
</div>