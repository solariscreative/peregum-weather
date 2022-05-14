<?php get_header();?>

<style>
* {
  box-sizing: border-box;
}

.wrapper {
  font-family: 'Open Sans';
  max-width: 60rem;
  width: 100%;
  height: 27rem;
  margin: 0 auto;
}

.tabs {
  position: relative;
  margin: 2rem 0;
  background: #01702d;
}

.tabs::before,
.tabs::after {
  content: "";
  display: table;
}

.tabs::after {
  clear: both;
}

.tab {
  float: left;
}

.tab-switch {
  display: none;
}

.tab-label {
  position: relative;
  display: block;
  line-height: 2.75em;
  height: 3em;
  padding: 0 1.618em;
  background: #01702d;
  border-right: 0.125rem solid #01702d;
  color: #fff;
  cursor: pointer;
  top: 0;
  transition: all 0.25s;
}

.tab-label:hover {
  top: -0.25rem;
  transition: top 0.25s;
}

.tab-content {
  position: absolute;
  z-index: 1;
  top: 2.75em;
  left: 0;
  padding: 1.618rem;
  background: #fafafa;
  color: #2c3e50;
  border-bottom: 0.25rem solid #fafafa;
  opacity: 0;
  transition: all 0.35s;
  width: 100%;
}

.tab-switch:checked+.tab-label {
  background: #fafafa;
  color: #2c3e50;
  border-bottom: 0;
  border-right: 0.125rem solid #fafafa;
  transition: all 0.35s;
  z-index: 1;
  top: -0.0625rem;
}

.tab-switch:checked+label+.tab-content {
  z-index: 2;
  opacity: 1;
  transition: all 0.35s;
}

table {
  width: 100%;
}

th {
  text-align: left;
}

.weather-widget {
  display: flex;
  justify-content: center;
  font-family: "Open Sans";
  gap: 2rem;
}

.weather-widget img {
  width: 55px;
  height: 55px;
}

.weather-item {
  display: flex;
  flex-direction: row;
  align-items: center;
  gap: 0.5rem;
}

.icon {
  display: flex;
  align-items: center;
}

.icon svg {
  width: 40px;
}

.temp {
  display: flex;
  justify-content: center;
  gap: 1rem;
  font-weight: 700;
}

.title {
  color: #8A8A8A;
  font-weight: 700;
}

.max {
  color: #FA6565;
}

.min {
  color: #83C8FB;
}
</style>

