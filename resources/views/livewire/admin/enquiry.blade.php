  <!-- Include List.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<!-- Include List.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<body class="bg-light">
  <div class="container">
    <!-- Form Section -->
    <div class="card mt-5 shadow-lg border-0">
      <div class="card-header" style="padding: 20px 20px 10px 20px;">
        <h4 class="mb-3">All Enquiry</h4>
      </div>

      <div id="tableExample4"
        data-list='{"valueNames":["id","name","email","phone","message","status"],"page":2,"pagination":true}'>

        <!-- Search & Filter Row -->
        <div class="row g-0 m-4 align-items-center ">

          <!-- Search Box -->
          <div class="col-6 search-box ">
            <form class="position-relative">
              <input class="form-control search-input search form-control-sm"
                type="search"
                placeholder="Search by anything..."
                aria-label="Search" />
              <span class="fas fa-search search-box-icon"></span>
            </form>
          </div>

          <!-- Dropdown Filter -->
          <div class="col-6  d-flex justify-content-end">
            <div style="width:200px;">
              <select class="form-select form-select-sm" data-list-filter="data-list-filter">
                <option selected value="">All Status</option>
                <option value="Pending">Pending</option>
                <option value="Resolved">Resolved</option>
              </select>
            </div>
          </div>

        </div>

        <!-- Table -->
        <div class="table-responsive">
          <table class="table table-sm fs-9 mb-0">
            <thead>
              <tr class="bg-body-highlight">
                <th class="sort border-top border-translucent ps-3 text-center" data-sort="id">ID</th>
                <th class="sort border-top border-translucent" data-sort="name">Name</th>
                <th class="sort border-top border-translucent" data-sort="email">Email</th>
                <th class="sort border-top border-translucent" data-sort="phone">Phone</th>
                <th class="sort border-top border-translucent" data-sort="message">Message</th>
                <th class="sort border-top border-translucent text-center" data-sort="status">Status</th>
                <th class="border-top border-translucent text-center">Actions</th>
              </tr>
            </thead>
            <tbody class="list">
              @php $counter = 1; @endphp
              @foreach($contactlist as $contact)
              <tr>
                <td class="id text-center">{{ $counter++ }}</td>
                <td class="align-middle name">{{ $contact->name }}</td>
                <td class="align-middle email">{{ $contact->email }}</td>
                <td class="align-middle phone">{{ $contact->phone }}</td>
                <td class="align-middle message">{{ $contact->message }}</td>
                <td class="align-middle text-center status">{{ $contact->status }}</td>
                <td class="align-middle text-center">
                  <button type="button" class="btn btn-sm btn-primary"
                    onclick="status_update_enquiry({{ $contact->id }}, '{{ $contact->status == 'Pending' ? 'Resolved' : 'Pending' }}')">
                    <i class="bi bi-pencil-square"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-danger"
                    onclick="deleteContact({{ $contact->id }})">
                    <i class="bi bi-trash"></i>
                  </button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-between mt-3">
          <span class="d-none d-sm-inline-block" data-list-info></span>
          <div class="d-flex align-items-center">
            <button class="page-link" data-list-pagination="prev">
              <i class="fas fa-chevron-left"></i>
            </button>
            <ul class="mb-0 pagination"></ul>
            <button class="page-link" data-list-pagination="next">
              <i class="fas fa-chevron-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

      <script>
      // Initialize List.js
      var options = {
          valueNames: ["id", "name", "email", "phone", "message", "status"],
          page: 10,
          pagination: true
      };
      var tableList = new List("tableExample4", options);

      // Dropdown filter
      document.querySelector('[data-list-filter]').addEventListener("change", function() {
          var selection = this.value;
          if (selection === "") {
              tableList.filter(); // Show all
          } else {
              tableList.filter(function(item) {
                  return item.values().status === selection;
              });
          }
      });

      // Delete Confirmation
      function deleteContact(id) {
          Swal.fire({
              title: 'Are you sure?',
              text: "This contact will be permanently deleted!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: '#3085d6',
              confirmButtonText: 'Yes, delete it!',
              cancelButtonText: 'Cancel'
          }).then((result) => {
              if (result.isConfirmed) {
                  window.location.href = `/delete-contact/${id}`;
              }
          });
      }

      // Status Update Confirmation
      function status_update_enquiry(id, newStatus) {
          Swal.fire({
              title: 'Are you sure?',
              text: "This contact status will be updated to " + newStatus,
              icon: 'info',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, update it!',
              cancelButtonText: 'Cancel'
          }).then((result) => {
              if (result.isConfirmed) {
                  window.location.href = `/update_enquiry/${id}/${newStatus}`;
              }
          });
      }
      </script>