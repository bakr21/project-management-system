<?php include_once './inc/header.php' ?>
<?php include_once './helper/functions.php' ?>

<?php
$projects = getAllProjects();
?>

<!-- Hero Section -->
<div class="hero-section text-center py-5 mb-5">
    <div class="container">
        <h1 class="display-4 fw-bold text-primary mb-3 animate__animated animate__fadeInDown">مشاريعنا المميزة</h1>
        <p class="lead mb-4 animate__animated animate__fadeInUp">استعرض أحدث المشاريع وقم بإدارتها بكل سهولة</p>
        <a href="create.php" class="btn btn-primary btn-lg px-4 animate__animated animate__pulse animate__infinite animate__slower">إضافة مشروع جديد</a>
    </div>
</div>

<!-- Notification Section -->
<div class="container">
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="alert alert-success shadow-sm animate__animated animate__fadeIn mb-4" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i>
            <?php echo getSession('success'); ?>
        </div>
    <?php endif; ?>

    <!-- Projects Section -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-6">
        <?php foreach ($projects as $project) : ?>
            <div class="col">
                <div class="card h-100 project-card shadow-sm hover-effect">
                    <div class="card-img-container">
                        <img src="uploads/<?= $project['image'] ?>" class="card-img-top project-image" alt="<?= $project['name'] ?>">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><?= $project['name'] ?></h5>
                        <p class="card-text"><?= $project['description'] ?></p>
                    </div>
                    <div class="card-footer bg-transparent border-0 d-flex justify-content-between">
                        <a href="edit.php?id=<?= $project['id'] ?>" class="btn btn-outline-primary">
                            <i class="bi bi-pencil-square"></i> تعديل
                        </a>
                        <form class="d-inline" action="./controller/deleteProjectController.php" method="post">
                            <input type="hidden" name="id" value="<?= $project['id'] ?>">
                            <button type="submit" class="btn btn-outline-danger">
                                <i class="bi bi-trash"></i> حذف
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Empty State -->
    <?php if (empty($projects)) : ?>
        <div class="text-center py-3 my-3">
            <div class="empty-state animate__animated animate__fadeIn">
                <i class="bi bi-folder-plus display-1 text-muted"></i>
                <h3 class="mt-4">لا توجد مشاريع حالياً</h3>
                <p class="text-muted">قم بإضافة مشروع جديد للبدء</p>
                <a href="create.php" class="btn btn-primary mt-3">إضافة مشروع</a>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php include_once './inc/footer.php' ?>