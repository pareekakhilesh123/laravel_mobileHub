<div class="container mt-5">
  <div class="card">
    <div class="card-header">
<h4>Add Product</h4>
    </div>
    <div class="">
      <form method="POST" enctype="multipart/form-data" id="productForm" class="needs-validation" novalidate>
        @csrf
 
 <div class="p-4 mb-3">
                 <div class="card mb-3">
          <div class="card-header bg-light">
            <h6 class="mb-0 fw-bold">Product Basic Information</h6>
          </div>
                <div class="row g-3">
                    <div class="col-md-12">
                        <label for="title" class="form-label">Product Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="title"
                            placeholder="Write title here..." required>
                        <div class="invalid-feedback">Please enter the product title.</div>
                    </div>

                    <div class="col-md-12">
                        <label for="description" class="form-label">Product Description <span
                                class="text-danger">*</span></label>
                        <textarea id="description" name="description" class="form-control" rows="4"
                            placeholder="Enter description..." required></textarea>
                        <div class="invalid-feedback">Please enter the product description.</div>
                    </div>
                </div>
            </div>




  <!-- Basic Info -->
        <div class="card mb-3">
          <div class="card-header bg-light">
            <h6 class="mb-0 fw-bold"> Category Define</h6>
          </div>
          <div class="card-body row">
            <!-- Category -->
            <div class="col-4 mb-3">
              <label for="parent_id" class="form-label">Category</label>
              <select name="cate_id" id="parent_id" class="form-select" required>
                <option value="" selected disabled>-- Select Category --</option>
                @foreach ($cate as $cat)
                  <option value="{{ $cat->id }}">{{ $cat->label }}</option>
                @endforeach
              </select>
              <div class="invalid-feedback">Please select a category.</div>
            </div>

            <!-- Subcategory -->
         <div class="col-4 mb-3">
  <label for="sub_id" class="form-label">Sub Category</label>
  <select name="sub_id" id="sub_id" class="form-select">
    <option value="" selected disabled>-- Select Sub Category --</option>
  </select>
</div>

            <!-- Priority -->
            <div class="col-4 mb-3">
              <label for="priority" class="form-label fw-bold">Priority</label>
              <select name="priority" id="priority" class="form-select" required>
                <option value="" selected disabled>-- Select Priority --</option>
                @for ($i = 1; $i <= 10; $i++)
                  <option value="{{ $i }}">{{ $i }}</option>
                @endfor
              </select>
              <div class="invalid-feedback">Please select a priority.</div>
            </div>

            <!-- Product Name -->
        
          </div>
        </div>

 

        <!-- Images Section -->
        <div class="card mb-3">
          <div class="card-header bg-light">
            <h6 class="mb-0 fw-bold">Product Images</h6>
          </div>
          <div class="card-body row">
      
          <!-- Thumbnail -->
<div class="mb-3 col-6">
  <label for="thumbnail" class="form-label">Thumbnail Image</label>
  <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept="image/*" required>

  <!-- Preview wrapper -->
  <div id="thumbWrapper" class="position-relative d-inline-block mt-2 d-none">
    <img id="thumbPreview" class="rounded"
      style="max-width: 120px; max-height: 120px; object-fit: contain;" />
    <button type="button" id="removeThumb"
      class="btn btn-sm btn-danger position-absolute top-0 end-0">×</button>
  </div>
