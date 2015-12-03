<?
    include("header.php");
?>
<style type="text/css">
    #map {
        width: 1920px;
        height: 980px;
    }
    #test {
      list-style-type: none;
      margin-top: 80px;
      margin-left: 80px;
      padding: 0;
      width: 200px;
      background-color: #f1f1f1;
      margin-s
      position: absolute;
      z-index: 99999;

    }

    #test a {
      display: block;
      color: #000;
      padding: 8px 0 8px 16px;
      text-decoration: none;
    }

    #test li a.active {
      background-color: #00838F;
      color: white;
    }

    #test li a:hover:not(.active) {
      background-color: #555;
      color: white;
    }
</style>

<section>
  <ul id="test">
        <link rel="stylesheet" href="style.css" />
        <li><a class="active" href="#home">crises :</a></li>
        <li><a href="#news">Guerre</a></li>
        <li><a href="#contact">Naturelle</a></li>
        <li><a href="#Icendie">Incendie</a></li>
        <li><a href="#Attentat">Attentat</a></li>
        <li><a href="#Famine">Famine</a></li>
        <li><a href="#Epidemie">Epidemie</a></li>
        <li><a href="#Ncleaire">Nucleaire</a></li>
        <li><a href="#Accident">Accident</a></li>
      </ul>
  <div id="map"></div>
</section>
