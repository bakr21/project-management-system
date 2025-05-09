<?php include_once './inc/header.php' ?>
<?php include_once './helper/functions.php' ?>

<!-- Page Header -->
<div class="bg-light py-5 mb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="fw-bold text-primary mb-3 animate__animated animate__fadeInDown">إضافة مشروع جديد</h1>
                <p class="lead mb-0 animate__animated animate__fadeInUp">قم بإضافة تفاصيل المشروع الجديد وصورة له</p>
            </div>
            <div class="col-md-6 text-md-end animate__animated animate__fadeInRight">
                <i class="bi bi-plus-circle-dotted text-primary" style="font-size: 5rem;"></i>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Notification Section -->
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="alert alert-success shadow-sm animate__animated animate__fadeIn mb-4" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    <?php echo getSession('success'); ?>
                </div>
            <?php endif; ?>

            <!-- Info Card -->
            <div class="card border-0 bg-light shadow-sm mb-4">
                <div class="card-body p-3">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <i class="bi bi-info-circle-fill text-primary fs-4"></i>
                        </div>
                        <div>
                            <p class="card-text mb-0"><strong>ملاحظة:</strong> يتم حفظ بيانات المشروع في ملفات JSON بدون استخدام قاعدة بيانات، والصور تُحفظ في مجلد الرفع.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Card -->
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                <div class="card-body p-lg-5">
                    <form method="POST" enctype="multipart/form-data" action="./controller/createProjectController.php">
                        <div class="mb-4">
                            <label for="name" class="form-label fw-bold">اسم المشروع</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="bi bi-type"></i></span>
                                <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="أدخل اسم المشروع" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="form-label fw-bold">وصف المشروع</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="bi bi-text-paragraph"></i></span>
                                <textarea class="form-control form-control-lg" id="description" name="description" rows="4" placeholder="أدخل وصفاً تفصيلياً للمشروع" required></textarea>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="file" class="form-label fw-bold">صورة المشروع</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="bi bi-image"></i></span>
                                <input class="form-control form-control-lg" type="file" name="file" id="file" required>
                            </div>
                            <div class="form-text">يفضل استخدام صورة بأبعاد 16:9 للحصول على أفضل نتيجة</div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5">
                            <a href="index.php" class="btn btn-light btn-lg me-md-2">
                                <i class="bi bi-arrow-right me-2"></i> العودة
                            </a>
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                <i class="bi bi-save me-2"></i> حفظ المشروع
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once './inc/footer.php' ?>