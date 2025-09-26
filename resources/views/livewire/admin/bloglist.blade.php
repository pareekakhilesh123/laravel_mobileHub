<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Management</title>

  <!-- Bootstrap Icon -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- DataTables CSS -->
  <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>

<div class="container mt-5">
  <div class="card shadow-lg border-0">
    <div class="card-header d-flex justify-content-between align-items-center  text-white">
      <h4 class="mb-0">All Blogs</h4>
      <a href="{{ route('addblog') }}" class="btn btn-success btn-sm fw-bold">
        <i class="bi bi-plus-circle me-1"></i> Add Blog
      </a>
    </div>
    <div class="table-responsive card-body">
      <table id="blogTable" class="table table-hover table-bordered align-middle">
        <thead class="table-dark">
          <tr>
            <th width="60">SN</th>
            <th width="80">Image</th>
            <th>Blog Title</th>
            <th width="90">Priority</th>
            <th width="90">Status</th>
            <th width="200">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($blogs as $blog)
          <tr>
            <td class="text-center">{{ $loop->iteration }}</td>
            <td class="text-center">
              <img src="{{ asset('blog_images/'.$blog->blog_image) }}" class="rounded shadow-sm" width="60" height="60"
                style="object-fit: cover;">
            </td>
            <td class="fw-semibold">{{ $blog->blog_title }}</td>
            <td class="text-center">{{ $blog->priority }}</td>
            <td class="text-center">
              <div class="form-check form-switch d-flex justify-content-center">
                <input class="form-check-input" onclick="changeBlogStatus({{ $blog->id }})" type="checkbox"
                  role="switch" id="SwitchCheck{{ $blog->id }}" @if($blog->status === 'Active') checked @endif>
              </div>
            </td>
            <td class="text-center">
              <!-- Preview -->
              <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#previewBlog{{ $blog->id }}">
                <i class="bi bi-eye"></i>
              </button>
              <!-- Edit -->
              <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editBlogModal{{ $blog->id }}">
                <i class="bi bi-pencil-square"></i>
              </button>
              <!-- Delete -->
              <button type="button" onclick="deleteBlog({{ $blog->id }})" class="btn btn-danger btn-sm">
                <i class="bi bi-trash"></i>
              </button>
            </td>
          </tr>

          <!-- 🔹 Preview Modal -->
          <div class="modal fade" id="previewBlog{{ $blog->id }}" tabindex="-1">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-info text-white">
                  <h5 class="modal-title">Preview Blog</h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                  <h5 class="fw-bold">{{ $blog->blog_title }}</h5>
                  <p><span class="badge bg-primary">Priority: {{ $blog->priority }}</span></p>
              
                  <img src="{{ asset('blog_images/'.$blog->blog_image) }}" class="rounded-circle "
                  style="width: 100px; height: 100px; object-fit: cover;">
                
                 {!! $blog->blog_description !!}
                  <hr>
                  <small class="text-muted">
                    <b>Meta Title:</b> <p>{{ $blog->meta_title }} </p><br>   
                    <b>Meta Keywords:</b> <p> {{ $blog->meta_keywords }} </p> <br>  
                    <b>Meta Description:</b> <p> {{ $blog->meta_description }} </p>
                  </small>
                </div>
              </div>
            </div>
          </div>

          <!-- 🔹 Edit Blog Modal -->
          <div class="modal fade" id="editBlogModal{{ $blog->id }}" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header text-white">
                  <h5 class="modal-title">Edit Blog</h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <form method="POST" action="{{ route('blogupdate') }}" enctype="multipart/form-data"
                  class="needs-validation" novalidate>
                  @csrf
                  <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                  <div class="modal-body">
                    <div class="mb-3">
                      <label class="form-label">Blog Title</label>
                      <input type="text" class="form-control" name="blog_title" value="{{ $blog->blog_title }}" required>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Blog Description</label>
                      <textarea name="blog_description" id="desc{{ $blog->id }}" class="form-control" rows="4"
                        required>{{ $blog->blog_description }}</textarea>
                    </div>
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <label class="form-label">Priority</label>
                        <select name="priority" class="form-select">
                          @for ($i = 1; $i <= 10; $i++)
                            <option value="{{ $i }}" {{ $i == $blog->priority ? 'selected' : '' }}>{{ $i }}</option>
                          @endfor
                        </select>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-label">Thumbnail Image</label>
                        <input type="file" class="form-control" name="blog_image" accept="image/*">
                        <div class="mt-2">
                          <img src="{{ asset('blog_images/'.$blog->blog_image) }}" width="100" height="100"
                            class="rounded shadow-sm" style="object-fit:cover;">
                        </div>
                      </div>
                    </div>
                    <hr>
                    <h6 class="fw-bold">SEO Section</h6>
                    <div class="mb-2">
                      <label class="form-label">Meta Title</label>
                      <input type="text" class="form-control" name="meta_title" value="{{ $blog->meta_title }}">
                    </div>
                    <div class="mb-2">
                      <label class="form-label">Meta Keywords</label>
                      <input type="text" class="form-control" name="meta_keywords" value="{{ $blog->meta_keywords }}">
                    </div>
                    <div class="mb-2">
                      <label class="form-label">Meta Description</label>
                      <textarea class="form-control" name="meta_description" rows="2">{{ $blog->meta_description }}</textarea>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Update Blog</button>
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

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  $(document).ready(function () {
    $('#blogTable').DataTable({
      "pageLength": 5,
      "ordering": true,
      "searching": true,
      "lengthChange": true,
      "language": {
        search: "_INPUT_",
        searchPlaceholder: "Search blogs..."
      }
    });

    // CKEditor init for all edit modals
    document.querySelectorAll("textarea[id^='desc']").forEach((textarea) => {
      CKEDITOR.replace(textarea.id, {
        height: 200,
        removePlugins: "easyimage,cloudservices"
      });
    });
  });

function changeBlogStatus(id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: "POST",
        url: "/update/status/blog",
        data: {
            cateid: id
        },
        dataType: "json",
        success: function(response) {
            if (response.status) {
                alert("Blog status updated to: " + response.new_status);
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
  // Delete
  function deleteBlog(id) {
    Swal.fire({
      title: 'Are you sure?',
      text: "This Blog will be permanently deleted!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'Cancel'
    }).then((result) => {
      if (result.isConfirmed) window.location.href = `/delete-blog/${id}`;
    });
  }
</script>
