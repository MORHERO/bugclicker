<?php ?>
<section id="screen-internet" class="screen-section internet">
  
  <div id="wp-search" class="webpage active">
    <div class="ascii">
      



    </div>









    <!--<div>
      <div class="wp-header flex justify-center">
        <p class="wp-headline">Findo</p>
      </div>
      <div class="wp-content flex justify-center">
        <input id="wp-searchField" type="text"/>
        <button onclick="search()">Search</button>
      </div>
    </div>
    <div class="ascii flex wrap">
      <p>
        The Internet section is in a very early state.<br/>
        How to use the search:<br/>
        Type "work" to buy workers that can fix bugs for you.<br/>
        Type "intranet" to manage your workers. Assign them to a bug or upgrade them.
      </p>
    </div>-->
  </div>
  
  <div id="wp-workers" class="webpage">
    <div class="wp-header flex justify-center">
      <p class="wp-headline">GET NEW EMPLOYES</p>
    </div>
    <div class="wp-content flex wrap justify-between">
      <div>
        <button onclick="search('wp-search')">Back to Search</button>
      </div>
      <div id="buy-worker-sk" class="worker-wrap">
        <div class="emp-type">Script Kiddy</div>
        <div class="emp-stats">
          <p>Cost: [x][ ][ ][ ][ ]</p>
          <p>Speed: [x][ ][ ][ ][ ]</p>
          <p>Knowledge: [x][ ][ ][ ][ ]</p>
        </div>
        <div class="emp-desc">
          <p>Yeah I know nobody wants to work with them... But you are a nobody so thats not my problem.</p>
        </div>
        <div class="emp-buy"><button onclick="skHelper.buy()">BUY SCRIPT KIDDI FOR 10$</button></div>
      </div>
      <div id="buy-worker-mk" class="worker-wrap">
        <div class="emp-type">Monkey</div>
        <div class="emp-stats">
          <p>Cost: [x][ ][ ][ ][ ]</p>
          <p>Speed: [x][ ][ ][ ][ ]</p>
          <p>Knowledge: [x][ ][ ][ ][ ]</p>
        </div>
        <div class="emp-desc">
          <p>Monkey know more about how a Computer works as a Script Kiddi and is much cuter. But watch out to have enogth Bananas in the Kitchen!</p>
        </div>
        <div class="emp-buy"><button onclick="skHelper.buy()">BUY MONKEY FOR ___$</button></div>
      </div>
    </div>
  </div>
  <div id="wp-intranet" class="webpage">
    <div class="wp-header flex justify-center">
      <p class="wp-headline">MANAGE YOUR EMPLOYES</p>
    </div>
    <div>
      <button onclick="search('wp-search')">Back to Search</button><br/><br/>
    </div>
    <div class="wp-content flex wrap justify-between">
      <div class="worker-wrap">
        <div class="emp-type">Script Kiddy</div>
        <div class="emp-buy"><button onclick="skHelper.upgrade()">UPGRADE SCRIPT KIDDI</button></div>
        <div class="emp-buy"><button onclick="skHelper.set_target(1)">SET SCRIPT KIDDI TARGET TO BOHRBUG</button></div>
        <div class="emp-buy"><button onclick="skHelper.sell()">SELL SCRIPT KIDDI</button></div>
      </div>
      <div class="worker-wrap">
        <div class="emp-type">Monkey</div>
        <div class="emp-buy"><button onclick="monkey.upgrade()">UPGRADE MONKEY</button></div>
        <div class="emp-buy"><button onclick="monkey.set_target(1)">SET MONKEY TARGET TO BOHRBUG</button></div>
        <div class="emp-buy"><button onclick="monkey.sell()">SELL MONKEY</button></div>
      </div>
      <div class="worker-wrap">
        <p>
          Managing the workers is very experimental at this stage it will be reworked with v0.7.
        </p>
      </div>
    </div>
  </div>
  <div id="wp-company" class="webpage">

  </div>
</section>