</div>


            <!-- Multiple Images -->
            <div class="mb-3 col-6">
              <label for="images" class="form-label">Multiple Images</label>
              <input type="file" class="form-control" id="images" name="images[]" accept="image/*" multiple>
              <div id="multiPreview" class="mt-2 d-flex flex-wrap gap-2"></div>
            </div>
          </div>
        </div>

        <!-- Price Setup  -->
         <div class="card shadow-sm border-0 rounded-3 mb-4">
  <div class="card-header bg-light">
    <h6 class="mb-0 fw-bold"> Price Setup</h6>
  </div>
  <div class="card-body">
    <div class="row g-3">

      <!-- Quantity -->
      <div class="col-md-3 col-4">
        <label for="quantity" class="form-label">Quantity <span class="text-danger">*</span></label>
        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" required>
        <div class="invalid-feedback">Please enter the quantity.</div>
      </div>

      <!-- Price -->
      <div class="col-md-3 col-4" >
        <label for="price" class="form-label">Price <span class="text-danger">*</span></label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Enter price" required>
        <div class="invalid-feedback">Please enter the price.</div>
      </div>

      <!-- Discount Type -->
      <div class="col-md-3 col-4">
        <label for="discount_type" class="form-label">Discount Type</label>
        <select class="form-select" id="discount_type" name="discount_type">
          <option value="percent">Percent</option>
          <option value="flat">Flat</option>
        </select>
      </div>

    

      <!-- Discount Rate -->
      <div class="col-md-3">
        <label for="discount_rate" class="form-label">Discount Rate</label>
        <input type="number" class="form-control" id="discount_rate" name="discount_rate" placeholder="Enter discount rate">
      </div>

      <!-- Tax Amount -->
      <div class="col-md-3 ">
        <label for="tax_amount" class="form-label">Tax Amount (%)</label>
        <input type="number" class="form-control" id="tax_amount" name="tax_amount" placeholder="Enter tax amount">
      </div>

      <!-- Shipping Cost -->
      <div class=" col-md-3 ">
        <label for="shipping_cost" class="form-label">Shipping Cost (₹)</label>
        <input type="number" class="form-control" id="shipping_cost" name="shipping_cost" placeholder="Enter shipping cost">
      </div>
        <!-- Final Price -->
      <div class="col-md-3 ">
        <label for="final_price" class="form-label">Final Price (₹) <span class="text-danger">*</span></label>
        <input type="number" class="form-control" id="final_price" name="final_price" placeholder="Final price" required readonly>
        <div class="invalid-feedback">Final price is required.</div>
      </div>
    </div>
  </div>
</div>

      

         <div class="card shadow-sm border-0 rounded-3 mb-4"> 
  <div class="card-header bg-light">
    <h6 class="mb-0 fw-bold"> SEO Section</h6>
  </div>
  <div class="card-body">
    <div class="row g-3">

      <!-- Meta Title -->
      <div class="col-md-6">
        <label for="meta_title" class="form-label">Meta Title</label>
        <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Enter meta title">
      </div>

      <!-- Meta Keywords -->
      <div class="col-md-6">
        <label for="meta_keywords" class="form-label">Meta Keywords</label>
        <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" placeholder="Enter meta keywords">
      </div>

      <!-- Meta Description -->
      <div class="col-md-12">
        <label for="meta_description" class="form-label">Meta Description</label>
        <textarea class="form-control" id="meta_description" name="meta_description" rows="1" placeholder="Enter meta description"></textarea>
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
    <div id="featuresWrapper">
      <div class="row g-2 mb-2 feature-row">
        <!-- Key -->
        <div class="col-md-5">
          <input type="text" class="form-control" name="feature_keys[]" placeholder="Enter Key (e.g. Color)">
        </div>
        <!-- Value -->
        <div class="col-md-5">
          <input type="text" class="form-control" name="feature_values[]" placeholder="Enter Value (e.g. Red)">
        </div>
        <!-- Remove Button -->
        <div class="col-md-2 d-grid">
          <button type="button" class="btn btn-outline-danger remove-feature">X</button>
        </div>
      </div>
    </div>

    <!-- Add Feature Button -->
    <button type="button" class="btn btn-outline-primary btn-sm" id="addFeature">+ Add Feature</button>

    <div class="row mt-3">
      <div class="col-12 text-end">
        <!-- Submit Button -->
        <button type="submit" class="btn btn-success">Save Product</button>
      </div>
    </div>
  </div>
</div>


</form>
    </div>
  </div>

        
<!-- Scripts -->

