<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Cards</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
    .stat-card {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        transition: 0.3s;
        min-height: 150px;
        text-decoration: none;
        color: inherit;
    }

    .stat-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .stat-card h5 {
        font-size: 14px;
        color: #6c757d;
        margin-bottom: 8px;
    }

    .stat-card h2 {
        font-size: 24px;
        font-weight: bold;
        color: #343a40;
    }

    .stat-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        font-size: 22px;
    }

    .bg-orders {
        background: #3b5998;
    }

    .bg-category {
        background: #00b894;
    }

    .bg-products {
        background: #fdcb6e;
        color: #000 !important;
    }

    .bg-customers {
        background: #d63031;
    }
    </style>
</head>

<body class="bg-light">

    <div class="container py-5">
        <div class="row g-4">
            <div class="container-fluid px-4 py-3">

                <!-- Top Title + Breadcrumb + Buttons -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h4 class="fw-bold">Admin</h4>
                        <small class="text-muted">Dashboard / <span class="fw-semibold">Admin Dashboard</span></small>
                    </div>
                </div>

                <!-- Welcome Banner -->
                <div class="card border-0 shadow-sm" style="background:#0c0b2b;">
                    <div class="card-body py-5 position-relative">
                        <h2 class="fw-bold text-light">Welcome Back, Admin</h2>
                        <p class="mb-0 text-light">Have a Good day at work</p>
                    </div>
                </div>

            </div>

            <!-- Total Category -->
            <div class="col-md-4 col-sm-6">
                <a href="{{ route('master') }}" class="stat-card">
                    <div>
                        <h5>Total Category</h5>
                        <h2>{{ $totalCategory }}</h2>
                    </div>
                    <div class="stat-icon bg-orders">
                        <i class="bi bi-card-checklist"></i>
                    </div>
                </a>
            </div>

            <!-- Total Sub Category -->
            <div class="col-md-4 col-sm-6">
                <a href="{{ route('subcreate_category') }}" class="stat-card">
                    <div>
                        <h5>Total Sub Category</h5>
                        <h2>{{ $totalSubCategory }}</h2>
                    </div>
                    <div class="stat-icon bg-category">
                        <i class="bi bi-shop"></i>
                    </div>
                </a>
            </div>

            <!-- Total Products -->
            <div class="col-md-4 col-sm-6">
                <a href="{{ route('Productslist') }}" class="stat-card">
                    <div>
                        <h5>Total Products</h5>
                        <h2>{{ $totalproduct }}</h2>
                    </div>
                    <div class="stat-icon bg-products">
                        <i class="bi bi-journal-text"></i>
                    </div>
                </a>
            </div>

            <!-- Total Products Enquiry -->
            <div class="col-md-4 col-sm-6">
                <a href="{{ route('ProductEnquiry') }}" class="stat-card">
                    <div>
                        <h5>Total Products Enquiry</h5>
                        <h2>{{ $totalProductEnquiry }}</h2>
                    </div>
                    <div class="stat-icon bg-products">
                        <i class="bi bi-gift"></i>
                    </div>
                </a>
            </div>

            <!-- Total Contact Enquiry -->
            <div class="col-md-4 col-sm-6">
                <a href="{{ route('Enquiry') }}" class="stat-card">
                    <div>
                        <h5>Total Contact Enquiry</h5>
                        <h2>{{ $totalContactEnquiry }}</h2>
                    </div>
                    <div class="stat-icon bg-customers">
                        <i class="bi bi-people"></i>
                    </div>
                </a>
            </div>

            <!-- Total Blog -->
            <div class="col-md-4 col-sm-6">
                <a href="{{ route('bloglist') }}" class="stat-card">
                    <div>
                        <h5>Total Blog</h5>
                        <h2>{{ $totalBlog }}</h2>
                    </div>
                    <div class="stat-icon bg-products">
                        <i class="bi bi-journal-text"></i>
                    </div>
                </a>
            </div>

        </div>
    </div>

</body>

</html>