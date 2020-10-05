 <section id="contact" class="contact mb-5">
     <div class="container">
         <div class="row pt-4 mb-4">
             <div class="col text-center">
                 <h2>Contact Us</h2>
             </div>
         </div>

         <div class="row justify-content-center">
             <div class="col-lg-4">
                 <div class="card text-white bg-secondary mb-3 text-center">
                     <div class="card-body">
                         <h5 class="card-title">Contact Us</h5>
                         <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis, ratione.
                             content.</p>
                     </div>
                 </div>
                 <ul class="list-group">
                     <li class="list-group-item">
                         <h1>Location</h1>
                     </li>
                     <li class="list-group-item">Our Office</li>
                     <li class="list-group-item">Jl. Setia Budi No.298</li>
                     <li class="list-group-item">Sumatera Utara, Indonesia</li>
                 </ul>
             </div>
             <div class="col-lg-6">
                 <form>
                     <div class="form-group">
                         <label for="nama">Nama</label>
                         <input type="email" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama">
                     </div>
                     <div class="form-group">
                         <label for="email">Email</label>
                         <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
                     </div>
                     <div class="form-group">
                         <label for="pesan">Pesan</label>
                         <textarea name="pesan" class="form-control" id="pesan" aria-describedby="emailHelp"></textarea>
                     </div>
                     <div class="form-group">
                         <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </section>

 <footer class="bg-dark text-white">
     <div class="container">
         <div class="row pt-3">
             <div class="col text-center">
                 <p>Develop by Me. Copyright <?= date('Y') ?>.</p>
             </div>
         </div>
     </div>

 </footer>


 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="<?= base_url() ?>assets/user/js/jquery-3.4.1.min.js"></script>
 <script src="<?= base_url() ?>assets/user/js/jquery.easing.1.3.js"></script>
 <script src="<?= base_url() ?>assets/user/js/script.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 </body>

 </html>