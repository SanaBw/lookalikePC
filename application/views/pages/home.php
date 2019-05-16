<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<div id="model">
      <div class="sketchfab-embed-wrapper"><iframe width="640" height="480" src="https://sketchfab.com/models/a4b15361682348b28d063c6160d49caa/embed?autostart=1&amp;camera=0" frameborder="0" allowvr allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" onmousewheel=""></iframe>
      </div>
    </div>

    <script>
      function addCase(){
        document.getElementById('resultCase').innerHTML = document.getElementById('case').value;

      }
      function addCpu(){
        document.getElementById('resultCpu').innerHTML = document.getElementById('cpu').value;
      }
      function addCooler(){
        document.getElementById('resultCooler').innerHTML = document.getElementById('cooler').value;
      }
      function addGpu(){
        document.getElementById('resultGpu').innerHTML = document.getElementById('gpu').value;
      }
      function addRam(){
        document.getElementById('resultRam').innerHTML = document.getElementById('ram').value;
      }
      function addHdd(){
        document.getElementById('resultHdd').innerHTML = document.getElementById('hdd').value;
      }
     
      function addMotherboard(){
        document.getElementById('resultMotherboard').innerHTML = document.getElementById('motherboard').value;
      }
      function addPsu(){
        document.getElementById('resultPsu').innerHTML = document.getElementById('psu').value;
      }
      function addCables(){
        document.getElementById('resultCables').innerHTML = document.getElementById('cables').value;
      }

       function addBuildName(){
           var element=document.getElementById('buildname');
           document.getElementById('resultBuildName').innerHTML=document.getElementById('buildName').value;
          element.parentNode.removeChild(element);

        }
        
        function saveBuild(){
            var name=document.getElementById('resultBuildName').innerHTML;
            var cse=document.getElementById('resultCase').innerHTML;
            var cpu=document.getElementById('resultCpu').innerHTML;
            var cpu_cooler=document.getElementById('resultCooler').innerHTML;
            var gpu=document.getElementById('resultGpu').innerHTML;
            var ram=document.getElementById('resultRam').innerHTML;
            var storage=document.getElementById('resultHdd').innerHTML;
            var motherboard=document.getElementById('resultMotherboard').innerHTML;
            var psu=document.getElementById('resultPsu').innerHTML;
            var cables=document.getElementById('resultCables').innerHTML;
            
            
              $.ajax({
                    type:"POST",
                    url:"save",
                    data:{name:name, cse:cse, cpu:cpu, cpu_cooler:cpu_cooler, gpu:gpu, ram:ram, storage:storage, motherboard:motherboard,psu:psu,cables:cables},
                    success: function(msg) {
                        alert("Successifully saved build !")
                    }
                });


            
        }


    </script>



