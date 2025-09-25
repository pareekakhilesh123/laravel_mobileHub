<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>


    <!-- Bootstrap Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>

<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">All Products </h4>
            <a href="{{ route('Insertproduct') }}" class="btn btn-success btn-sm">+ Add Product</a>
        </div>
        <div class="card-body">
            <table id="productTable" class="table table-hover table-striped table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>SN</th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Sub Category</th>
                        <th>Priority</th>
                        <th>Status</th>
                        <th style="width: 200px;">Action</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach($products as $product)
                    <tr>
                        <!-- Serial Number -->
                        <td>{{$loop->iteration}}</td>

                        <!-- Image -->
                        <td>

                            <img src="{{ asset('allimage/'.$product->thumbnail_image) }}" class="rounded" width="60"
                                height="60" style="object-fit: cover;">

                        </td>

                        <!-- Product Name -->
                        <td>{{ $product->product_title }}</td>

                        <!-- Category -->
                        <td>
                            @foreach($cate as $c)
                            @if($c->id == $product->category_id)
                            {{ $c->label }}
                            @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach($subget as $sub)
                            @if($sub->id == $product->sub_category_id)
                            {{ $sub->label }}
                            @endif
                            @endforeach
                        </td>
                        <!-- Priority -->
                        <td>{{ $product->priority }}</td>

                        <!-- Status (Toggle Button) -->
                        <td class="text-center">
                            <div class="form-check form-switch d-flex justify-content-center">
                                <input class="form-check-input" onclick="changestatus({{ $product->id }})"
                                    type="checkbox" role="switch" id="SwitchCheck{{ $product->id }}"
                                    @if($product->status === 'Active') checked @endif
                                >
                            </div>
                        </td>

                        <!-- Actions -->
                        <td>
                            <a href="{{ url('admin/product/preview/'. $product->id ) }}" class="btn btn-info btn-sm"><i
                                    class="bi bi-eye"></i></a>
                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                data-bs-target="#editProductModal{{ $product->id }}" data-id="{{ $product->id }}">


                                <i class="bi bi-pencil-square "></i></button>

                            <button type="button" onclick="deleteProduct(<?php echo $product->id ?>)"
                                class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <!-- Edit Product Modal -->
                    <div class="modal fade" id="editProductModal{{ $product->id }}" tabindex="-1"
                        aria-labelledby="editProductLabel{{ $product->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header bg-light">
                                    <h5 class="modal-title fw-bold" id="editProductLabel{{ $product->id }}">Edit Product
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <form method="POST" action="{{ route('Updateproduct') }}" enctype="multipart/form-data"
                                    class="needs-validation" novalidate>
                                    @csrf
                                    <input type="hidden" name="pid" value="{{ $product->id }}">

                                    <div class="modal-body">
                                        <div class="p-4 mb-3">

                                            <!-- Product Basic Information -->
                                            <div class=" mb-3">
                                                <div class="card-header bg-light">
                                                    <h6 class="mb-0 fw-bold">Product Basic Information</h6>
                                                </div>
                                                <div class="row g-3">
                                                    <div class="col-md-12">
                                                        <label for="title{{ $product->id }}" class="form-label">Product
                                                            Title <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control"
                                                            id="title{{ $product->id }}" name="title"
                                                            placeholder="Write title here..."
                                                            value="{{ $product->product_title }}" required>
                                                        <div class="invalid-feedback">Please enter the product title.
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <label for="description{{ $product->id }}"
                                                            class="form-label">Product Description <span
                                                                class="text-danger">*</span></label>
                                                        <textarea id="description{{ $product->id }}" name="description"
                                                            class="form-control" rows="4"
                                                            placeholder="Enter description..."
                                                            required>{{ $product->product_description }}</textarea>
                                                        <div class="invalid-feedback">Please enter the product
                                                            description.</div>
                                                    </div>

                                                </div>
                                            </div>

                                            <!-- Category Define -->
                                            <div class="card mb-3">
                                                <div class="card-header bg-light">
                                                    <h6 class="mb-0 fw-bold">Category Define</h6>
                                                </div>
                                                <div class="card-body row">
                                                    <!-- Category -->
                                                    <div class="col-4 mb-3">
                                                        <label for="parent_id" class="form-label">Category</label>
                                                        <select name="cate_id" id="parent_id" class="form-select"
                                                            required>
                                                            <option value="" disabled>-- Select Category --</option>
                                                            @foreach ($cate as $cat)
                                                            <option value="{{ $cat->id }}"
                                                                {{ $cat->id == $product->category_id ? 'selected' : '' }}>
                                                                {{ $cat->label }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                        <div class="invalid-feedback">Please select a category.</div>
                                                    </div>

                                                    <!-- Subcategory -->
                                                    <div class="col-4 mb-3">
                                                        <label for="sub_id" class="form-label">Sub Category</label>
                                                        <select name="sub_id" id="sub_id" class="form-select" required>
                                                            <option value="" disabled>-- Select Sub Category --</option>
                                                            @foreach ($subget as $sub)
                                                            <option value="{{ $sub->id }}"
                                                                {{ $sub->id == $product->sub_category_id ? 'selected' : '' }}>
                                                                {{ $sub->label }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <!-- Priority -->
                                                    <div class="col-4 mb-3">
                                                        <label for="priority{{ $product->id }}"
                                                            class="form-label fw-bold">Priority</label>
                                                        <select name="priority" id="priority{{ $product->id }}"
                                                            class="form-select" required>
                                                            <option value="" disabled>-- Select Priority --</option>
                                                            @for ($i = 1; $i <= 10; $i++) <option value="{{ $i }}"
                                                                {{ $i == $product->priority ? 'selected' : '' }}>
                                                                {{ $i }}</option>
                                                                @endfor
                                                        </select>
                                                        <div class="invalid-feedback">Please select a priority.</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Thumbnail -->
                                            <!-- Images Section -->
                                            <div class="card mb-3">
                                                <div class="card-header bg-light">
                                                    <h6 class="mb-0 fw-bold">Product Images</h6>
                                                </div>
                                                <div class="card-body row">

                                                    <!-- Thumbnail -->
                                                    <div class="mb-3 col-6">
                                                        <label class="form-label">Thumbnail Image</label>
                                                        <input type="file" class="form-control thumbnail-input"
                                                            name="thumbnail" accept="image/*">

                                                        <!-- Preview wrapper -->
                                                        <div
                                                            class="thumb-wrapper position-relative d-inline-block mt-2 {{ $product->thumbnail_image ? '' : 'd-none' }}">
                                                            <img class="thumb-preview rounded"
                                                                src="{{ $product->thumbnail_image ? asset('allimage/'.$product->thumbnail_image) : '' }}"
                                                                style="max-width: 120px; max-height: 120px; object-fit: contain;" />
                                                            <button type="button"
                                                                class="btn btn-sm btn-danger remove-thumb position-absolute top-0 end-0">×</button>
                                                        </div>
                                                    </div>

                                                    <!-- Multiple Images -->
                                                    <div class="mb-3 col-6">
                                                        <label class="form-label">Multiple Images</label>
                                                        <input type="file" class="form-control multi-input"
                                                            name="multipleimage[]" accept="image/*" multiple>
                                                        <div class="multi-preview mt-2 d-flex flex-wrap gap-2">
                                                            @if($product->images)
                                                            @foreach(explode(',', $product->images) as $img)
                                                            <div class="position-relative d-inline-block existing-img">
                                                                <img src="{{ asset('allimage/'.$img) }}" class="rounded"
                                                                    style="max-width: 100px; max-height: 100px; object-fit: cover;" />
                                                                <button type="button"
                                                                    class="btn btn-sm btn-danger position-absolute top-0 end-0 remove-multi"
                                                                    data-img="{{ $img }}">×</button>
                                                            </div>
                                                            @endforeach
                                                            @endif
                                                        </div>
                                                        <input type="hidden" name="removed_images"
                                                            class="removed-images-input" value="">
                                                    </div>
                                                </div>
                                            </div>



                                            <!-- Price Setup -->
                                            <div class="card shadow-sm border-0 rounded-3 mb-4">
                                                <div class="card-header bg-light">
                                                    <h6 class="mb-0 fw-bold">Price Setup</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row g-3">
                                                        <div class="col-md-3 col-4">
                                                            <label for="quantity{{ $product->id }}"
                                                                class="form-label">Quantity <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="number" class="form-control"
                                                                id="quantity{{ $product->id }}" name="quantity"
                                                                value="{{ $product->quantity }}" required>
                                                        </div>
                                                        <div class="col-md-3 col-4">
                                                            <label for="price{{ $product->id }}"
                                                                class="form-label">Price <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="number" class="form-control"
                                                                id="price{{ $product->id }}" name="price"
                                                                value="{{ $product->price }}" required>
                                                        </div>
                                                        <div class="col-md-3 col-4">
                                                            <label for="discount_type{{ $product->id }}"
                                                                class="form-label" required>Discount Type</label>
                                                            <select class="form-select"
                                                                id="discount_type{{ $product->id }}"
                                                                name="discount_type">
                                                                <option value="" disabled>-- Select Discount Type --
                                                                </option>
                                                                <option value="percent"
                                                                    {{ $product->discount_type == 'percent' ? 'selected' : '' }}>
                                                                    Percent</option>
                                                                <option value="flat"
                                                                    {{ $product->discount_type == 'flat' ? 'selected' : '' }}>
                                                                    Flat</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="discount_rate{{ $product->id }}"
                                                                class="form-label">Discount Rate</label>
                                                            <input type="number" class="form-control"
                                                                id="discount_rate{{ $product->id }}"
                                                                name="discount_rate"
                                                                value="{{ $product->discount_rate }}" >
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="tax_amount{{ $product->id }}"
                                                                class="form-label">Tax Amount (%)</label>
                                                            <input type="number" class="form-control"
                                                                id="tax_amount{{ $product->id }}" name="tax_amount"
                                                                value="{{ $product->tax_amount }}">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="shipping_cost{{ $product->id }}"
                                                                class="form-label">Shipping Cost (₹)</label>
                                                            <input type="number" class="form-control"
                                                                id="shipping_cost{{ $product->id }}"
                                                                name="shipping_cost"
                                                                value="{{ $product->shipping_cost }}">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="final_price{{ $product->id }}"
                                                                class="form-label">Final Price (₹)</label>
                                                            <input type="number" class="form-control"
                                                                id="final_price{{ $product->id }}" name="final_price"
                                                                value="{{ $product->final_price }}" readonly required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- SEO Section -->
                                            <div class="card shadow-sm border-0 rounded-3 mb-4">
                                                <div class="card-header bg-light">
                                                    <h6 class="mb-0 fw-bold">SEO Section</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row g-3">
                                                        <div class="col-md-6">
                                                            <label for="meta_title{{ $product->id }}"
                                                                class="form-label">Meta Title</label>
                                                            <input type="text" class="form-control"
                                                                id="meta_title{{ $product->id }}" name="meta_title"
                                                                value="{{ $product->meta_title }}">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="meta_keywords{{ $product->id }}"
                                                                class="form-label">Meta Keywords</label>
                                                            <input type="text" class="form-control"
                                                                id="meta_keywords{{ $product->id }}"
                                                                name="meta_keywords"
                                                                value="{{ $product->meta_keywords }}">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="meta_description{{ $product->id }}"
                                                                class="form-label">Meta Description</label>
                                                            <textarea class="form-control"
                                                                id="meta_description{{ $product->id }}"
                                                                name="meta_description"
                                                                rows="1">{{ $product->meta_description }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Features Section -->
                                            <div class="card mb-3">
                                                <div class="card-header bg-light">
                                                    <h6 class="mb-0 fw-bold">Product Key Features</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div id="featuresWrapper{{ $product->id }}">
                                                        @php
                                                        $keys = $product->feature_key ? explode(',',
                                                        $product->feature_key) : [];
                                                        $values = $product->feature_value ? explode(',',
                                                        $product->feature_value) : [];
                                                        @endphp

                                                        @foreach($keys as $index => $key)
                                                        <div class="row g-2 mb-2 feature-row">
                                                            <div class="col-md-5">
                                                                <input type="text" class="form-control"
                                                                    name="feature_keys[]" value="{{ $key }}"
                                                                    placeholder="Enter Key (e.g. Color)">
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input type="text" class="form-control"
                                                                    name="feature_values[]"
                                                                    value="{{ $values[$index] ?? '' }}"
                                                                    placeholder="Enter Value (e.g. Red)">
                                                            </div>
                                                            <div class="col-md-2 d-grid">
                                                                <button type="button"
                                                                    class="btn btn-outline-danger remove-feature">X</button>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <button type="button" class="btn btn-outline-primary btn-sm"
                                                        id="addFeature{{ $product->id }}">+ Add Feature</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-success">Update Product</button>
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

<!-- JS Files -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    document.querySelectorAll("textarea[id^='description']").forEach((textarea) => {
        CKEDITOR.replace(textarea.id, {
            height: 200,
            removePlugins: "easyimage,cloudservices"
        });
    });
});
</script>


<script>
//  Bootstrap Validation
(() => {
    'use strict';
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
})();
</script>







<script>
function calculateFinalPrice() {
    let price = parseFloat(document.getElementById("price").value) || 0;
    let discountType = document.getElementById("discount_type").value;
    let discountRate = parseFloat(document.getElementById("discount_rate").value) || 0;
    let taxAmount = parseFloat(document.getElementById("tax_amount").value) || 0;
    let shippingCost = parseFloat(document.getElementById("shipping_cost").value) || 0;

    let discountedPrice = price;

    // Discount Calculation
    if (discountType === "percent") {
        discountedPrice = price - (price * discountRate / 100);
    } else if (discountType === "flat") {
        discountedPrice = price - discountRate;
    }

    if (discountedPrice < 0) discountedPrice = 0; // Negative na ho

    // Tax Calculation
    let tax = (discountedPrice * taxAmount) / 100;

    // Final Price
    let finalPrice = discountedPrice + tax + shippingCost;

    document.getElementById("final_price").value = finalPrice.toFixed(2);
}

// Event Listeners
document.getElementById("price").addEventListener("input", calculateFinalPrice);
document.getElementById("discount_type").addEventListener("change", calculateFinalPrice);
document.getElementById("discount_rate").addEventListener("input", calculateFinalPrice);
document.getElementById("tax_amount").addEventListener("input", calculateFinalPrice);
document.getElementById("shipping_cost").addEventListener("input", calculateFinalPrice);
</script>




<script>
$(document).ready(function() {
    $('#productTable').DataTable({
        "pageLength": 5,
        "ordering": true,
        "searching": true,
        "lengthChange": true,
        "language": {
            search: "_INPUT_",
            searchPlaceholder: "Search products..."
        }
    });
});
</script>

<script>
function deleteProduct(id) {
    alert(id);
    Swal.fire({
        title: 'Are you sure?',
        text: "This Product will be permanently deleted!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = `/delete-product/${id}`;
        }
    });
}
</script>




