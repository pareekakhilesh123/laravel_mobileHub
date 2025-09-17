<div>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dotted Upload with Preview + Validation + Remove</title>
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
        <div class="container py-5" style="padding:0px;">


            <!-- Form Section -->
            <div class="card p-4 shadow-sm">
                <h3 class="mb-4 text-center">Sub Category Form</h3>
                <form id="itemForm">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="label" class="form-label">Label</label>
                            <input type="text" class="form-control" id="label" placeholder="Enter Label" required />
                        </div>
                        <div class="col-md-6">
                            <label for="value" class="form-label">Value</label>
                               <input type="text" class="form-control" id="label" placeholder="Enter Label" required />
                        </div>


                        <div class="col-md-6">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected="">Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>




                        <!-- Image Upload Area Only -->
                        <div class="col-md-6 d-flex align-items-center">
                            <div id="uploadArea"
                                class="position-relative d-inline-flex align-items-center justify-content-center rounded upload-box"
                                style="border: 2px dotted #000; width: 150px; height: 150px; background-color: #f9f9f9; cursor: pointer;">

                                <!-- Hidden File Input -->
                                <input type="file" id="image" accept="image/*" class="d-none" />

                                <!-- Image Preview -->
                                <img id="preview" class="d-none rounded" alt="Preview"
                                    style="max-width: 120px; max-height: 120px; object-fit: contain;" />

                                <!-- Close button -->
                                <button type="button" id="closePreview"
                                    class="btn-close position-absolute top-0 start-100 translate-middle d-none"
                                    aria-label="Close"></button>

                                <!-- Placeholder text -->
                                <span id="placeholderText" class="text-muted small text-center">Click or Drop
                                    Image</span>

                            </div>
                            <small class="text-muted">* Image must be 1x1 ratio and less than 1MB.</small>
                        </div>



                    </div>
                    <div class="mt-4 text-end">
                        <button type="submit" class="btn btn-primary">Add Item</button>
                    </div>
                </form>
            </div>

            <!-- Items Table -->
            <h4 class="mt-5 mb-3">Items List</h4>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Label</th>
                            <th>Value</th>


                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody id="itemsTableBody"></tbody>
                </table>
            </div>
        </div>

        <!-- Toast Notification -->
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1100; height: 20px; padding: 0.5rem; ">
            <div id="successToast" class="toast align-items-center text-bg-success border-0" role="alert">
                <div class="d-flex">
                    <div class="toast-body">
                        Item submitted successfully!
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto"
                        data-bs-dismiss="toast"></button>
                </div>
            </div>
        </div>

        <script>
            const form = document.getElementById("itemForm");
            const imageInput = document.getElementById("image");
            const preview = document.getElementById("preview");
            const closePreview = document.getElementById("closePreview");
            const itemsTableBody = document.getElementById("itemsTableBody");
            const labelInput = document.getElementById("label");
            const valueInput = document.getElementById("value");

            let counter = 1;

            // Sync Label with Value
            labelInput.addEventListener("input", function () {
                valueInput.value = this.value;
            });

            // Open file dialog on click
            uploadArea.addEventListener("click", () => {
                imageInput.click();
            });

            const placeholderText = document.getElementById("placeholderText");

            // Image preview with validation
            // Image preview with validation (size + square check)
            // Handle file validation + preview
            function handleFile(file) {
                if (!file.type.startsWith("image/")) {
                    showErrorToast("Only image files are allowed!");
                    return;
                }

                if (file.size > 1024 * 1024) {
                    showErrorToast("Image must be less than 1MB!");
                    return;
                }

                const img = new Image();
                img.src = URL.createObjectURL(file);
                img.onload = function () {
                    if (img.width !== img.height) {
                        showErrorToast("Image must be square (1:1 ratio)!");
                        return;
                    }

                    // Show preview
                    preview.src = img.src;
                    preview.classList.remove("d-none");
                    closePreview.classList.remove("d-none");
                    placeholderText.classList.add("d-none");
                };
            }

            // Input file selection
            imageInput.addEventListener("change", function () {
                const file = this.files[0];
                if (file) handleFile(file);
            });

            // Drag & Drop Events
            uploadArea.addEventListener("dragover", (e) => {
                e.preventDefault();
                uploadArea.classList.add("dragover");
            });

            uploadArea.addEventListener("dragleave", () => {
                uploadArea.classList.remove("dragover");
            });

            uploadArea.addEventListener("drop", (e) => {
                e.preventDefault();
                uploadArea.classList.remove("dragover");

                const file = e.dataTransfer.files[0];
                if (file) {
                    imageInput.files = e.dataTransfer.files; // sync with input
                    handleFile(file);
                }
            });

            // Remove preview
            closePreview.addEventListener("click", (e) => {
                e.stopPropagation();
                preview.src = "";
                preview.classList.add("d-none");
                closePreview.classList.add("d-none");
                placeholderText.classList.remove("d-none");
                imageInput.value = "";
            });


            // Close (×) button removes image
            closePreview.addEventListener("click", function () {
                preview.src = "";
                preview.classList.add("d-none");
                closePreview.classList.add("d-none");
                imageInput.value = "";
                placeholderText.classList.remove("d-none"); // show placeholder back
            });


            // Add item to table + show toast
            form.addEventListener("submit", function (e) {
                e.preventDefault();

                const label = labelInput.value;
                const value = valueInput.value;


                const file = imageInput.files[0];

                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (event) {
                        const rowHTML = `
              <tr>
                <td>${counter++}</td>
                <td>${label}</td>
                <td>${value}</td>
                
                
                <td><img src="${event.target.result}" alt="${label}" style="height:50px; width:50px; object-fit:cover; border-radius:5px;"></td>
              </tr>
            `;
                        itemsTableBody.insertAdjacentHTML("beforeend", rowHTML);

                        // Show toast
                        const toastEl = document.getElementById("successToast");
                        const toast = new bootstrap.Toast(toastEl, { delay: 3000 }); // auto-hide after 3s
                        toast.show();
                    };
                    reader.readAsDataURL(file);
                }

                form.reset();
                preview.classList.add("d-none");
                closePreview.classList.add("d-none");
            });
        </script>

        <!-- Bootstrap JS (needed for toast) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</div>