<div>

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
                <a href="#" class="btn btn-success btn-sm">+ Add Product</a>
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
                                    <input class="form-check-input status-toggle" type="checkbox"
                                        data-id="{{ $product->id }}"
                                        {{ $product->status == 'Active' ? 'checked' : '' }}>
                                </div>
                            </td>

                            <!-- Actions -->
                            <td>
                                <a href="#" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>

                                <button type="button" onclick="deleteProduct(<?php echo $product->id ?>)"
                                    class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
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

</div>