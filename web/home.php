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
            <a href="<?php echo 'index.php'; ?>" class="hidden-sm"><h1>Record Plus</h1></a>
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
        <a href="<?php echo '#'; ?>"><i class="fa fa-home"></i> HOME</a>
        <a href="<?php echo 'homework.php'; ?>"><i class="fa fa-book"></i> HOMEWORK +</a>
        <a href="<?php echo 'testplus.php'; ?>"> <i class="fa fa-check"></i> TEST +</a>
        <a href="<?php echo 'allpasstool.php'; ?>"><i class="fa fa-award"></i> ALL PASS TOOL</a>
        <a href="<?php echo 'point.php'; ?>"><i class="fa fa-cookie-bite"></i> POINT PLUS</a>
        </div>
   </aside>

   <main class="content">
      <div class="grid">
          <div class="mini-reports bg-blue">
                <div class="l">
                    <span>10</span>
                    <span>Tasks</span>
                </div>
                <div class="r">
                    <i class="fa fa-bars c-blue"></i>
                </div>
          </div>
          <div class="mini-reports bg-green">
                <div class="l">
                    <span>2</span>
                    <span>????????????</span>
                </div>
                <div class="r">
                    <i class="fa fa-book c-green"></i>
                </div>
          </div>
          <div class="mini-reports bg-orange">
                <div class="l">
                    <span>3</span>
                    <span>????????????</span>
                </div>
                <div class="r">
                    <i class="fa fa-check c-orange"></i>
                </div>
          </div>
          <div class="mini-reports bg-red">
                <div class="l">
                    <span>2</span>
                    <span>????????????</span>
                </div>
                <div class="r">
                    <i class="fa fa-user c-red"></i>
                </div>
          </div>
      </div>

      <div class="grid">
        <div class="painel">
            <div class="painel-header">
                <h4 class="painel-title"> Tasks</h4>
                <button data-modal-target="#modal"class="btn btn-green">?????? +</button>
                <div class="modal" id="modal">
                  <div class="container">
                    <div class="header">
                        <h2>??????????????????</h2>
                    </div>
                    <form id="form" class="form">
                        <div class="form-control">
                            <label for="subject">??????</label>
                            <input type="text" id="subject" autofocus placeholder="Subject"/>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <label for="subject">????????????</label>
                            <input type="quest"  id="quest" autofocus placeholder="Tasks"/>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="form-control">
                            <label for="subject">????????????</label>
                            <input type="deadline"  id="deadline" autofocus placeholder="YYYY-MM-DD"/>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <button class="btn btn-orange">??????</button>
                        <button data-close-button class="btn btn-gray">??????</button>
                    </form>
                  </div>
                </div>
              <div id="overlay"></div>
              <!-- ???????????? -->
              </div>
              <div class="painel-body">
                  <div class="alert alert-success">Fighting!</div>
                <table class="zebra">
                    <tr>
                        <th>??????</th>
                        <th>??????</th>
                        <th>??????</th>
                        <th>?????????</th>
                        <th>??????</th>
                    </tr>
                    <tr>
                        <td>?????????</td>
                        <td>????????????</td>
                        <td>20/02/2019</td>
                        <td>4D:2H:38M</td>
                        <td>
                            <a href="#" class="btn btn-red"><i class="fa fa-trash"></i></a>
                            <a href="#" class="btn btn-green"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-orange"><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>???????????????</td>
                        <td>?????????</td>
                        <td>20/02/2019</td>
                        <td>4D:2H:38M</td>
                        <td>
                            <a href="#" class="btn btn-red"><i class="fa fa-trash"></i></a>
                            <a href="#" class="btn btn-green"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-orange"><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>????????????</td>
                        <td>?????????</td>
                        <td>14/1/2020</td>
                        <td>4D:2H:38M</td>
                        <td>
                            <a href="#" class="btn btn-red"><i class="fa fa-trash"></i></a>
                            <a href="#" class="btn btn-green"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-orange"><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>????????????</td>
                        <td>?????????</td>
                        <td>20/02/2019</td>
                        <td>4D:2H:38M</td>
                        <td>
                            <a href="#" class="btn btn-red"><i class="fa fa-trash"></i></a>
                            <a href="#" class="btn btn-green"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-orange"><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>????????????</td>
                        <td>???????????????</td>
                        <td>20/02/2020</td>
                        <td>4D:2H:38M</td>
                        <td>
                            <a href="#" class="btn btn-red"><i class="fa fa-trash"></i></a>
                            <a href="#" class="btn btn-green"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-orange"><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>
                    
                </table>
              </div>
          </div>

      </div>

      <div class="grid">
          <div class="painel">
              <div class="painel-header">
                    <h4 class="painel-title"> Queue</h4>
              </div>
              <div class="painel-body">
                  <div class="alert alert-danger"> Take a pretty task!</div>
                <form action="#" class="inline-form" method="post">
                    <div class="group">
                        <label for="#"> ??????</label>
                        <select name="" id="">
                            <option value="">????????????</option>
                            <option value="">?????????</option>
                            <option value="">????????????</option>
                            <option value="">????????????</option>
                            <option value="">???????????????</option>
                        </select>
                    </div>
                    <div class="group">
                        <label for="#"> ????????????</label>
                        <select name="" id="">
                            <option value="">??????????????????</option>
                            <option value="">??????????????????</option>
                            <option value="">????????????</option>
                        </select>
                    </div>
                    
                    <div class="group">
                        <label for="#"> ????????????</label>
                        <select name="" id="">
                            <option value="">??????</option>
                            <option value="">??????</option>
                        </select>
                    </div>

                    <div class="group">
                        <p>&nbsp;</p>
                        <input type="submit" class="btn btn-green" style="width: 40%;" value="Enter">
                    </div>
                    
               </form>
              </div>
          </div>
      </div>
   </main>
   <script src="/js/home.js"></script>
</body>
</html>