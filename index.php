<html>
    <head>
      <title>POS</title>
      <script src="app.js"></script>
      <link rel="stylesheet" type="text/css" href="app.css">
    </head>
    
    <body>
    
        <h1>DPL POS</h1>
    
    <div id="wrapper">
      <div class="one">
        <button id="1" value="1" onclick=selectNum(this.value)>1</button>
        <button id="2" value="2" onclick=selectNum(this.value)>2</button>
        <button id="3" value="3" onclick="selectNum(this.value)">3</button>
      </div>
      <div class="two">
        <button id="4" value="4" onclick="selectNum(this.value)">4</button>
        <button id="5" value="5" onclick="selectNum(this.value)">5</button>
        <button id="6" value="6" onclick="selectNum(this.value)">6</button>
      </div> 
      <div class="three">   
        <button id="7" value="7" onclick="selectNum(this.value)">7</button>
        <button id="8" value="8" onclick="selectNum(this.value)">8</button>
        <button id="9" value="9" onclick="selectNum(this.value)">9</button>
      </div>  
      <div class="four">  
        <button id="decimal" value= . onclick="selectNum(this.value)">.</button>
        <button id="0" value="0" onclick="selectNum(this.value)">0</button>
      </div>
      <div class="addAmount">   
        <button id="add" value= + onclick="selectNum(this.value)">ADD<br/>AMOUNT</button>
      </div>
    </div>
    <div id="result">
          
            <p id="history_value"></p>
          
            <div id="output">
              <p id="dollarsign">$</p>
              <p id="output_value"></p>
          </div>
    </div>
    
    </body>
</html>