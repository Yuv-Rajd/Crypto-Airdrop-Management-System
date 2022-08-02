<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <title>AIRDROP</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>AIRdrop Manager</div>
            <div class="list-group list-group-flush my-3">
                <a href="index.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                        class="fas fa-home me-2"></i>Home</a>
                <a href="airdrops.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-parachute-box me-2"></i>Airdrops</a>
                <a href="participants.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-user-friends me-2"></i>Participants</a>
                <a href="claimdetail.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-shopping-cart me-2"></i>Claim Detail</a>
                <a href="aabout.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-info me-2"></i>About</a>
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-gift me-2"></i>Products</a> -->
                        <a href="faq.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-question me-2"></i>FAQ</a>
                <a href="chat.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>Chat</a>
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"></i>Outlet</a> -->
                <a href="alogin.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Crypto airdrops</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                               
                                <li><a class="dropdown-item" href="alogin.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Claim Details</h3>
                    <div class="col">
                    <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    
                                    <th scope="col">Token-Symbol</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Approve Action</th>

                                   
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                       include "connect.php";
                                       $sql="SELECT * FROM `joined_in` ORDER BY STATUS DESC;";
                                       $result=mysqli_query($con,$sql);
                                       if($result){
                                          while($row=mysqli_fetch_assoc($result)){
                
                                            
                                            $token_symbol=$row['TOKEN_SYMBOL'];
                                            $pemd=$row['EMAIL'];
                                            $status=$row['STATUS'];
                                            
                                            echo '<tr> 
                                                <th scope="row"><a style="text-decoration:none" href="airdropdetail.php?tokensymbol='.$token_symbol.'"
                                                class="text-dark">'.$token_symbol.'</a></th>
                                                
                                                <td><a style="text-decoration:none" href="pdetail.php?email='.$pemd.'"
                                                class="text-dark">'.$pemd.'</a></td>
                                              ';
                                              if($status=="waiting"){
                                                echo'<td><button style="style="background-color:black"  class="btn btn-primary" onclick="myFunction()"><a style="text-decoration:none" href="aprove.php?tokensymbol='.$token_symbol.'&email='.$pemd.'"
                                                class="text-light">Approve</a></button></td> </tr>';}
                                                else{
                                                    echo'<td>Approved</td> </tr>';
                                                }

                                                
                                                

                                               
                                           
                
                                           
               
                                               

                                                                       }
            }
 ?>
                                
                                
                            </tbody>
                        </table>
                       
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
    <script>
function myFunction() {
  alert("Aproved Succesfully!! ");
}
</script>
</body>

</html>