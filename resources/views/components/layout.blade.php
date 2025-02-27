 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
     <meta name="description" content="" />
     <meta name="author" content="" />
     <title>Modern Business - Start Bootstrap Template</title>
     <!-- Favicon-->
     <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
     <!-- Bootstrap icons-->
     <!-- Core theme CSS (includes Bootstrap)-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

 </head>

 <body class="d-flex flex-column h-100">
     <main class="flex-shrink-0">
         <!-- Navigation-->


         {{ $slot }}

     </main>
     <!-- Footer-->
     <footer class="bg-dark py-4 mt-auto">
         <div class="container px-5">
             <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                 <div class="col-auto">
                     <div class="small m-0 text-white">Copyright &copy; Your Website 2023</div>
                 </div>
                 <div class="col-auto">
                     <a class="link-light small" href="#!">Privacy</a>
                     <span class="text-white mx-1">&middot;</span>
                     <a class="link-light small" href="#!">Terms</a>
                     <span class="text-white mx-1">&middot;</span>
                     <a class="link-light small" href="#!">Contact</a>
                 </div>
             </div>
         </div>
     </footer>
     <!-- Bootstrap core JS-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
     </script>
     {{ $script ?? '' }}

 </body>

 </html>