<div id="homeScreen">
    <div id="buttons">
      <h3>Case</h3>
      <form>
      Find by name:
          <select id="case" name="case" style="width:175px;">
            <option></option>
            <option>NZXT S340 Elite</option>
            <option>NZXT H440</option>
          </select>
          or
          <a href="allcases" id="all">View all</a>
      </form>
      <button onclick = 'addCase()' id="add">Add</button><br><br>

        <h3>CPU</h3>
        <form>
        Find by name:
            <select id="cpu" name="cpu" style="width:175px;">
              <option></option>
              <option>Intel Core i7-7700k</option>
              <option>Intel Core i7-8700k</option>
              <option>Intel Core i7-6700k</option>
            </select>
             or
            <a href="allcpus" id="all">View all</a>
        </form>
        <button onclick = 'addCpu()' id="add">Add</button><br><br>


        <h3>CPU Cooler</h3>
        <form>
        Find by name:
            <select id="cooler" name="cooler" style="width:175px;">
              <option></option>
              <option>Cooler Master Hyper 212 EVO</option>
              <option>Corsair H100i v2</option>
            </select>
               or
            <a href="allcoolers" id="all">View all</a>
        </form>
        <button onclick = 'addCooler()' id="add">Add</button><br><br>

        <h3>GPU</h3>
        <form>
        Find by name:
            <select id="gpu" name="gpu" style="width:175px;">
              <option></option>
              <option>MSI GTX 1080 GAMING X 8G</option>
              <option>EVGA GTX 1080 FTW3 HYBRID GAMING</option>
            </select>
               or
            <a href="allgpus" id="all">View all</a>
        </form>
        <button onclick = 'addGpu()' id="add">Add</button><br><br>

        <h3>RAM</h3>
        <form>
        Find by name:
            <select id="ram" name="ram" style="width:175px;">
              <option></option>
              <option>G.Skill Trident Z RGB</option>
              <option>Corsair Vengeance LED White</option>
            </select>
               or
            <a href="allram" id="all">View all</a>
        </form>
        <button onclick = 'addRam()' id="add">Add</button><br><br>

        <h3>Storage</h3>
        <form>
        Find by name:
            <select id="hdd" name="hdd" style="width:175px;">
              <option></option>
              <option>Samsung 850 EVO</option>
              <option>Semsung 960 EVO</option>
            </select>
               or
            <a href="allstorage" id="all">View all</a>
        </form>
        <button onclick = 'addHdd()' id="add">Add</button><br><br>

        <h3>Motherboard</h3>
        <form>
        Find by name:
            <select id="motherboard" name="motherboard" style="width:175px;">
              <option></option>
              <option>Asus Z170-A</option>
              <option>MSI Z270 GAMING PRO CARBON</option>
            </select>
               or
            <a href="allmobos" id="all">View all</a>
        </form>
        <button onclick = 'addMotherboard()' id="add">Add</button><br><br>

        <h3>PSU</h3>
        <form>
        Find by name:
            <select id="psu" name="psu" style="width:175px;">
              <option></option>
              <option>EVGA 500B</option>
              <option>Corsair CS650M</option>
              <option>EVGA SuperNOVA 750</option>
              <option>Corsair AX1500i</option>
              <option>Super Flower SF-2000F14HP</option>
              <option>EVGA 600B</option>
            </select>
              or
            <a href="allpsus" id="all">View all</a>
        </form>
        <button onclick = 'addPsu()' id="add">Add</button><br><br>

        <h3>Cables</h3>
        <form>
        Find by name:
            <select id="cables" name="cables" style="width:175px;">
              <option></option>
              <option>CableMod Basic Cable Extension Kit (WHITE)</option>
              <option>CableMod Basic Cable Extension Kit (RED)</option>
            </select>
              or
            <a href="allcables" id="all">View all</a>
        </form>
        <button onclick = 'addCables()' id="add">Add</button><br><br>
    </div>

    <div id="buildname">
        Give your build a name
        <input type="text" id='buildName'>
        <button onclick = 'addBuildName()'>Save</button>
    </div><br>

    <section class="result">
      <div id="resulttext">
        <h2 id="resultBuildName">Your build</h2>
        <p>Case: <span id="resultCase">NOT SELECTED</span> </p>
        <p>CPU: <span id="resultCpu">NOT SELECTED</span></p>
        <p>CPU Cooler : <span id="resultCooler">NOT SELECTED</span></p>
        <p>GPU: <span id="resultGpu">NOT SELECTED</span></p>
        <p>RAM: <span id="resultRam">NOT SELECTED</span></p>
        <p>Storage: <span id="resultHdd">NOT SELECTED</span></p>
        <p>Motherboard: <span id="resultMotherboard">NOT SELECTED</span></p>
        <p>PSU: <span id="resultPsu">NOT SELECTED</span></p>
        <p>Cables: <span id="resultCables">NOT SELECTED</span></p>
      </div><br>
        <button id="save" onclick="saveBuild()">Save My Build</button>
    </section>
</div>

<script>

</script>
