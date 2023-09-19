<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Anda yakin untuk keluar?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tekan tombol keluar untuk mengakhiri sesi anda!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="<?= base_url("Admin/Logout") ?>" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
            ©
            <script>
                document.write(new Date().getFullYear());
            </script>
            , RSU Avisena~
        </div>
    </div>
</footer>
<!-- / Footer -->

<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<script src="https://kit.fontawesome.com/d0e4aee64a.js" crossorigin="anonymous"></script>
<!-- build:js assets/vendor/js/core.js -->
<script src="<?= base_url('assets/vendor/'); ?>assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>assets/vendor/libs/popper/popper.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>assets/vendor/js/bootstrap.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="<?= base_url('assets/vendor/'); ?>assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?= base_url('assets/vendor/'); ?>assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="<?= base_url('assets/vendor/'); ?>assets/js/main.js"></script>

<!-- Page JS -->
<script src="<?= base_url('assets/vendor/'); ?>assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>