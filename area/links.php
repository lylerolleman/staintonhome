<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>The Area</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/main_style.css">
    </head>
    <body>
        <div class="container">
        <?php
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/navbar.php";
            include $path;
        ?>
        </div>
        <div class="container">
            <div class="list-item">
                <h3>Education</h3><hr>
                <table>
                    <tr>
                        <!--<td>
                            <img src="http://calendar.ualberta.ca/mime/media/6/2955/UA-COLOUR.png" alt="ualberta logo"/>
                        </td>-->
                        <td>
                            <a href="www.ualberta.ca"><h3>University of Alberta</h3></a><br>
                            <a href="http://www.studyincanada.ualberta.ca/StudyAtUAlberta.aspx">International Program</a>
                        </td>
                        <td>
                            <p>Add description here</p>
                        </td>
                    </tr>
                    <tr>
                        <!--<td>
                            <img src="http://www.tru.ca/__shared/assets/sp-logo920537.jpg" alt="macewan logo"/>
                        </td>-->
                        <td>
                            <a href="http://www.macewan.ca/wcm/index.htm"><h3>Grant Macewan University</h3></a><br>
                            <a href="http://www.macewan.ca/wcm/ProspectiveStudents/InternationalStudents/macewaninternational/index.htm">International Program</a>
                        </td>
                        <td>
                            <p>Add description here</p>
                        </td>
                    </tr>
                    <tr>
                        <!--<td>
                            <img src="http://www.irss.ca/images/NAIT.jpg" alt="nait logo"/>
                        </td>-->
                        <td>
                            <a href="http://www.nait.ca/"><h3>Northern Alberta Institute of Technology</h3></a><br>
                            <a href="http://www.nait.ca/49117.htm">International Program</a>
                        </td>
                        <td>
                            <p>Add description here</p>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="list-item">
                <h3>Government</h3><hr>
                <table>
                        <tr>
                            <!--<td>
                                <img src="http://www.strathcona.ca/static/images/logo-sc.gif" alt="strathcona logo"/>
                            </td>-->
                            <td>
                                <a href="http://www.strathcona.ca/"><h3>Strathcona County</h3></a>        
                            </td>
                            <td>
                                <p>Add description here</p>
                            </td>
                        </tr>
                        <tr>
                            <!--<td>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cd/City_of_Edmonton_Logo.svg/2000px-City_of_Edmonton_Logo.svg.png" alt="edmonton logo" />
                            </td>-->
                            <td>
                                <a href="https://www.edmonton.ca/"><h3>City of Edmonton</h3></a>
                            </td>
                            <td>
                                <p>Add description here</p>
                            </td>
                        </tr>
                        <tr>
                            <!--<td>
                                <img src="http://mgareview.alberta.ca/wp-content/uploads/media/logo-goa-2.png" alt="alberta logo"/>
                            </td>-->
                            <td>
                                <a href="http://www.alberta.ca/index.aspx"><h3>Government of Alberta</h3></a>
                            </td>
                            <td>
                                <p>Add description here</p>
                            </td>
                        </tr>
                    </table>
            </div>
            <div class="list-item">
                <h3>Transit</h3><hr>
                  <table>
                      <tr>
                          <!--<td>
                              <img src="https://upload.wikimedia.org/wikipedia/en/archive/7/70/20121130185306!Strathcona_County_Transit_logo.png" alt="strathcona transit logo" />
                          </td>-->
                          <td>
                              <a href="http://www.strathcona.ca/departments/transit/"><h3>Strathcona County Transit</h3></a>
                          </td>
                          <td>
                            <p>Add description here</p>
                          </td>
                      </tr>
                      <tr>
                          <!--<td>
                              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Edmonton_Transit_System_logo_with_text.svg/2000px-Edmonton_Transit_System_logo_with_text.svg.png" alt="Edmonton transit logo" />
                          </td>-->
                          <td>
                              <a href="http://www.edmonton.ca/edmonton-transit-system-ets.aspx"><h3>Edmonton Transit System</h3></a>
                          </td>
                          <td>
                              <p>Add description here</p>
                          </td>
                      </tr>
                  </table>
             </div>
            <div class="list-item">
                <h3>Entertainment</h3><hr>
                <table>
                    <tr>
                        <td>
                            <a href="http://www.winspearcentre.com/wins-home?view=featured"><h3>Winspear Center</h3></a>
                        </td>
                        <td>
                            <p>Add description here</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="http://www.citadeltheatre.com/"><h3>Citadel Theatre</h3></a>
                        </td>
                        <td>
                            <p>Add description here</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>
