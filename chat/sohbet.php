
        <div class="container">
            <div class="card bg-light">
                <div class="card-header">
                 Selam Chat
                </div>
                <div class="card-body" style="; height: 500px;">
                    <!-- Giriş ekranı tasarımı başlangıcı -->
                    <div id="girisEkrani" >
                        <div class="row">
                         
                            <div class="col-md-4 offset-md-4">
                                <div class="input-group mb-3">

                                    <div class="input-group-prepend">

                                        <span class="input-group-text" id="kullanici_adi">@</span>
                                    </div>

                                       <input type="text" id="kadi" name="kullanici_adi">
                                </div>
                                <button type="button" onclick="uyeKaydet();" class="form-control btn btn-success">Giriş Yap</button>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <!-- Giriş ekranı tasarımı bitiş -->

                    <div id="chatEkrani" style="display:none;">
                        <div class="row">
                            <div id="mesajAlani" class="col-md-12">
                                
                            </div>
                            <div id="yeniMesajAlani" class="col-md-12" style="position: absolute; bottom: 50px; ">
                                <div class="row">
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="mesaj"
                                            placeholder="Mesaj yazınız.." />
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" onclick="mesajGonder();" class="form-control btn btn-success">Gönder</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.6.2/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.6.2/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyAU-FU3Xch8VSVoQTp225-w8rlLYon2Kq8",
    authDomain: "vital-cedar-312014.firebaseapp.com",
    projectId: "vital-cedar-312014",
    storageBucket: "vital-cedar-312014.appspot.com",
    messagingSenderId: "790573922822",
    appId: "1:790573922822:web:2ff128cb6f16ac4858e187",
    measurementId: "G-WEDKH2L5TK"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
</script>
<script src="./functions.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
