<div>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Subcategory Management</title>

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
                    <h4 class="mb-3">Add Subcategory</h4>
                </div>

                <div class="card-body">
                    <form method="post" action="{{ route('subcreate_category') }}" id="itemForm"
                        enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf

                        <div class="row g-2">
                            <!-- Left Side -->
                            <div class="col-md-6">

                                <!-- Parent Category -->
                                <div class="mb-2">
                                    <label for="parent_id" class="form-label">Parent Category</label>
                                    <select name="cate_id" id="parent_id" class="form-select" required>
                                        <option value="" selected disabled>-- Select Category --</option>
                                        @foreach ($cate as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->label }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Please select a parent category.</div>
                                </div>

                                <!-- Subcategory Name -->
                                <div class="mb-2">
                                    <label for="label" class="form-label">Subcategory Name</label>
                                    <input type="text" name="label" class="form-control" id="label"
                                        placeholder="Enter Subcategory" required />
                                    <div class="invalid-feedback">Please enter a Subcategory Name.</div>
                                </div>

                                <!-- Hidden Value Field (only ONE is enough) -->
                                <input type="hidden" name="value" id="value" />

                                <!-- Priority -->
                                <div class="mb-2">
                                    <label for="priority" class="form-label fw-bold">Priority</label>
                                    <select name="priority" id="priority" class="form-select" required>
                                        <option value="" selected disabled>-- Select Priority --</option>
                                        @for ($i = 1; $i <= 10; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                    </select>
                                    <div class="invalid-feedback">Please select a priority.</div>
                                </div>
                            </div>

                            <!-- Right Side -->
                            <div class="col-md-6" style="display: flex; justify-content: end; align-items: end;
">
                                <!-- Upload Image -->
                                <div class="mb-3">
                                    <div class="d-flex align-items-center">
                                        <div id="dropZone"
                                            class="position-relative d-inline-flex align-items-center justify-content-center rounded upload-box"
                                            style="border: 2px dotted #000; width: 150px; height: 150px; background-color: #f9f9f9; cursor: pointer;">
                                            <input type="file" name="upload" id="image" accept="image/*"
                                                class="d-none" />
                                            <img id="preview" class="d-none rounded" alt="Preview"
                                                style="max-width: 120px; max-height: 120px; object-fit: contain;" />
                                            <button type="button" id="closePreview"
                                                class="btn-close position-absolute top-0 start-100 translate-middle d-none"
                                                aria-label="Close"></button>
                                            <span id="placeholderText" class="text-muted small text-center">Click or
                                                Drop Image</span>
                                        </div>
                                        <small class="text-muted ms-2">
                                            * Image must be 1x1 ratio and less than 1MB (optional).
                                        </small>
                                    </div>
                                </div>

                                <!-- Hidden Value Field -->
                                <div class="mb-3 d-none">
                                    <label for="value" class="form-label">Value</label>
                                    <input type="text" name="value" class="form-control" id="value"
                                        placeholder="Auto-filled from Label" />
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-4 text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>


</div>
            </div>
                    </form>
                    
                    <div class="card mt-5 shadow-lg border-0">
                <div class="card-header" style="padding: 20px 20px 10px 20px;">
                    <h4 class="mb-3">Sub category List</h4>
                </div>
                <div class="card-body">
                    <table id="touchTable" class="table table-hover table-striped table-bordered align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Sub Category Name </th>
                                 <th>Category Name</th>
                                <th>Priority</th>
                                <th>Image</th>
                                <th style="width: 200px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $counter = 1; @endphp
                            @foreach ($subget as $d)
                                <tr>
                                    <td class="text-center">{{ $counter++ }}</td>
                                    <td>{{ $d->label }}</td>
                                     <td>

                                        @foreach($cate as $c)
                                        @if($c->id == $d->category_id)
                                        {{ $c->label }}
                                        @endif

                                        @endforeach
                                    
                                    </td>
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

                                            <form method="post" 
                                        
                                            
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="updid" id="editId" value="{{ $d->id }}">

                                                <div class="modal-body">
                                                    <div class="row g-3">
                                                        <div class="col-6">
                                                            <label class="form-label"> Category Name </label>
                                                            <select name="cate_id" id="parent_id" class="form-select" required>
    <option value="" selected disabled>-- Select Category --</option>
    @foreach ($cate as $cat)
        <option value="{{ $cat->id }}" {{ $d->category_id == $cat->id ? 'selected' : '' }}>
            {{ $cat->label }}
        </option>
    @endforeach
</select>
                                    <div class="invalid-feedback">Please select a parent category.</div>
                                                        </div>
                                                         <div class="col-6">
                                                            <label class="form-label">Sub Category Name </label>
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


                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>


            <script>
            // Upload click handler
            document.getElementById("dropZone").addEventListener("click", function() {
                document.getElementById("image").click();
            });

            // Image preview handler
            document.getElementById("image").addEventListener("change", function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById("preview").src = e.target.result;
                        document.getElementById("preview").classList.remove("d-none");
                        document.getElementById("placeholderText").classList.add("d-none");
                        document.getElementById("closePreview").classList.remove("d-none");
                    };
                    reader.readAsDataURL(file);
                }
            });

            // Remove image preview
            document.getElementById("closePreview").addEventListener("click", function() {
                document.getElementById("image").value = "";
                document.getElementById("preview").src = "";
                document.getElementById("preview").classList.add("d-none");
                document.getElementById("placeholderText").classList.remove("d-none");
                document.getElementById("closePreview").classList.add("d-none");
            });
            </script>


            <script>
            $(document).ready(function() {
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


            function deleteSubcategory(id) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "This Subcategory will be permanently deleted!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = `/delete-subcategory/${id}`;
                    }
                });
            }
            </script>

            <!-- Auto-fill VALUE from Label -->
            <script>
            const labelInput = document.getElementById("label");
            const valueInput = document.getElementById("value");

            labelInput.addEventListener("input", () => {
                valueInput.value = labelInput.value.trim().toLowerCase().replace(/\s+/g, "_");
            });
            </script>


    </body>
</div>