<div class="weather-widget">
  <div class="weather-item">
    <?php foreach(array_slice($results1, 0, 1) as $result) : $weather = $result->weatherList[0]->description; ?>

    <div class="icon">
      <?php if ($weather === 'nublado' || $weather === 'nuvens quebradas' || $weather === 'nuvens dispersas' || $weather === 'céu pouco nublado' || $weather === 'céu pouco nublado') : ?>
      <svg height="20.315mm" viewBox="0 0 57.587 57.587" width="20.315mm" xmlns="http://www.w3.org/2000/svg">
        <title />
        <g>
          <circle cx="24.791" cy="26.367" fill="#f5ce42" r="14.185" />
          <path d="M35.272,45.405A12.292,12.292,0,1,0,23.46,29.746a8.582,8.582,0,1,0-4.854,15.659Z" fill="#b9d8e8" />
        </g>
      </svg>
      <?php endif ?>
      <?php if ($weather === 'chuva fraca' || $weather === 'chuva moderada' || $weather === 'chuva forte') : ?>
      <svg height="20.315mm" viewBox="0 0 57.587 57.587" width="20.315mm" xmlns="http://www.w3.org/2000/svg">
        <title />
        <path d="M35.25,36.834A12.292,12.292,0,1,0,23.438,21.175a8.582,8.582,0,1,0-4.853,15.659Z" fill="#b9d8e8" />
        <g>
          <path d="M37.208,41.516V34.454" fill="none" stroke="#83b3cb" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="4" />
          <path d="M26.045,47.145V43.123" fill="none" stroke="#9fa6b7" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="4" />
          <path d="M21.591,38.3V34.454" fill="none" stroke="#615c9a" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="4" />
          <line fill="none" stroke="#9fa6b7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" x1="30.245"
            x2="30.245" y1="36.76" y2="34.454" />
        </g>
      </svg>
      <?php endif ?>
      <?php if ($weather === 'sol' || $weather === 'céu limpo') : ?>
      <svg height="20.315mm" viewBox="0 0 57.587 57.587" width="20.315mm" xmlns="http://www.w3.org/2000/svg">
        <title />
        <circle cx="28.398" cy="28.696" fill="#f5ce42" r="16.948" />
      </svg>
      <?php endif ?>
    </div>
    <div class="infos">
      <div class="title">Poá</div>
      <div class="temp">
        <div class="max"><?= $result->main->tempMax; ?>°C</div>
        <div class="min"><?= $result->main->tempMin; ?>°C</div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  <div class="weather-item">
    <?php foreach(array_slice($results2, 0, 1) as $result) : $weather = $result->weatherList[0]->description; ?>

    <div class="icon">
      <?php if ($weather === 'nuvens quebradas' || $weather === 'nuvens dispersas' || $weather === 'céu pouco nublado' || $weather === 'céu pouco nublado') : ?>
      <svg height="20.315mm" viewBox="0 0 57.587 57.587" width="20.315mm" xmlns="http://www.w3.org/2000/svg">
        <title />
        <g>
          <circle cx="24.791" cy="26.367" fill="#f5ce42" r="14.185" />
          <path d="M35.272,45.405A12.292,12.292,0,1,0,23.46,29.746a8.582,8.582,0,1,0-4.854,15.659Z" fill="#b9d8e8" />
        </g>
      </svg>
      <?php endif ?>
      <?php if ($weather === 'nublado' || $weather === 'chuva fraca' || $weather === 'chuva moderada' || $weather === 'chuva forte') : ?>
      <svg height="20.315mm" viewBox="0 0 57.587 57.587" width="20.315mm" xmlns="http://www.w3.org/2000/svg">
        <title />
        <path d="M35.25,36.834A12.292,12.292,0,1,0,23.438,21.175a8.582,8.582,0,1,0-4.853,15.659Z" fill="#b9d8e8" />
        <g>
          <path d="M37.208,41.516V34.454" fill="none" stroke="#83b3cb" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="4" />
          <path d="M26.045,47.145V43.123" fill="none" stroke="#9fa6b7" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="4" />
          <path d="M21.591,38.3V34.454" fill="none" stroke="#615c9a" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="4" />
          <line fill="none" stroke="#9fa6b7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" x1="30.245"
            x2="30.245" y1="36.76" y2="34.454" />
        </g>
      </svg>
      <?php endif ?>
      <?php if ($weather === 'sol') : ?>
      <svg height="20.315mm" viewBox="0 0 57.587 57.587" width="20.315mm" xmlns="http://www.w3.org/2000/svg">
        <title />
        <circle cx="28.398" cy="28.696" fill="#f5ce42" r="16.948" />
      </svg>
      <?php endif ?>
    </div>
    <div class="infos">
      <div class="title">Perus</div>
      <div class="temp">
        <div class="max"><?= $result->main->tempMax; ?>°C</div>
        <div class="min"><?= $result->main->tempMin; ?>°C</div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>

<div class="wrapper">
  <div class="tabs">
    <div class="tab">
      <input type="radio" name="css-tabs" id="tab-1" checked class="tab-switch">
      <label for="tab-1" class="tab-label">Poá</label>
      <div class="tab-content">
        <table>
          <tr>
            <th>Dia</th>
            <th>Temperatura</th>
            <th>Umidade</th>
            <th>Vento</th>
            <th>Precipitação de Chuva</th>
          </tr>
          <?php foreach(array_slice($results1, 0, 10) as $result) : ?>
          <tr>
            <td><?= $result->dtTxt; ?></td>
            <td><?= $result->main->tempMin; ?>°C min / <?= $result->main->tempMax; ?>°C max</td>
            <td><?= $result->main->humidity; ?>%</td>
            <td><?= $result->wind->speed; ?>km/h</td>
            <td><?= $result->weatherList[0]->description; ?></td>
          </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
    <div class="tab">
      <input type="radio" name="css-tabs" id="tab-2" class="tab-switch">
      <label for="tab-2" class="tab-label">Perus</label>
      <div class="tab-content">
        <table>
          <tr>
            <th>Dia</th>
            <th>Temperatura</th>
            <th>Umidade</th>
            <th>Vento</th>
            <th>Precipitação de Chuva</th>
          </tr>
          <?php foreach(array_slice($results2, 0, 10) as $result) : ?>
          <tr>
            <td><?= $result->dtTxt; ?></td>
            <td><?= $result->main->tempMin; ?>°C min / <?= $result->main->tempMax; ?>°C max</td>
            <td><?= $result->main->humidity; ?>%</td>
            <td><?= $result->wind->speed; ?>km/h</td>
            <td><?= $result->weatherList[0]->description; ?></td>
          </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>
</div>