</script>
<!-- subcategroy dropdown -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const categorySelect = document.getElementById("parent_id");
    const subSelect = document.getElementById("sub_id");

    categorySelect.addEventListener("change", function() {
        let categoryId = this.value;

        if (categoryId) {
            fetch(`/get-subcategories/${categoryId}`)
                .then(response => response.json())
                .then(data => {
                    subSelect.innerHTML =
                        '<option value="" disabled selected>-- Select Sub Category --</option>';

                    if (data.length === 0) {
                        let option = document.createElement("option");
                        option.value = "";
                        option.textContent = "No Subcategories Found";
                        subSelect.appendChild(option);
                    } else {
                        data.forEach(sub => {
                            let option = document.createElement("option");
                            option.value = sub.id;
                            option.textContent = sub.label;
                            subSelect.appendChild(option);
                        });
                    }
                })
                .catch(err => console.error("Error fetching subcategories:", err));
        } else {
            subSelect.innerHTML =
                '<option value="" disabled selected>-- Select Sub Category --</option>';
        }
    });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {

    // 🔹 Thumbnail preview & remove
    document.querySelectorAll(".thumbnail-input").forEach(function(input) {
        input.addEventListener("change", function() {
            let wrapper = this.closest(".col-6").querySelector(".thumb-wrapper");
            let preview = wrapper.querySelector(".thumb-preview");

            if (this.files && this.files[0]) {
                let reader = new FileReader();
                reader.onload = (e) => {
                    preview.src = e.target.result;
                    wrapper.classList.remove("d-none");
                };
                reader.readAsDataURL(this.files[0]);
            }
        });
    });

    // ❌ Thumbnail remove (delegation)
    document.addEventListener("click", function(e) {
        if (e.target.classList.contains("remove-thumb")) {
            let wrapper = e.target.closest(".thumb-wrapper");
            let input = wrapper.closest(".col-6").querySelector(".thumbnail-input");
            let preview = wrapper.querySelector(".thumb-preview");

            input.value = "";
            preview.src = "";
            wrapper.classList.add("d-none");
        }
    });

    // 🔹 Multiple images preview (new uploads)
    document.querySelectorAll(".multi-input").forEach(function(input) {
        input.addEventListener("change", function() {
            let previewBox = this.closest(".col-6").querySelector(".multi-preview");
            previewBox.innerHTML = "";

            [...this.files].forEach((file) => {
                let reader = new FileReader();
                reader.onload = (e) => {
                    let div = document.createElement("div");
                    div.classList.add("position-relative", "d-inline-block");

                    let img = document.createElement("img");
                    img.src = e.target.result;
                    img.classList.add("rounded");
                    img.style.maxWidth = "100px";
                    img.style.maxHeight = "100px";
                    img.style.objectFit = "cover";

                    let btn = document.createElement("button");
                    btn.innerHTML = "×";
                    btn.type = "button";
                    btn.classList.add("btn", "btn-sm", "btn-danger",
                        "position-absolute", "top-0", "end-0", "remove-multi");

                    div.appendChild(img);
                    div.appendChild(btn);
                    previewBox.appendChild(div);
                };
                reader.readAsDataURL(file);
            });
        });
    });

    //  Remove multiple images (delegation: DB wali + nayi wali dono)
    document.addEventListener("click", function(e) {
        if (e.target.classList.contains("remove-multi")) {
            let div = e.target.closest("div.position-relative");
            let imgName = e.target.getAttribute("data-img");

            // agar ye DB wali image hai to hidden input me add karo
            if (imgName) {
                let hiddenInput = div.closest(".col-6").querySelector(".removed-images-input");
                let oldValue = hiddenInput.value ? hiddenInput.value.split(",") : [];
                oldValue.push(imgName);
                hiddenInput.value = oldValue.join(",");
            }

            // UI se remove karo
            div.remove();
        }
    });


});
</script>


