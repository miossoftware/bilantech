@include('header')
<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Hadi Bir Hesap Oluşturalım</h1>
                        </div>
                        <form class="user" action="add" method="post">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="name_surname"
                                           placeholder="Ad Soyad">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="username"
                                           placeholder="Kullanıcı Adı">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control form-control-user" name="phone"
                                       placeholder="Telefon">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password"
                                           name="password" placeholder="Şifre">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password_again"
                                           placeholder="Şifre Tekrar">
                                </div>
                            </div>
                            <button type="submit" id="submit_button" class="btn btn-primary btn-user btn-block">Hesap
                                Oluştu
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </div>
    <script>
        $("body").off("click", "#submit_button").on("click", "#submit_button", function () {
            let password = $("#password").val();
            let password_again = $("#password_again").val();
            if (password != password_again) {
                alert("Şifreler Uyuşmuyor");
                return false;
            } else {
                let submitResult = this.submit;
                if(submitResult === "1") {
                    alert('Submit başarılı!');
                } else {
                    alert('Submit sırasında bir hata oluştu!');
                }
            }
        });
    </script>
</div>
</body>
@include('footer')
