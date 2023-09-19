    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?= base_url("Main"); ?>">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0" name="u_name" placeholder="Username....">
                                    <label>Username</label>
                                    <?= form_error('u_name', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control bg-light border-0" name="u_pass" placeholder="Password....">
                                    <label>Password</label>
                                    <?= form_error('u_pass', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" value="submit" name="btn2" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Keluar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Anda yakin ingin keluar?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <a href="<?= base_url('User/logout'); ?>" class="btn btn-primary">Iya</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-4">
                    <h1 class="fw-bold text-primary mb-4">Ko<span class="text-white">Sena</span></h1>
                    <p>Koperasi Avisena Sejahtera Binangkit</p>
                    <!-- <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div> -->
                </div>
                <div class="col-lg-6 col-md-6">
                    <h5 class="text-light mb-4">Alamat</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Jl Melong No. 170, Kel. Melong, Kec. Cimahi Selatan, Kota Cimahi</p>
                    <p><i class="fa fa-phone-alt me-3"></i>(022)6000830</p>
                    <p><i class="fa fa-envelope me-3"></i>kosena170@gmail.com</p>
                </div>
                <div class="col-lg-2 col-md-2">
                    <h5 class="text-light mb-4">Link</h5>
                    <a class="btn btn-link" href="#home">Halaman</a>
                    <a class="btn btn-link" href="#about">Tentang</a>
                    <a class="btn btn-link" href="#program">Program</a>
                    <a class="btn btn-link" href="#daftar">Daftar</a>
                    <a class="btn btn-link" href="#team">Pengurus</a>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">RSU Avisena~</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/lib/wow/wow.min.js'); ?>"></script>
    <script src="<?= base_url('assets/lib/easing/easing.min.js'); ?>"></script>
    <script src="<?= base_url('assets/lib/waypoints/waypoints.min.js'); ?>"></script>
    <script src="<?= base_url('assets/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url('assets/lib/parallax/parallax.min.js'); ?>"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('assets/js/main.js'); ?>"></script>
    </body>

    </html>