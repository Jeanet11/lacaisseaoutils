<?php
$navbar = '<li><a href="index.php">Accueil</a></li>
            ';
$body = '
<div class="row" style="margin-top:20px;">
  <div class="form-group col-md-4">
      <label for="exampleSelect2" class="col-md-4">Thématique</label>
      <div class="col-md-8">
        <select multiple class="form-control"  id="exampleSelect2">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    </div>
    <div class="form-group col-md-4">
      <label for="exampleSelect2" class="col-md-4">Typologie</label>
      <div class="col-md-8">
        <select multiple class="form-control" id="exampleSelect2">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    </div>
  <div class="form-group col-md-4">
    <div class="row">
      <label for="example-date-input" class="col-md-5 col-form-label">Date début</label>
      <div class="col-md-7">
        <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
      </div>
    </div>
    <div class="row">
      <label for="example-date-input" class="col-md-5 col-form-label">Date fin</label>
      <div class="col-md-7">
        <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
      </div>
    </div>
    <div class="row">
      <label for="example-date-input" class="col-md-5 col-form-label">Distance (km)</label>
      <div class="col-md-7">
        <input class="form-control" type="number" value=30 id="example-number-input">
      </div>
    </div>
  </div>
</div>

<div><iframe width="100%" height="450px" frameBorder="0" src="https://umap.openstreetmap.fr/fr/map/map-de-la-haute-vallee-de-laude_170436?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false"></iframe><p><a href="https://umap.openstreetmap.fr/fr/map/map-de-la-haute-vallee-de-laude_170436">Voir en plein écran</a></p></div>

<p><a href="event_detail.php"</a>Hackathon de l</p>

  ';
include('layout.php');