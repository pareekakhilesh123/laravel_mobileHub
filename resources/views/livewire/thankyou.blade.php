<div>

<!-- Thank You Section -->
<section class="py-5 d-flex align-items-center" style="min-height:100vh;  background: linear-gradient(7deg, #f8f9fa, #1b7341);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">
                <!-- Card -->
                <div class="card shadow-lg border-0 rounded-5 text-center p-5 position-relative animate-card" style="background: linear-gradient(7deg, #f8f9fa, #bbe1cb);">
                    
                    <!-- Success Icon -->
                    <div class="mb-4 animate-icon">
                        <i class="bi bi-check-circle-fill text-success" style="font-size: 5rem;"></i>
                    </div>

                    <!-- Title -->
                    <h1 class="fw-bold mb-3 text-dark">Thank You!</h1>

                    <!-- Subtitle -->
                    <p class="lead text-muted mb-4">
                        🎉 Your message has been received successfully.  
                        Our team will get back to you very soon.
                    </p>

                    <!-- Button -->
                    <a href="{{ url('/') }}" class="btn btn-success btn-lg rounded-pill px-5 py-2 shadow-sm">
                        <i class="bi bi-house-door-fill me-2"></i> Back to Home
                    </a>
                </div>
                <!-- /Card -->
            </div>
        </div>
    </div>
</section>

<!-- 🎉 Confetti JS -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js"></script>
<script>
    // Fire confetti + icon animation on page load
    window.onload = () => {
        // Trigger card + icon animation
        document.querySelector(".animate-card").classList.add("show");
        document.querySelector(".animate-icon").classList.add("pop");

        // Confetti celebration
        var duration = 3 * 1000; // 3 sec
        var end = Date.now() + duration;

        (function frame() {
            confetti({
                particleCount: 5,
                angle: 60,
                spread: 55,
                origin: { x: 0 }
            });
            confetti({
                particleCount: 5,
                angle: 120,
                spread: 55,
                origin: { x: 1 }
            });

            if (Date.now() < end) {
                requestAnimationFrame(frame);
            }
        }());
    };
</script>

<!-- ✨ CSS Animation -->
<style>
    /* Card fade-in */
    .animate-card {
        opacity: 0;
        transform: translateY(40px);
        transition: all 0.8s ease-in-out;
    }
    .animate-card.show {
        opacity: 1;
        transform: translateY(0);
    }

    /* Success icon pop-in */
    .animate-icon {
        transform: scale(0);
        transition: transform 0.6s ease-in-out;
    }
    .animate-icon.pop {
        transform: scale(1.2);
        animation: bounce 0.6s ease forwards;
    }

    /* Bounce effect */
    @keyframes bounce {
        0%   { transform: scale(0.5); }
        60%  { transform: scale(1.2); }
        100% { transform: scale(1); }
    }
</style>


</div>
