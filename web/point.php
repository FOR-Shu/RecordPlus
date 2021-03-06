<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Record Plus.</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/task.css">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">-->
    <script defer src="/js/script.js"></script>
</head>
<body>
    <div id="search-results" style="display: none;">
        My Score.
    </div>
    <nav class="topnav">
        <div class="logo">
            <a href="#" class="display-sm display-md" id="menu"><i class="fa fa-list-ol"></i></a>
            <a href="<?php echo 'login.php'; ?>" class="hidden-sm"><h1>Record Plus</h1></a>
        </div>
        <div class="user-menu">
            <form action="#" method="post" class="hidden-sm">
                <input type="text" name="search" id="search" placeholder="Search...">
                <i class="fa fa-search"></i>
            </form>
            <div>
                <a href="#"><i class="fa fa-user"></i> Esther Yu </a>
                <a href="<?php echo 'login.php'; ?>"><i class="fa fa-power-off"></i></a>
            </div>
        </div>
    </nav>
   
    <aside class="sidenav hidden-sm hidden-md" id="nav">
       <div class="list">
        <a href="<?php echo 'home.php'; ?>"><i class="fa fa-home"></i> HOME</a>
        <a href="<?php echo 'homework.php'; ?>"><i class="fa fa-book"></i> HOMEWORK +</a>
        <a href="<?php echo 'testplus.php'; ?>"><i class="fa fa-book"></i> TEST +</a>
        <a href="<?php echo 'allpasstool.php'; ?>"><i class="fa fa-award"></i> ALL PASS TOOL</a>
        <a href="<?php echo '#.php'; ?>"><i class="fa fa-cookie-bite"></i> POINT PLUS</a>
        </div>
   </aside>

   <main class="content">
      <div class="grid">
          <div class="mini-reports bg-blue">
                <div class="l">
                    <span>20</span>
                    <span>???????????????</span>
                </div>
                <div class="r">
                    <i class="fa fa-bars c-blue"></i>
                </div>
          </div>
          <div class="mini-reports bg-orange">
                <div class="l">
                    <span>3</span>
                    <span>???????????????</span>
                </div>
                <div class="r">
                    <i class="fa fa-check c-orange"></i>
                </div>
          </div>
          <div class="mini-reports bg-green">
            <div class="l">
                <span>56</span>
                <span>????????????</span>
            </div>
            <div class="r">
                <i class="fa fa-check c-green"></i>
            </div>
      </div>
      </div>

      <div class="grid">
        <div class="painel">
            <div class="painel-header">
                <h4 class="painel-title">????????????</h4>
            </div>
            <div class="painel-body">
                <div class="alert alert-danger">??????????????????????????????</div>
              <table class="zebra">
                  <tr>
                      <th>????????????</th>
                      <th>???????????????</th>
                  </tr>
                  <tr>
                      <td>?????? #1</td>
                      <td>
                          <a href="#" class="btn btn-orange"><i class="fa fa-coins"></i></a>
                      </td>
                  </tr>
                  <tr>
                      <td>?????? #2</td>
                      <td>
                          <a href="#" class="btn btn-orange"><i class="fa fa-coins"></i></a>
                      </td>
                  </tr>
                  <tr>
                      <td>????????? #2</td>
                      <td>
                          <a href="#" class="btn btn-orange"><i class="fa fa-coins"></i></a>
                      </td>
                  </tr>
                  <tr>
                      <td>?????? #1</td>
                      <td>
                          <a href="#" class="btn btn-orange"><i class="fa fa-coins"></i></a>
                      </td>
                  </tr>
                  <tr>
                    <td>?????? #2</td>
                    <td>
                        <a href="#" class="btn btn-orange"><i class="fa fa-coins"></i></a>
                    </td>
                </tr>
                  
              </table>
            </div>
        </div>

    </div>

      <div class="grid">
          <div class="painel">
              <div class="painel-header">
                  <h4 class="painel-title">???????????????</h4>
                  <button data-modal-target="#modal"class="btn btn-green">????????????</button>
                  <div class="modal" id="modal">
                    <div class="container">
                      <div class="header">
                          <h2>??????</h2>
                      </div>
                      <form id="form" class="form">
                          <div class="form-control">
                              <label for="subject">????????????????????????</label>
                          </div>
                          <div class="form-control">
                              <label for="subject">??????????????????</label>
                              <span>52???</span>
                          </div>
                          <button data-close-button class="btn btn-gray">??????</button>
                      </form>
                    </div>
                  </div>
                <div id="overlay"></div>
              </div>
              <div class="painel-body">
                  <div class="alert alert-success">????????????????????????????????????</div>
                <table class="zebra">
                    <tr>
                        <th>????????????</th>
                        <th>???????????????</th>
                    </tr>
                    <tr>
                        <td>??????????????????10???</td>
                        <td>
                            <a href="#" class="btn btn-green"><i class="fa fa-check"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>???????????????????????????10???</td>
                        <td>
                            <a href="#" class="btn btn-green"><i class="fa fa-check"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>????????????50???</td>
                        <td>
                            <a href="#" class="btn btn-green"><i class="fa fa-check"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>????????????10???</td>
                        <td>
                            <a href="#" class="btn btn-green"><i class="fa fa-check"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>?????????All Pass</td>
                        <td>
                            <a href="#" class="btn btn-green"><i class="fa fa-check"></i></a>
                        </td>
                    </tr>
                    
                </table>
              </div>
          </div>

      </div>

      <div class="grid">
        <div class="painel">
            <div class="painel-header">
                <h4 class="painel-title">???????????????</h4>
            </div>
            <div class="painel-body">
                <div class="alert alert-info">???????????????????????????</div>
              <table class="zebra">
                  <tr>
                      <th>????????????</th>
                      <th>???????????????</th>
                  </tr>
                  <tr>
                      <td>??????????????????10???</td>
                      <td>
                          <a href="#" class="btn btn-gray"><i class="fa fa-check"></i></a>
                      </td>
                  </tr>
                  <tr>
                      <td>???????????????????????????10???</td>
                      <td>
                          <a href="#" class="btn btn-gray"><i class="fa fa-check"></i></a>
                      </td>
                  </tr>
                  <tr>
                      <td>????????????50???</td>
                      <td>
                          <a href="#" class="btn btn-gray"><i class="fa fa-check"></i></a>
                      </td>
                  </tr>
                  <tr>
                      <td>????????????10???</td>
                      <td>
                          <a href="#" class="btn btn-gray"><i class="fa fa-check"></i></a>
                      </td>
                  </tr>
                  <tr>
                      <td>?????????All Pass</td>
                      <td>
                          <a href="#" class="btn btn-gray"><i class="fa fa-check"></i></a>
                      </td>
                  </tr>
                  
              </table>
            </div>
        </div>

    </div>

   </main>
   <script src="/js/home.js"></script>
</body>
</html>