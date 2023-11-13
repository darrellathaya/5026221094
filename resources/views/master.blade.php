<!DOCTYPE html>
<html>
    <head>
        <title>Darrell Athaya Refaldi - 5026221094</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class = "container">
            <header>

                <h2>Blog MalasNgoding</h2>
                <nav>
                    <a href="/blog">HOME</a>
                    |
                    <a href="/blog/tentang">TENTANG</a>
                    |
                    <a href="/blog/kontak">KONTAK</a>
                </nav>
            </header>
            <hr/>
            <br/>
            <br/>

            <!-- bagian judul halaman blog -->
	        <h3> @yield('judul_halaman') </h3>

            @yield('header')

            @yield('isiHalaman')

            @yield('konten')

            <br/>
            <br/>
            <hr/>
            <footer>
                <p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p>
            </footer>

        </div>
    </body>
</html>
