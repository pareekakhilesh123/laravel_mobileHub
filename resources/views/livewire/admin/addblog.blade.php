<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h4>Add Blog</h4>
        </div>
        <div class="">
            <form method="POST" action="{{ route('addblogs') }}" enctype="multipart/form-data" id="blogForm" class="needs-validation" novalidate>
                @csrf

                <div class="p-4 mb-3">
                    <div class="mb-3">
                        <div class="card-header bg-light">
                            <h6 class="mb-0 fw-bold">Add Blog Information</h6>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-12 ">
                                <label for="blog_title" class="form-label">Blog Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="blog_title" name="blog_title"
                                    placeholder="Write title here..." required>
                                <div class="invalid-feedback">Please enter the blog title.</div>
                            </div>

                           <div class="col-md-12">
    <label for="blog_description" class="form-label">Blog Description <span class="text-danger">*</span></label>
    <textarea id="blog_description" name="blog_description" class="form-control" rows="4"
        placeholder="Enter description..." required></textarea>
    <div class="invalid-feedback">Please enter the blog description.</div>
</div>
                        </div>
                    </div>

                    <!-- Priority & Image -->
                    <div class="card mb-3">
                        <div class="card-header bg-light">
                            <h6 class="mb-0 fw-bold">Priority & Image Define</h6>
                        </div>
                        <div class="card-body row">
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

                            <!-- Thumbnail -->
                            <div class="mb-3 col-6">
                                <label for="blog_image" class="form-label">Thumbnail Image</label>
                                <input type="file" class="form-control" id="blog_image" name="blog_image" accept="image/*" required>

                                <!-- Preview wrapper -->
                                <div id="thumbWrapper" class="position-relative d-inline-block mt-2 d-none">
                                    <img id="thumbPreview" class="rounded"
                                        style="max-width: 120px; max-height: 120px; object-fit: contain;" />
                                    <button type="button" id="removeThumb"
                                        class="btn btn-sm btn-danger position-absolute top-0 end-0">×</button>
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
                                <!-- Meta Title -->
                                <div class="col-md-6">
                                    <label for="meta_title" class="form-label">Meta Title</label>
                                    <input type="text" class="form-control" id="meta_title" name="meta_title"
                                        placeholder="Enter meta title">
                                </div>

                                <!-- Meta Keywords -->
                                <div class="col-md-6">
                                    <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords"
                                        placeholder="Enter meta keywords">
                                </div>

                                <!-- Meta Description -->
                                <div class="col-md-12">
                                    <label for="meta_description" class="form-label">Meta Description</label>
                                    <textarea class="form-control" id="meta_description" name="meta_description"
                                        rows="1" placeholder="Enter meta description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="row mt-3">
                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-success">Save Blog</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    // Thumbnail Preview
    const thumbInput = document.getElementById("blog_image");
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

    // Bootstrap Validation
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

    //  CKEditor setup
    CKEDITOR.replace('blog_description', {
        height: 200,
        removePlugins: 'easyimage,cloudservices'
    });

    
</script>

</div>