<script>
  // Add Feature Row
  document.getElementById('addFeature').addEventListener('click', function () {
    const wrapper = document.getElementById('featuresWrapper');
    const newRow = document.createElement('div');
    newRow.classList.add('row', 'g-2', 'mb-2', 'feature-row');
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

  // Remove Feature Row
  document.addEventListener('click', function (e) {
    if (e.target.classList.contains('remove-feature')) {
      e.target.closest('.feature-row').remove();
    }
  });
</script>

<script>
 //  Thumbnail Preview
  const thumbInput = document.getElementById("thumbnail");
const thumbPreview = document.getElementById("thumbPreview");
const thumbWrapper = document.getElementById("thumbWrapper");
const removeThumb = document.getElementById("removeThumb");

thumbInput.addEventListener("change", () => {
  if (thumbInput.files && thumbInput.files[0]) {
    let reader = new FileReader();
    reader.onload = (e) => {
      thumbPreview.src = e.target.result;
      thumbWrapper.classList.remove("d-none");
    };
    reader.readAsDataURL(thumbInput.files[0]);
  }
});

removeThumb.addEventListener("click", () => {
  thumbInput.value = "";
  thumbPreview.src = "";
  thumbWrapper.classList.add("d-none");
});

  // 🔹 Multiple Images Preview with Remove
  const multiInput = document.getElementById("images");
  const multiPreview = document.getElementById("multiPreview");

  multiInput.addEventListener("change", () => {
    multiPreview.innerHTML = "";
    if (multiInput.files) {
      [...multiInput.files].forEach((file) => {
        let reader = new FileReader();
        reader.onload = (e) => {
          let div = document.createElement("div");
          div.classList.add("position-relative");
          div.style.display = "inline-block";

          let img = document.createElement("img");
          img.src = e.target.result;
          img.classList.add("rounded");
          img.style.maxWidth = "100px";
          img.style.maxHeight = "100px";
          img.style.objectFit = "cover";

          let btn = document.createElement("button");
          btn.innerHTML = "×";
          btn.type = "button";
          btn.classList.add("btn", "btn-sm", "btn-danger", "position-absolute", "top-0", "end-0");
          btn.onclick = () => div.remove();

          div.appendChild(img);
          div.appendChild(btn);
          multiPreview.appendChild(div);
        };
        reader.readAsDataURL(file);
      });
    }
  });

  // 🔹 Bootstrap Validation
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
<!-- description show  -->
  <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description', {
            height: 200,
            removePlugins: 'easyimage,cloudservices'
        });
    </script>


<script>
  document.addEventListener("DOMContentLoaded", function () {
    const qty = document.getElementById("quantity");
    const price = document.getElementById("price");
    const discountType = document.getElementById("discount_type");
    const discountRate = document.getElementById("discount_rate");
    const tax = document.getElementById("tax_amount");
    const shipping = document.getElementById("shipping_cost");
    const finalPrice = document.getElementById("final_price");

    function calculateFinalPrice() {
      let q = parseFloat(qty.value) || 0;
      let p = parseFloat(price.value) || 0;
      let dType = discountType.value;
      let dRate = parseFloat(discountRate.value) || 0;
      let t = parseFloat(tax.value) || 0;
      let s = parseFloat(shipping.value) || 0;

      let total = q * p;

      // Apply Discount
      if (dType === "percent") {
        total -= total * (dRate / 100);
      } else if (dType === "flat") {
        total -= dRate;
      }

      // Apply Tax
      total += total * (t / 100);

      // Add Shipping
      total += s;

      // Prevent negative price
      total = total < 0 ? 0 : total;

      finalPrice.value = total.toFixed(2);
    }

    // 🔹 Events
    [qty, price, discountType, discountRate, tax, shipping].forEach(el => {
      el.addEventListener("input", calculateFinalPrice);
      el.addEventListener("change", calculateFinalPrice);
    });

    // Initial
    calculateFinalPrice();
  });
</script>
<!-- subcategroy dropdown -->
<script>
  document.getElementById("parent_id").addEventListener("change", function () {
    let categoryId = this.value;

    if (categoryId) {
      fetch(`/get-subcategories/${categoryId}`)
        .then(response => response.json())
        .then(data => {
          let subSelect = document.getElementById("sub_id");
          subSelect.innerHTML = '<option value="" disabled selected>-- Select Sub Category --</option>';
          
          data.forEach(sub => {
            let option = document.createElement("option");
            option.value = sub.id;
            option.textContent = sub.label;
            subSelect.appendChild(option);
          });
        })
        .catch(err => console.error(err));
    }
  });
</script>


</div>
