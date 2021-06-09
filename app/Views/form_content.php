<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta value="<?= $data[0]['banner1']; ?>" name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css"
    href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/fonts.css">
  <link rel="stylesheet" href="/css/style.css">

  <!-- Font special for pages-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
    rel="stylesheet">

  <!-- Main CSS-->
  <link href="/css/main_form.css" rel="stylesheet" media="all">

  <script src="/js/global_form.js"></script>

  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }

    .container {
      padding: 2rem 0rem;
    }

    h4 {
      margin: 2rem 0rem 1rem;
    }

    .table-image {

      td,
      th {
        vertical-align: middle;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Travelingkuys</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/Admin/dashboard/galery">Gallery <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/Admin/dashboard/content">Content</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="page-wrapper bg-dark p-t-100 p-b-50">
    <div class="wrapper wrapper--w900">
      <div class="card card-6">
        <div class="card-heading">
          <h2 class="title">Content Management</h2>
        </div>
        <form method="POST" action="/Admin/edit_landing">

          <div class="card-body">
            <div class="form-row">
              <div class="name">Banner 1</div>
              <div class="value">
                <input class="input--style-6" type="text" value="<?= $data[0]['banner1']; ?>" name="banner1">
              </div>
            </div>
            <div class="form-row">
              <div class="name">Banner 2</div>
              <div class="value">
                <input class="input--style-6" type="text" value="<?= $data[0]['banner2']; ?>" name="banner2">
              </div>
            </div>
            <div class="form-row">
              <div class="name">Banner 3</div>
              <div class="value">
                <input class="input--style-6" type="text" value="<?= $data[0]['banner3']; ?>" name="banner3">
              </div>
            </div>
            <div class="form-row">
              <div class="name">Title</div>
              <div class="value">
                <input class="input--style-6" type="text" value="<?= $data[0]['title1']; ?>" name="title1">
              </div>
            </div>
            <div class="form-row">
              <div class="name">Content 1</div>
              <div class="value">
                <div class="input-group">
                  <textarea class="textarea--style-6" name="content1"><?= $data[0]['content1']; ?></textarea>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="name">Content 2</div>
              <div class="value">
                <div class="input-group">
                  <textarea class="textarea--style-6" name="content2"><?= $data[0]['content2']; ?></textarea>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="name">Content 3</div>
              <div class="value">
                <div class="input-group">
                  <textarea class="textarea--style-6" name="content3"><?= $data[0]['content3']; ?></textarea>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="name">Service 1</div>
              <div class="value">
                <div class="input-group">
                  <textarea class="textarea--style-6" name="service1"><?= $data[0]['service1']; ?></textarea>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="name">Service 2</div>
              <div class="value">
                <div class="input-group">
                  <textarea class="textarea--style-6" name="service2"><?= $data[0]['service2']; ?></textarea>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="name">Service 3</div>
              <div class="value">
                <div class="input-group">
                  <textarea class="textarea--style-6" name="service3"><?= $data[0]['service3']; ?></textarea>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="name">Service 4</div>
              <div class="value">
                <div class="input-group">
                  <textarea class="textarea--style-6" name="service4"><?= $data[0]['service4']; ?></textarea>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="name">Service 5</div>
              <div class="value">
                <div class="input-group">
                  <textarea class="textarea--style-6" name="service5"><?= $data[0]['service5']; ?></textarea>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="name">Service 6</div>
              <div class="value">
                <div class="input-group">
                  <textarea class="textarea--style-6" name="service6"><?= $data[0]['service6']; ?></textarea>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="name">Contact</div>
              <div class="value">
                <div class="input-group">
                  <textarea class="textarea--style-6" name="contact"><?= $data[0]['contact']; ?></textarea>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="name">Phone</div>
              <div class="value">
                <input class="input--style-6" type="text" value="<?= $data[0]['phone']; ?>" name="phone">
              </div>
            </div>
            <div class="form-row">
              <div class="name">Email</div>
              <div class="value">
                <input class="input--style-6" type="text" value="<?= $data[0]['email']; ?>" name="email">
              </div>
            </div>
            <div class="form-row">
              <div class="name">Location</div>
              <div class="value">
                <input class="input--style-6" type="text" value="<?= $data[0]['location']; ?>" name="location">
              </div>
            </div>
            <div class="form-row">
              <div class="name">Footer</div>
              <div class="value">
                <input class="input--style-6" type="text" value="<?= $data[0]['footer']; ?>" name="footer">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn--radius-2 btn--blue-2" type="submit">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>