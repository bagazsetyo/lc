<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Simple Documentation</title>
    <style>
        html{
            scroll-behavior: smooth;
        }
        section{
            height: 100%;
            min-height: 100vh;
        }
        h5{
            padding-top: 100px;
        }
        span{
            padding-left: 10px;
            padding-right: 10px;
        }
        footer{
            margin-top: -40px;
        }
    </style>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#">Documentation</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="container">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#structure">Structure</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#koding">Koding</a>
          </li>
        </ul>
    </div>
  </div>
</nav>

<div class="">
    <section id="home">
        <div class="container">
            <div class="col-lg-12">
                <div class="d-block justify-content-center align-items-center text-center">
                    <h1 class="text-capitalize mt-5">Documentation</h1>
                </div>
                <p>
                    <h4>Prepare Laravel 8 </h4>

                    setelah instal buka  <br>
                    <span class="badge-dark text-white">
                        App\Providers\RouteServiceProvider
                    </span> <br>
                    lalu uncomment bagian <br>
                    <span class="badge-dark text-white">
                        protected $namespace = 'App\\Http\\Controllers';
                    </span>

                </p>
            </div>
        </div>   
    </section>
    <section id="structure" class="bg-light text-capitalize">
        <div class="container">
            <div class="col-lg-12">
                <h5>Database</h5>
                <ul class="list-unstyled">
                    <li>
                        penamaan table
                        <ol>
                            <li>pemnuatan nama table harus berawalan tb. ex tb_user</li>
                        </ol>
                    </li>
                    <li>
                        pembuatan table
                        <ol>
                            <li>
                                pembuatan table <br>
                                <p class="text-muted">
                                    php artisan make:migration create_{nama table}_table 
                                </p>
                                <span class="badge-dark text-white">
                                    php artisan make:migration create_tb_book_table
                                </span>
                            </li>
                            <li>
                                menambahkan fild di table <br>
                                <p class="text-muted">
                                php artisan make:migration add_{nama yang mau di tambah}_to_{nama table di db}_table --table= {nama table di db} 
                                </p>
                                <span class="badge-dark text-white">
                                    php artisan make:migration add_image_to_tb_book_table --table=tb_book
                                </span>
                            </li>
                            <li>
                                foreign table <br>
                                <p class="text-muted">
                                $table->foreignId('{nama fild}')->constrained()->on('{nama table referensi}')->onDelete('cascade');
                                </p>
                                <span class="badge-dark text-white">
                                    $table->foreignId('book_id')->constrained()->on('tb_book')->onDelete('cascade');
                                </span>
                            </li>
                        </ol>
                    </li>
                </ul>
                <h5>Folder</h5>
                <ul class="list-unstyled">
                    <li>
                        Penamaan table di controller
                        <ol>
                            <li>
                                untuk user yang tidak login / landing page berada di <br>
                                <span class="badge-dark text-white">
                                    App\Http\Controller
                                </span>
                            </li>
                            <li>
                                untuk user yang login login<br>
                                <span class="badge-dark text-white">
                                    App\Http\Controller\{nama controller}
                                </span>
                            </li>
                        </ol>
                    </li>
                </ul>
                <h5>View</h5>
                <ul class="list-unstyled">
                    <li>
                        Dibagi menjadi
                        <ol>
                            <li>
                                Includes<br>
                                berisi file js, css, nav, sidebar <br>
                                untuk file js dan css hanya link
                            </li>
                            
                            <li>
                                Layouts<br>
                                berisi Layouts
                            </li>
                            <li>
                                Pages<br>
                                di bagi menjadi 
                                <ol>
                                    <li>
                                        Landing page
                                        <br>
                                        dan file view untuk user yang tidak perlu login
                                    </li>
                                    <li>
                                        file view untuk user yang login
                                        <br>
                                        <p class="text-muted">
                                            View/Page/{file view untuk}/{nama route}/{action}
                                        </p>
                                        <span class="badge-dark text-white">
                                            View/Page/Admin/Book/index.blade.php
                                        </span>
                                    </li>
                                </ol>
                            </li>
                        </ol>
                    </li>
                    <li>
                        Penamaan file sesuai action di controller
                        <ol>
                            <li>index</li>
                            <li>create</li>
                            <li>edit</li>
                            <li>show</li>
                        </ol>
                    </li>
                </ul>
            </div>
        </div>   
    </section>
    <section id="koding" >
        <div class="container">
            <div class="col-lg-12">
                <h5>Models</h5>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <h6>Eloquent Models</h6>

                        <span class="badge-dark">
                            protected $fillable
                        </span> <br>
                        digunakan untuk menampung fild yang ada di table, bertujuan untuk mempermudah melakukan update dan create data di controller 
                    </li>
                    <li>
                        <h6>Relation Models</h6>
                        penulisan
                        <p class="text-muted">
                            public function {nama function}() <br> 
                            { <br>
                                return $this->hasMany({nama model}::class, '{nama fild relasi}');  <br>
                            } <br>
                        </p>
                        example <br>
                        <p>
                            public function detailBook() <br> 
                            { <br>
                                return $this->hasMany(DetailBook::class, 'user_id');  <br>
                            } <br>
                        </p><br>
                        <p>
                            di gunakan untuk relation model terdapat beberapa tipe, tapi yang sering di gunakan
                        </p>
                        <ol>
                            <li>
                                hasMany (one to many)
                            </li>
                            <li>
                                belongsTo (many to one)
                            </li>
                        </ol>
                    </li>
                    <li>
                        Controller
                        <ol>
                            <li>
                                compact data <br>
                                menggunakan with 
                                <span class="badge-dark">
                                    ->with(['data' => $data])
                                </span>
                            </li>
                            <li>
                                relation <br>
                                menngunakan with <br>
                                penulisan
                                <p class="text-muted">
                                    ->with('{relation1}.{relation yang ada di relation1}','relation2')
                                </p>
                                <span class="badge-dark">
                                    ->with('detailsbook.book','test')
                                </span>
                            </li>
                            <li>
                                pencarian data <br>
                                menngunakan findOrFail() *khusus id
                                <br>
                                 jika data fail maka akan di arahkan ke 404
                            </li>
                            <li>
                                request <br>
                                menggunakan <span class="badge-dark">$request->all();</span> untuk menyimpan atau mengupdate data. *model harus menggunakan protected fillable, dan pastikan semua fild yang ada di database sudah masuk ke dalam protected fillabe
                            </li>
                        </ol>
                    </li>
                    <li>
                        blade
                        <ol>
                            <li>
                                if else ternary <br>
                                penulian
                                <p class="text-muted">  
                                    $data->user ? 'jika true' :  'jika false'
                                </p>
                                atau 
                                <p class="text-muted">
                                    $data->user ??  'jika false'
                                </p>
                            </li>
                            <li>
                                error check <br>
                                penulian
                                <p class="text-muted">
                                    @ error('{name inputan}') @ enderror
                                </p>
                                tanpa spasi
                            </li>
                        </ol>
                    </li>
                </ul>
            </div>
        </div>   
    </section>
</div>
<footer class="text-center mt-auto h-100 bg-secondary text-white">
    LOI {{date('Y')}}
</footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    
  </body>
</html>