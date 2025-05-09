    <!-- Footer -->
    <footer class="bg-primary text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="mb-3">نظام إدارة المشاريع</h5>
                    <p class="mb-0">نظام متكامل لإدارة المشاريع بطريقة سهلة وبسيطة</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <h5 class="mb-3">تواصل معنا</h5>
                    <div class="d-flex justify-content-md-end">
                        <a href="#" class="text-white me-3"><i class="bi bi-facebook fs-4"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-twitter fs-4"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-instagram fs-4"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-linkedin fs-4"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p class="mb-0 small"><i class="bi bi-hdd-stack me-1"></i> نظام يعمل بدون قاعدة بيانات - يستخدم ملفات JSON لتخزين البيانات</p>
                <p class="mb-0 mt-2">&copy; <?= date('Y') ?> جميع الحقوق محفوظة</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Custom JS -->
    <script>
        // Add animation classes to elements when they come into view
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effect to buttons
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(button => {
                button.addEventListener('mouseenter', function() {
                    this.classList.add('shadow-sm');
                });
                button.addEventListener('mouseleave', function() {
                    this.classList.remove('shadow-sm');
                });
            });

            // Auto-hide alerts after 5 seconds
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                setTimeout(() => {
                    alert.classList.add('animate__fadeOut');
                    setTimeout(() => {
                        alert.remove();
                    }, 1000);
                }, 5000);
            });
        });
    </script>
</body>

</html>