<script>
document.addEventListener("DOMContentLoaded", function() {
    // Har product ke liye alag add button handle karenge
    document.querySelectorAll("[id^='addFeature']").forEach(function(btn) {
        btn.addEventListener("click", function() {
            let productId = this.id.replace("addFeature", "");
            let wrapper = document.getElementById("featuresWrapper" + productId);

            // Naya feature row banayenge
            let newRow = document.createElement("div");
            newRow.classList.add("row", "g-2", "mb-2", "feature-row");
            newRow.innerHTML = `
                <div class="col-md-5">
                    <input type="text" class="form-control" name="feature_keys[]" placeholder="Enter Key (e.g. Color)">
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" name="feature_values[]" placeholder="Enter Value (e.g. Red)">
                </div>
                <div class="col-md-2 d-grid">
                    <button type="button" class="btn btn-outline-danger remove-feature">X</button>
                </div>
            `;

            wrapper.appendChild(newRow);
        });
    });

    // Remove button ka listener (event delegation use kiya hai)
    document.addEventListener("click", function(e) {
        if (e.target.classList.contains("remove-feature")) {
            e.target.closest(".feature-row").remove();
        }
    });
});
</script>
 

<script>
function changestatus(id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: "POST",
        url: "/update/status/product",
        data: {
            cateid: id
        },
        dataType: "json",
        success: function(response) {
            if (response.status) {
                alert("Product status updated to: " + response.new_status);
                // Optionally reload or update UI
                // location.reload();
            } else {
                alert("Error: " + response.message);
            }
        },
        error: function() {
            alert("AJAX request failed");
        }
    });
}
</script>

