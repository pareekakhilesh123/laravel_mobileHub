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
        <form method="post" id="itemForm" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf

            <div class="row g-2">
                <!-- Left Side -->
                <div class="col-md-6">
                    
                    <!-- Parent Category -->
                    <div class="mb-2">
                        <label for="parent_id" class="form-label">Parent Category</label>
                        <select name="parent_id" id="parent_id" class="form-select" required>
                            <option value="" selected disabled>-- Select Category --</option>
                            @foreach ($show as $cat)
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

                    <!-- Priority -->
                    <div class="mb-2">
                        <label for="priority" class="form-label fw-bold">Priority</label>
                        <select name="priority" id="priority" class="form-select" required>
                            <option value="" selected disabled>-- Select Priority --</option>
                            @for ($i = 1; $i <= 10; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        <div class="invalid-feedback">Please select a priority.</div>
                    </div>
                </div>

                <!-- Right Side -->
                <div class="col-md-6" style="
    display: flex;
    justify-content: end;
    align-items: end;
">
                    <!-- Upload Image -->
                    <div class="mb-3">
                        <div class="d-flex align-items-center" >
                            <div id="dropZone"
                                class="position-relative d-inline-flex align-items-center justify-content-center rounded upload-box"
                                style="border: 2px dotted #000; width: 150px; height: 150px; background-color: #f9f9f9; cursor: pointer;">
                                <input type="file" name="upload" id="image" accept="image/*" class="d-none" />
                                <img id="preview" class="d-none rounded" alt="Preview"
                                    style="max-width: 120px; max-height: 120px; object-fit: contain;" />
                                <button type="button" id="closePreview"
                                    class="btn-close position-absolute top-0 start-100 translate-middle d-none"
                                    aria-label="Close"></button>
                                <span id="placeholderText" class="text-muted small text-center">Click or Drop Image</span>
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

        </form>
    </div>
</div>


            <!-- Items Table -->
       