<!-- Include List.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<body class="bg-light">
  <div class="container">
    <!-- Form Section -->
    <div class="card mt-5 shadow-lg border-0">
      <div class="card-header" style="padding: 20px 20px 10px 20px;">
        <h4 class="mb-3">All Products Enquiry</h4>
      </div>

      <div id="tableExample4"
        data-list='{"valueNames":["id","product","name","email","phone","message"],"page":5,"pagination":true}'>

        <!-- Search -->
        <div class="row g-0 m-4 align-items-center">
          <div class="col-6 search-box">
            <form class="position-relative">
              <input class="form-control search-input search form-control-sm"
                type="search"
                placeholder="Search by anything..."
                aria-label="Search" />
              <span class="bi bi-search search-box-icon"></span>
            </form>
          </div>
        </div>

        <!-- Table -->
        <div class="table-responsive">
          <table class="table table-sm fs-9 mb-0">
            <thead>
              <tr class="bg-body-highlight">
                <th class="sort border-top border-translucent text-center" data-sort="id">#</th>
                <th class="sort border-top border-translucent" data-sort="product">Product</th>
                <th class="sort border-top border-translucent" data-sort="name">Name</th>
                <th class="sort border-top border-translucent" data-sort="email">Email</th>
                <th class="sort border-top border-translucent" data-sort="phone">Phone</th>
                <th class="sort border-top border-translucent" data-sort="message">Message</th>
                <th class="border-top border-translucent text-center">Action</th>
              </tr>
            </thead>
            <tbody class="list">
              @php $counter = 1; @endphp
              @foreach($contactlist as $contact)
              <tr>
                <td class="id text-center">{{ $counter++ }}</td>
                <td class="product">{{ $contact->product_title }}</td>
                <td class="name">{{ $contact->name }}</td>
                <td class="email">{{ $contact->email }}</td>
                <td class="phone">{{ $contact->phone }}</td>
                <td class="message">{{ $contact->message }}</td>
                <td class="text-center">
                  <button type="button" onclick="deleteSubCategory({{ $contact->id }})" class="btn btn-sm btn-danger">
                    <i class="bi bi-trash"></i>
                  </button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-between mt-3 px-3">
          <span class="d-none d-sm-inline-block" data-list-info></span>
          <div class="d-flex align-items-center">
            <button class="page-link" data-list-pagination="prev">
              <i class="bi bi-chevron-left"></i>
            </button>
            <ul class="mb-0 pagination"></ul>
            <button class="page-link" data-list-pagination="next">
              <i class="bi bi-chevron-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<!-- SweetAlert delete -->
<script>
function deleteSubCategory(id) {
  Swal.fire({
    title: 'Are you sure?',
    text: "This Product enquiry item will be permanently deleted!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#d33',
    cancelButtonColor: '#3085d6',
    confirmButtonText: 'Yes, delete it!',
    cancelButtonText: 'Cancel'
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = `/delete-productenquiry/${id}`;
    }
  });
}
</script>

<!-- Initialize List.js -->
<script>
var options = {
  valueNames: ["id", "product", "name", "email", "phone", "message"],
  page: 5,
  pagination: true
};
var tableList = new List("tableExample4", options);
</script>
