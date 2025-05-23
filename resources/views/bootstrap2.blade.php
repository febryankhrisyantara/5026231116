<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Bootstrap 2</title>
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
        <h1>Bootstrap Tutorial</h1>
        <p>Bootstrap is the most popular HTML</p>
      </div>

      <div class="row">
        <div class="col bg-dark text-white">Kolom 1</div>
        <div class="col bg-success">
          <div class="row">
            <div class="col-8 bg-danger">Kolom 2.1</div>
            <div class="col-4 bg-warning">Kolom 2.2</div>
          </div>
        </div>
        <div class="col bg-primary">Kolom 3</div>
      </div>
    </div>
  </body>
</html>
