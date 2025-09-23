<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>View Product - Preview</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    /* Main Image Container */
    .main-image-container {
      width: 400px;
      height: 500px;
      margin: 0 auto;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    }

    .main-product-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* Thumbnail Images */
    .thumb-img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      cursor: pointer;
      transition: transform 0.2s;
      border: 2px solid transparent;
      border-radius: 4px;
    }

    .thumb-img:hover {
      transform: scale(1.05);
      border: 2px solid #666;
    }

    .thumb-img.active {
      border: 2px solid #000;
    }

    /* Scrollable thumbnails */
    .thumb-scroll {
      display: flex;
      gap: 10px;
      overflow-x: auto;
      padding: 10px 0;
      scrollbar-width: thin;
    }

    .thumb-scroll::-webkit-scrollbar {
      height: 6px;
    }

    .thumb-scroll::-webkit-scrollbar-thumb {
      background: #ccc;
      border-radius: 4px;
    }
  </style>

</head>

<body class="bg-light">
  <div class="container py-5">
    <div class='mb-3'>
      <a href="{{ route('Productslist') }}" class="btn btn-outline-secondary">Back to List</a>
    </div>

    <div class="row g-4 align-items-start">

      <!-- Product Image -->
      <div class="col-md-6 text-center">
        <div class="main-image-container">
          <img id="mainImage" 
               src="{{ asset('allimage/' . $data->thumbnail_image) }}" 
               class="main-product-img" 
               alt="{{ $data->product_title }}">
        </div>

        <!-- Scrollable Thumbnails -->
        <div class="thumb-scroll mt-3">
          {{-- Thumbnail Image --}}
          <img src="{{ asset('allimage/' . $data->thumbnail_image) }}" 
               class="thumb-img active" 
               onclick="changeImage(this)" alt="">

          {{-- Extra Images (comma separated) --}}
          
          @php
              $images = $data->images ? explode(',', $data->images) : [];
          @endphp
          @forelse($images as $img)
            <img src="{{ asset('allimage/' . trim($img)) }}" 
                 class="thumb-img" 
                 onclick="changeImage(this)">
          @empty
            <span class="text-muted">No extra images</span>
          @endforelse
        </div>
      </div>

      <!-- Product Details -->
      <div class="col-md-6">
        <h2 class="fw-bold mb-2">{{ $data->product_title }}</h2>
        <p class="text-muted">Description :: {{ strip_tags($data->product_description)  }}</p>

        <h3 class="text-success fw-bold mb-3">₹{{ number_format($data->price, 2) }}</h3>
        <p>
          <span class="text-success fw-bold">Category:</span>
          @foreach($cate as $c)
            @if($c->id == $data->category_id)
              {{ $c->label }}
            @endif
          @endforeach <br>

          <span class="text-primary fw-bold">Subcategory:</span>
          @foreach($subget as $s)
            @if($s->id == $data->sub_category_id)
              {{ $s->label }}
            @endif
          @endforeach <br>

          <span class="fw-bold">Priority:</span> {{ $data->priority }}
        </p>

        <!-- Price Setup Section -->
        <div class="card shadow-sm border-0 rounded-3 mb-4">
          <div class="card-header bg-light">
            <h6 class="mb-0 fw-bold">Price Setup</h6>
          </div>
          <div class="card-body">
            <div class="row g-3">
              <div class="col-md-4">
                <label class="fw-bold">Quantity:</label>
                <p class="form-control-plaintext">{{ $data->quantity }}</p>
              </div>
              <div class="col-md-4">
                <label class="fw-bold">Price (₹):</label>
                <p class="form-control-plaintext">{{ $data->price }}</p>
              </div>
              <div class="col-md-4">
                <label class="fw-bold">Discount Type:</label>
                <p class="form-control-plaintext">{{ ucfirst($data->discount_type) }}</p>
              </div>
              <div class="col-md-4">
                <label class="fw-bold">Discount Rate:</label>
                <p class="form-control-plaintext">{{ $data->discount_rate }}%</p>
              </div>
              <div class="col-md-4">
                <label class="fw-bold">Tax Amount (%):</label>
                <p class="form-control-plaintext">{{ $data->tax_amount }}%</p>
              </div>
              <div class="col-md-4">
                <label class="fw-bold">Shipping Cost (₹):</label>
                <p class="form-control-plaintext">{{ $data->shipping_cost }}</p>
              </div>
              <div class="col-md-4">
                <label class="fw-bold">Final Price (₹):</label>
                <p class="form-control-plaintext">{{ $data->final_price }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Features + SEO -->
      <div class="row g-4 mb-4">
        <!-- Features -->
        <div class="col-md-6">
          <div class="card shadow-sm border-0 rounded-3 h-100">
            <div class="card-header bg-light">
              <h6 class="mb-0 fw-bold">Key Features</h6>
            </div>
            <div class="card-body">
              <ul class="list-unstyled mb-0">
                @php
                    $keys = $data->feature_key ? explode(',', $data->feature_key) : [];
                    $values = $data->feature_value ? explode(',', $data->feature_value) : [];
                @endphp
                @forelse($keys as $i => $key)
                  <li>{{ trim($key) }} : {{ $values[$i] ?? '' }}</li>
                @empty
                  <li class="text-muted">No features added</li>
                @endforelse
              </ul>
            </div>
          </div>
        </div>

        <!-- SEO Section -->
        <div class="col-md-6">
          <div class="card shadow-sm border-0 rounded-3 h-100">
            <div class="card-header bg-light">
              <h6 class="mb-0 fw-bold">SEO Section</h6>
            </div>
            <div class="card-body">
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="fw-bold">Meta Title:</label>
                  <p class="form-control-plaintext">{{ $data->meta_title }}</p>
                </div>
                <div class="col-md-6">
                  <label class="fw-bold">Meta Keywords:</label>
                  <p class="form-control-plaintext">{{ $data->meta_keywords }}</p>
                </div>
                <div class="col-md-12">
                  <label class="fw-bold">Meta Description:</label>
                  <p class="form-control-plaintext">{{ $data->meta_description }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script>
    function changeImage(element) {
      let mainImg = document.getElementById("mainImage");
      mainImg.src = element.src;

      let thumbs = document.querySelectorAll(".thumb-img");
      thumbs.forEach(img => img.classList.remove("active"));
      element.classList.add("active");
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
