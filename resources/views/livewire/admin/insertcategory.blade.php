<div>
    <div class="container mt-5" style="">
  <div class="card shadow-sm">
    <div class="card-header bg-dark text-white">
      <h5 class="mb-0 text-light">Add New Product</h5>
    </div>
    <div class="card-body">
      <form >
        @csrf
        <!-- Product Name -->
        <div class="mb-3">
          <label for="productName" class="form-label">Product Name</label>
          <input type="text" class="form-control" id="productName" name="product_name" placeholder="Enter product name" required>
        </div>

        <!-- Product Category -->
        <div class="mb-3">
         <label for="parent_id" class="form-label">Parent Category</label>
                                    <select name="cate_id" id="parent_id" class="form-select" required>
                                        <option value="" selected disabled>-- Select Category --</option>
                                        @foreach ($cate as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->label }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Please select a parent category.</div>
        </div>

      

        <!-- Product Title -->
        <div class="mb-3">
          <label for="productTitle" class="form-label">Product Title</label>
          <input type="text" class="form-control" id="productTitle" name="product_title" placeholder="Enter product title">
        </div>

        <!-- Product Description -->
        <div class="mb-3">
          <label for="productDescription" class="form-label">Product Description</label>
          <textarea class="form-control" id="productDescription" name="product_description" rows="4" placeholder="Enter product description"></textarea>
        </div>

        <!-- Product Key Features -->
        <div class="mb-3">
          <label class="form-label">Product Key Features</label>
          <div id="featuresWrapper">
            <div class="input-group mb-2">
              <input type="text" class="form-control" name="product_features[]" placeholder="Enter a feature">
              <button type="button" class="btn btn-outline-danger remove-feature">X</button>
            </div>
          </div>
          <button type="button" class="btn btn-outline-primary btn-sm" id="addFeature">+ Add Feature</button>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success">Save Product</button>
      </form>
    </div>
  </div>
</div>

<!-- Feature Add/Remove Script -->
<script>
  document.getElementById('addFeature').addEventListener('click', function () {
    let wrapper = document.getElementById('featuresWrapper');
    let div = document.createElement('div');
    div.classList.add('input-group', 'mb-2');
    div.innerHTML = `
      <input type="text" class="form-control" name="product_features[]" placeholder="Enter a feature">
      <button type="button" class="btn btn-outline-danger remove-feature">X</button>
    `;
    wrapper.appendChild(div);
  });

  document.addEventListener('click', function (e) {
    if (e.target && e.target.classList.contains('remove-feature')) {
      e.target.parentElement.remove();
    }
  });
</script>

  </div>
